<?php

namespace app\controllers;

use app\models\Link;
use app\models\LinkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

class LinkController extends Controller
{

    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    public function actionInde()
    {
        $searchModel = new LinkSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Link();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                $model->video = UploadedFile::getInstances($model, 'video');
                $temp_name = time() . '_tr.' . $model->video[0]->extension;
                if($model->video[0]->saveAs('video/'.$temp_name)){
                    $model->src = $temp_name;
                    $model->save(false);
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            if($model->video = UploadedFile::getInstances($model, 'video')){
                $temp_name = time() . '_tr.' . $model->video[0]->extension;
                if($model->video[0]->saveAs('video/'.$temp_name)){
                    $model->src = $temp_name;
                    $model->save(false);
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }else{
                $model->save(false);
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['inde']);
    }

    protected function findModel($id)
    {
        if (($model = Link::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
