<?php

namespace frontend\models\property;

use Yii;
use yii\base\Model;

class TermsConditions extends Model{
    public $id;
    public $terms_and_conditons1;
    public $terms_and_conditons2;
    public $terms_and_conditons3;
    
  
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [            
            [[ 'id', 'terms_and_conditons1' , 'terms_and_conditons2', 'terms_and_conditons3'], 'required'],
        ];
    }
}