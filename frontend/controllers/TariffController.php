<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;
use yii\web\Response;

class TariffController extends Controller {

    public function actionTariffdinner(){
        $this->layout = 'tm_main';
        return $this->render('tariff_wizard_dinner', []);
    }
    public function actionTariffmeals(){
        $this->layout = 'tm_main';
        return $this->render('tariff-wizard_meal', []);
    }
    public function actionTariffroom(){
        $this->layout = 'tm_main';
        return $this->render('tariff_room', []);

    }
    public function actionTariffmotherdate(){
        $this->layout = 'tm_main';
        return $this->render('tariff_mother_date', []);
    }

    public function actionTariffweekday(){
        $this->layout = 'tm_main';
        return $this->render('tariff_week_day', []);
    }

     public function actionTariffmotherdaterange(){
        $this->layout = 'tm_main';
        return $this->render('tariff_mather_date_range', []);
    }
    public function actionTariffmotherroomrate(){
        $this->layout = 'tm_main';
        return $this->render('tariff_mather_room_rate', []);
    }
    public function actionTariffmothermealrate(){
        $this->layout = 'tm_main';
        return $this->render('tariff_mather_meal_rate', []);
    }
     public function actionTariffmotherhikedayrate(){
        $this->layout = 'tm_main';
        return $this->render('tariff_mather_hike_day_rate', []);
    }
    public function actionTariffmothermandatorydinner(){
        $this->layout = 'tm_main';
        return $this->render('tariff_mather_mandatory_dinner_rate', []);
    }

}