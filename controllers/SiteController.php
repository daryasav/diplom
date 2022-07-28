<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Train;
use app\models\Themes;
use yii\data\Pagination;
use app\models\SignForm;
use app\models\Video;
use app\models\Trainer;
use app\models\User;
use app\models\Chat;
use app\models\Messages;
use yii\web\UploadedFile;
use app\models\TrainForm;
use Codeception\Lib\Console\Message;

class SiteController extends Controller{
     
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('index');
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout(){
        Yii::$app->user->logout();
        return $this->redirect('index');
    }

    public function actionSign(){
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new SignForm;
        if ($model->load(Yii::$app->request->post())){
            if($model->validate()){
                $model->password = md5($model->password);
                $model->id_role = '2';
                $model->save(false);
                return $this->redirect('login');
            }
        }
        return $this->render('sign', ['model' => $model]);
    }

    public function actionTrain(){
        $model = Train::find()->all();
        return $this->render('train', compact('model'));
    }

    public function actionTrainone($id, $num){
        $model = Train::find()->where(['id' => $id])->one();
        $model1 = Video::find()->where(['id_train' => $id, 'num' => $num])->all();
        foreach($model1 as $value){
            $lii = $value->link->src;
        }
        return $this->render('trainone', compact('model', 'model1', 'id', 'lii'));
    }

    public function actionThemes(){
        $query = Themes::find();
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 12]);
        $model = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('themes', compact('model', 'pages'));
    }

    public function actionOneth($id){
        $model = Themes::find()->where(['id' => $id])->one();
        return $this->render('oneth', compact('model'));
    }

    public function actionAbout(){
        return $this->render('about');
    }

    public function actionChat(){
        $model = Trainer::find()->all();
        return $this->render('chat', compact('model'));
    }

    public function actionAdd($id){
        $chat = new Chat();
        $idd = Yii::$app->user->identity->id;
        $exist = Chat::find()->where(['id_user' => $idd, 'id_trainer' => $id])->exists();
        if($exist == false){
            $chat->id_user = $idd;
            $chat->id_trainer = $id;
            $chat->save(false);
        }
        return $this->redirect('chatone?id='.$idd);
    }

    public function actionChatone($id){
        $chat = Chat::find()->where(['id_user' => $id])->all();
        return $this->render('chatone', compact('chat'));
    }
    
    // public function actionPersonal($id){
    //     $idus = Yii::$app->user->identity->id;
    //     $this->view->params['par'] = $id;
    //     $model = Messages::find()->where(['id_chat' => $id])->all();
    //     $mess = new Messages();
    //         if($mess->load(Yii::$app->request->post())){
    //             if ($mess->validate()){
    //                 if($mess->my_file = UploadedFile::getInstances($mess, 'my_file')){
    //                     $temp_name = time() . '_vid.' . $mess->my_file[0]->extension;
                        
    //                     if($mess->my_file[0]->saveAs('video/'.$temp_name)){
    //                         $mess->file = 'video/' . $temp_name;
    //                         $mess->id_chat = $id;
    //                         $mess->datetime = date("Y-m-d H:i:s");
    //                         $mess->id_user = $idus;
    //                         $mess->save(false);
    //                         return $this->redirect('personal?id='.$id);
    //                     }
    //                 }else{
    //                     $mess->file = null;
    //                     $mess->datetime = date("Y-m-d H:i:s");
    //                     $mess->id_chat = $id;
    //                     $mess->id_user = $idus;
    //                     $mess->save(false);
    //                     return $this->redirect('personal?id='.$id);
    //                 }
    //             }
    //         }
    //     return $this->render('personal', compact('model','mess', 'id', 'idus'));
    // }
    // public function actionPersonal($id){
    //     $idus = Yii::$app->user->identity->id;
    //     $this->view->params['par'] = $id;
    //     $model = Messages::find()->where(['id_chat' => $id])->all();
        
    //     return $this->render('personal', compact('model','mess', 'id', 'idus'));
    //     }
    public function actionPersonal($id){
        $idus = Yii::$app->user->identity->id;
        $this->view->params['par'] = $id;
        $model = Messages::find()->where(['id_chat' => $id])->all();
        $mess = new Messages();
        if($mess->load(Yii::$app->request->post())){
            if ($mess->validate()){
                if($mess->my_file = UploadedFile::getInstances($mess, 'my_file')){
                    $temp_name = time() . '_vid.' . $mess->my_file[0]->extension;
                    if($mess->my_file[0]->saveAs('video/'.$temp_name)){
                        $mess->file = 'video/' . $temp_name;
                        $mess->id_chat = $id;
                        $mess->id_user = $idus;
                        $mess->datetime=date("Y-m-d H:i:s");
                        $mess->save(false);
                        return $this->redirect('personal?id='.$id);
                    }
                }else{
                    $mess->file = NULL;
                    $mess->id_chat = $id;
                    $mess->id_user = $idus;
                    $mess->datetime=date("Y-m-d H:i:s");
                    $mess->save(false);
                    $mess->message; 
                    return $this->redirect('personal?id='.$id);
                }
            }
        }
        return $this->render('personal', compact('model', 'mess', 'id', 'idus'));
    }
    
    public function actionTest($id){
        $model = Messages::find()->where(['id_chat' => $id])->all();
        $this->layout = false;
        return $this->render('test_form', compact('model'));
    }

    public function actionSendMessage(){
        if (Yii::$app->request->isAjax){
            $mess= new Messages();
            $mess->message = $_POST['val'];
            $mess->file = null;
            $mess->datetime = date("Y-m-d H:i:s");
            $mess->id_chat = $_POST['id'];
            $mess->id_user = $_POST['idus'];
            $mess->save(false);
            return true;
        }
    }

    public function actionChattr($id){
        $model = Trainer::find()->where(['id_user' => $id])->all();
        foreach($model as $value){
            $lii = $value->id;
        }
        $chat = Chat::find()->where(['id_trainer' => $lii])->all();
        return $this->render('chattr', compact('chat'));
        
    }

    public function actionDelch($id){
        if(Messages::find()->where(['id_chat' => $id])->exists()){
            Messages::findOne(['id_chat' => $id])->delete();
        }
        Chat::findOne($id)->delete(); 
        $idus = Yii::$app->user->identity->id;
        if(Yii::$app->user->identity->id_role == '2'){
            return $this->redirect('chatone?id='.$idus);
        } 
        if(Yii::$app->user->identity->id_role == '3'){
            return $this->redirect('chattr?id='.$idus);
        } 
    }

    public function actionAdmin(){
        return $this->render('admin');
    }

    public function actionAnketa(){
        $model = new TrainForm();
        if ($model->load(Yii::$app->request->post())){
            if($model->validate()){
                $model->foto = UploadedFile::getInstances($model, 'foto');
                $temp_name = time() . '_th.' . $model->foto[0]->extension;
                if($model->foto[0]->saveAs('img/'.$temp_name)){
                    $model->img = $temp_name;
                    $model->id_user = Yii::$app->user->identity->id;
                    $model->ok = '0';
                    $model->save(false);
                    return $this->redirect('index');
                }
            }
        }
        return $this->render('anketa', compact('model'));
    }

    public function actionCalc(){
        return $this->render('calc');
    }

    public function actionProt(){
        return $this->render('prot');
    }
}
