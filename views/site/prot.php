<h3 style='margin-top: 40px;'>Спорт с противопоказаниями</h3>
<form name="form2">
    <div class="calc">
        <div class="pit"><h5>Заполните форму и узнайте, какие нагрузки для вас предпочтительны</h5></div>
        <h6 style="margin-top: 30px;">Отметьте имеющиеся у вас противопоказания</h6>
        <label class="opr"><input type="checkbox" value="1" class='par'> Сердечно-сосудистые заболевания</label><br>
        <label class="opr"><input type="checkbox" value="2" class='par'> Проблемы с артериальным давлением</label><br>
        <label class="opr"><input type="checkbox" value="3" class='par'> Проблемы с суставами (артриты)</label><br>
        <label class="opr"><input type="checkbox" value="4" class='par'> Наличие грыжи</label><br>
        <label class="opr"><input type="checkbox" value="5" class='par'> Сахарный диабет</label><br>
        <label class="opr"><input type="checkbox" value="6" class='par'> Проблемы с щитовидной железой</label><br>
        <label class="opr"><input type="checkbox" value="7" class='par'> Проблемы с позвоночником</label><br>
        <label class="opr"><input type="checkbox" value="8" class='par'> Плохое зрение</label><br>
        <label class="opr"><input type="checkbox" value="9" class='par'> Варикозное расширение вен</label><br>
        <label class="opr"><input type="checkbox" value="10" class='par'> Заболевания дыхательной системы (астма, бронхит)</label><br>
        <label class="opr"><input type="checkbox" value="11" class='par'> Ожирение</label><br>
        <input type="button" value="Рассчитать" onclick="prot(form2)" class="prbut col-sm-3">
    </div>
    <div id="ress" class="">
        <h5 id="zag"></h5>
        <h6 class="result" id="res"></h6>
    </div>
</form>

<script>
    function prot(obj){
        var ress = document.getElementById('ress');
        ress.className += ' calc';
        document.getElementById('zag').innerHTML = 'Общие рекомендации';
        checkbox = document.getElementsByClassName('par');
        var str;
        var res = " ";
        for(var i=0; i<checkbox.length; i++){
            if(checkbox[i] . checked) {
                str = checkbox[i].value;
                if(str == 1){
                    res += '&#8226; При заболеваниях сердечно-сосудистой системы рекомендуется заниматься лечебной гимнастикой, совершать ежедневные прогулки совмещая с бегом в легком темпе, плаваньем и ЛФК. <br><br>';
                    document.getElementById('res').innerHTML = res;
                }

                if(str == 2){
                    res += '&#8226; При высоком давлении рекомендуается тренироваться не более 45 минут. Подойдут такие нагрузки, как ходьба, гимнастика, ЛФК и плаванье. При этои необходимо постоянно контроллировать давление и пульс. <br><br>';
                    res += "&#8226; При низком давлении следует вести активный образ жизни. Отлично подойдут такие виды спорта, как аэробика, плавание, верховая езда, велосипед, бег, прыжки. Но силовые нагрузки под запретом. <br><br>";
                    document.getElementById('res').innerHTML = res;
                }

                if(str == 3){
                    res += '&#8226; При артритах необходимо укреплять мышцы вокруг суставов. Рекомендуется выполнять кардио-нагрузки для общего укрепления организма (ЛФК, ходьба, степпер), а также легкие силовые нагрузки. <br><br>';
                    document.getElementById('res').innerHTML = res;
                }

                if(str == 4){
                    res += '&#8226; При грыжах стоит исключить ударные нагрузки, такие как бег, а также силовые упражнения с большими весами. Стоит сделать упор на плаванье, йогу и легкие фитнес-программы. <br><br>';
                    document.getElementById('res').innerHTML = res;
                }

                if(str == 5){
                    res += '&#8226; При сахарном диабете нет тренировок, которые были бы запрещены, однако во время занятий необходимо следить за уровнем сахара в крови, а также при необходимости принимать углеводы во время тренировки. <br> <br>';
                    document.getElementById('res').innerHTML = res;
                }

                if(str == 6){
                    res += '&#8226; При заболеваниях щитовидной железы не стоит допускать слишком интенсивных нагрузок, это может привести к обмороку, поэтому стоит использовать умеренные нагрузки и следить за пульсом. <br><br>';
                    document.getElementById('res').innerHTML = res;
                }
                if(str == 7){
                    res += '&#8226; При проблемах с позвоночником необходимо полностью исключить физическую активность, предусматривающую резкие движения, большие нагрузки и высокую вероятность получения травм: подпрыгивания, кувырки, гимнастику, хоккей, бокс и прочие виды спорта. Что касается занятий в тренажерном зале и групповых программ (пилатес, шейпинг, танцы), то они в обязательном порядке согласовываются с ортопедом: резкие повороты туловища и поднятие тяжестей могут негативно сказаться на состоянии позвоночника. <br><br>';
                    document.getElementById('res').innerHTML = res;
                }
                if(str == 8){
                    res += '&#8226; При плохом зрении следует исключить чрезмерные нагрузки и силовые упражнения с большими весами, которые повлекут за собой повышение давления глазного дна, что неблагоприятно скажется на зрении. <br><br>';
                    document.getElementById('res').innerHTML = res;
                }
                if(str == 9){
                    res += '&#8226; При варикозе не рекомендуется делать упражнения с большими весами на ноги, а также делать какие-либо упражнения со штангой (присед, выпады и т.д) <br><br>';
                    document.getElementById('res').innerHTML = res;
                }
                if(str == 10){
                    res += '&#8226; При заболеваниях дыхательной системы рекомендуются регулярные аэробные упражнения 3-4 раза в неделю по 30-45 минут, а также не заниматься упражнениями на холодном воздухе. <br><br>';
                    document.getElementById('res').innerHTML = res;
                }
                if(str == 11){
                    res += '&#8226; При ожирении рекомендуется увеличить тренировки на выносливость, такие как ходьба и велосипед. Следует избегать толчковых движений, а также локальных упражнений на суставы и позвоночник.';
                    document.getElementById('res').innerHTML = res;
                }
            }

        }
        // str += checkbox[i].value + " ";
        // document.getElementById('res').innerHTML = str;
    }
</script>