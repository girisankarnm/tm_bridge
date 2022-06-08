<?php

namespace frontend\models\operator;

use Yii;
use yii\base\Model;

class TermsConditions extends Model{
    public $id;
    public $terms_and_conditons;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'id', 'terms_and_conditons'], 'required'],
        ];
    }
}