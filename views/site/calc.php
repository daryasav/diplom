<h3 style='margin-top: 40px;'>Калькулятор калорий</h3>
<form name="form1">
    <div class="calc" style="background-color: white;">
        <div class="pit"><h5>Заполните анкету для расчета нормы калорий</h5></div>
        <!-- <label class="col" style="padding: 0; font-size: 14px; margin-top: 20px;">Имя, фамилия </label> <input type="text" class="formm col"> -->
        <div class="row" style='margin-top: 20px;'>
            <div class="col-sm-4">
                <label class="col" style="padding: 0; font-size: 14px;" >Рост, см </label> <input type="text" name='par1' class="formm col">
            </div>
            <div class="col-sm-4">
                <label class="col" style="padding: 0; font-size: 14px;" >Вес, кг </label> <input name='par2' type="text" class="formm col">
            </div>
            <div class="col-sm-4">
                <label class="col" style="padding: 0; font-size: 14px;" >Возраст, лет </label> <input name='par3' type="text" class="formm col">
            </div>
        </div>
        <label class="gend"><input type="radio" value="1" name='par'> Мужчина</label>
        <label class="gend"><input type="radio" value='2' name='par'> Женщина</label>
        <div class="row">
            <div class="col-sm-6" style='margin-top: 20px;'>
                <label class="col" style="padding: 0; font-size: 14px;">Цель </label> 
                <select name="goal" class="formm col sel" >
                    <option hidden>Выберите значение...</option>
                    <option class="opt" value="1">Похудеть</option>
                    <option class="opt" value="2">Поддерживать форму</option>
                    <option class="opt" value="3">Набрать мышечную массу</option>
                </select>
            </div>
            <div class="col-sm-6" style='margin-top: 20px;'>
                <label class="col" style="padding: 0; font-size: 14px;">Количество тренировок/нед. </label> 
                <select name="count" class="formm col">
                    <option hidden>Выберите значение...</option>
                    <option value="0">0</option>
                    <option value="1">1-2</option>
                    <option value="2">2-3</option>
                    <option value="3">3-4</option>
                    <option value="4">4-5</option>
                    <option value="5">5 и больше</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6" style='margin-top: 20px;'>
                <label class="col" style="padding: 0; font-size: 14px;">Уровень физической подготовки </label> 
                <select class="formm col sel" name="podg">
                    <option hidden>Выберите значение...</option>
                    <option value="0">Новичок</option>
                    <option value="1">Есть опыт (регулярные занятия спортом более 2х раз в неделю)</option>
                    <option value="2">Спортсмен-любитель (регулярные занятия спортом более 4х раз в неделю)</option>
                    <option value="3">Спортсмен</option>
                </select>
            </div>
            <div class="col-sm-6" style='margin-top: 20px;'>
                <label class="col" style="padding: 0; font-size: 14px;">Уровень активности </label> 
                <select name="active" class="formm col">
                    <option hidden>Выберите значение...</option>
                    <option value="1">Сидячая работа, малоподвижный образ жизни</option>
                    <option value="2">Сидячая работа, среднеактивный образ жизни</option>
                    <option value="3">Работа связана с физической нагрузкой, активный образ жизни</option>
                </select>
            </div>
        </div>
        <!-- <button class="slide_from_left calcbut col-sm-4" onclick="calc(form1)">Составить</button> -->
        <input type="button" value="Составить" onclick="calc(form1)" class="calcbut col-sm-4">
    </div>
    <div class="calc calc2">
        <div class="itog">
            <center>
            <!-- <h5>Параметры расчета</h5> -->
                <span class="pit" style="font-size: 20px;">Цель: <span id='gol'></span></span>
                <div class="row" style="margin-top: 40px;">
                    <div class="col-sm-3">
                        <h5 id="hei"></h5>
                        <p>Рост</p>
                    </div>
                    <div class="col-sm-3">
                        <h5 id="wei"></h5>
                        <p>Вес</p>
                    </div>
                    <div class="col-sm-3">
                        <h5 id="year"></h5>
                        <p>Возраст</p>
                    </div>
                    <div class="col-sm-3">
                        <h5 id="sex"></h5>
                        <p>Пол</p>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-sm-3">
                        <h5 id="prot"></h5>
                        <p>Белки, г</p>
                    </div>
                    <div class="col-sm-3">
                        <h5 id="fat"></h5>
                        <p>Жиры, г</p>
                    </div>
                    <div class="col-sm-3">
                        <h5 id="carb"></h5>
                        <p>Углеводы, г</p>
                    </div>
                    <div class="col-sm-3">
                        <h5 id="cal"></h5>
                        <p>Калории</p>
                    </div>
                </div>
            </center>
        </div>
    </div>
</form>


<script>
    function calc(obj){
        var goll;
        var sex;
        var carb, prot, fat;
        if(obj.par.value == '1'){
            var res = 66.5 + (13.75 * obj.par2.value) + (5 * obj.par1.value) - (6.78 * obj.par3.value);
            sex = 'М';
        }
        if(obj.par.value == '2'){
            var res = 655 + (9.56 * obj.par2.value) + (1.85 * obj.par1.value) - (4.68 * obj.par3.value); 
            sex = 'Ж';
        }
        if(res != null){
            if (obj.active.value != null){
                if(obj.active.value == '1'){
                    res = res * 1.2;
                }
                if(obj.active.value == '2'){
                    res = res * 1.45;
                }
                if(obj.active.value == '3'){
                    res = res * 1.7;
                }
            }  
        }
        if (obj.count.value != null){
            if(obj.count.value == '1'){
                res = res + 70;
            }
            if(obj.count.value == '2'){
                res = res + 100;
            }
            if(obj.count.value == '3'){
                res = res + 150;
            }
            if(obj.count.value == '4'){
                res = res + 200;
            }
            if(obj.count.value == '5'){
                res = res + 250;    
            }
        }
        if (obj.goal.value != null){
            if(obj.goal.value == '1'){
                res = res - 350;
                goll = 'Похудеть';
                carb = (res * 0.45)/4;
                carb = Math.round(carb);
                prot = (res * 0.3)/4;
                prot = Math.round(prot);
                fat = (res * 0.25)/9;
                fat = Math.round(fat);
            }
            if(obj.goal.value == '2'){
                res = res;
                goll = 'Поддерживать форму';
                carb = (res * 0.5)/4;
                carb = Math.round(carb);
                prot = (res * 0.25)/4;
                prot = Math.round(prot);
                fat = (res * 0.25)/9;
                fat = Math.round(fat);
            }
            if(obj.goal.value == '3'){
                res = res + 250;
                goll = 'Набрать мышечную массу';
                carb = (res * 0.45)/4;
                carb = Math.round(carb);
                prot = (res * 0.30)/4;
                prot = Math.round(prot);
                fat = (res * 0.25)/9;
                fat = Math.round(fat);
            }
        }
        
        res = Math.round(res);
        var golll = goll.bold();
        var hei = obj.par1.value.bold();
        var wei = obj.par2.value.bold();
        var year = obj.par3.value.bold();
        var sexx = sex.bold();

        document.getElementById('gol').innerHTML = golll;
        document.getElementById('hei').innerHTML = hei;
        document.getElementById('wei').innerHTML = wei;
        document.getElementById('year').innerHTML = year;
        document.getElementById('sex').innerHTML = sexx;
        document.getElementById('prot').innerHTML = '<b>' + prot + '</b>';
        document.getElementById('fat').innerHTML = '<b>' + fat + '</b>';
        document.getElementById('carb').innerHTML = '<b>' + carb + '</b>';
        document.getElementById('cal').innerHTML = '<b>' + res + '</b>';
    }
</script>
