<?php

namespace frontend\controllers;
use frontend\models\MasterEditRequest;
use frontend\models\property\Property;
use yii;
use yii\web\Controller;
use app\models\EditRequest;

class EditrequestController extends Controller{

    public function actionCreaterequest($key,$property_id){

        $model = new EditRequest();
//        new Property();
        $model->key = $key;
        $property = Property::find()->where(['id'=>$property_id])->one();
        $master_edit_request = MasterEditRequest::find()->where(['id'=>$key])->one();
        $this->layout = 'request';
        $message = 'not success';
        $status = 0;
        return $this->render('edit',
            ['add' => $model, 'message' => $message,  'status' => $status, 'property' => $property, 'option' =>$master_edit_request->name]);

    }

    public  function actionSaverequest($option, $property_id){
        $model = new EditRequest();
        $property = Property::find()->where(['id'=>$property_id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->user_id = Yii::$app->user->id;
            $model->optional = $property_id;
            if ($model->save()){
                $message = 'success';
                $status = 1;
            }
            else{
                $message = 'failed';
                $status = 2;
            }
            $this->layout = 'request';
            return $this->render('edit', ['add' => $model, 'message' => $message, 'status' => $status, 'option' => $option, 'property' => $property,]);
        }
    }
}