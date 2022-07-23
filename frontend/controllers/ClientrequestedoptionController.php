<?php

namespace frontend\controllers;

use frontend\models\MasterEditRequest;
use yii;
use yii\web\Controller;
use app\models\ClientRequestedOption;

class ClientrequestedoptionController extends Controller{
    public function actionAddoption($key){
        $model = new ClientRequestedOption();
        $model->key = $key;
        $master_edit_request = MasterEditRequest::find()->where(['id'=>$key])->one();
        $message = 'not success';
        $this->layout = 'request';
        return $this->render('add_option', ['add' => $model, 'message' => $message, 'option' => $master_edit_request->name]);

    }

    public function actionSaveclientrequestedoption($option){
        $model = new ClientRequestedOption();
        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->user_id = Yii::$app->user->id;
            if ($model->save()){
                $message = 'success';
            }
            else{
                $message = 'failed';
            }
        }
        $this->layout = 'request';
        return $this->render('add_option', ['add' => $model, 'message' => $message, 'option' => $option]);

    }
}