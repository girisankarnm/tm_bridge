<?php

namespace frontend\controllers;

use frontend\models\Destination;
use frontend\models\Location;

class ExportController extends \yii\web\Controller
{
    public function actionIndex()
    {

//        return $this->asJson('hello');

        $modelImport = new \yii\base\DynamicModel([
            'fileImport'=>'File Import',
        ]);
//        $modelImport->addRule(['fileImport'],'required');
//        $modelImport->addRule(['fileImport'],'file',['extensions'=>'ods,xls,xlsx'],['maxSize'=>1024*1024]);

        if(\Yii::$app->request->post()){
//            $fileImport = \yii\web\UploadedFile::getInstance();
            $fileImport = $_FILES['fileImport'];
//            return $this->asJson($fileImport['tmp_name']);
            if($fileImport){
                $inputFileType = \PHPExcel_IOFactory::identify($fileImport['tmp_name']);
                $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($fileImport['tmp_name']);
                $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
                $baseRow = 2;
//                return $this->asJson($sheetData);
//                return $this->asJson($sheetData[$baseRow]['B']);
                while(!empty($sheetData[$baseRow]['A'])){

                    $model = Location::find()->where(['name'=>$sheetData[$baseRow]['B']])->one();
                    if (!$model){
                        $model = new Location();
                        $model->name = (string)$sheetData[$baseRow]['B']; //Location/ State Name
                        $model->country_id = 1;
                        $model->status = 10;
                        $model->save();
                    }
                   if ($model){

                       $Destination = new Destination();
                       $Destination->name = (string)$sheetData[$baseRow]['C'];
                       $Destination->code = substr($sheetData[$baseRow]['C'],0,3);
                       $Destination->country_id = 1;
                       $Destination->location_id = $model->id;
                       $Destination->description = 'Welcome to '.$sheetData[$baseRow]['C'];
                       $Destination->status = 10;
                       $Destination->save();
                   }

                    $baseRow++;
                }
                \Yii::$app->getSession()->setFlash('success','Success');
            }else{
                \Yii::$app->getSession()->setFlash('error','Error');
            }
        }


        return $this->render('index');
    }

}
