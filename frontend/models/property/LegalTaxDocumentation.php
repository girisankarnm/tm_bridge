<?php

namespace frontend\models\property;

use Yii;
use yii\base\Model;

class LegalTaxDocumentation extends Model{
    public $id;
    public $legal_status_id;
    public $pan_number;
    public $pan_image;
    public $business_licence_number;
    public $business_licence_image;
    public $gst_number;
    public $gst_image;
    public $bank_account_number;
    public $bank_account_name;
    public $bank_name;
    public $ifsc_code;
    public $swift_code;
    public $cheque_image;
  
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [            
            [['legal_status_id' , 'pan_number', 'business_licence_number', 'bank_account_number', 'bank_account_name', 'bank_name', 'ifsc_code', 'id'], 'required'],
            [['legal_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyLegalStatus::className(), 'targetAttribute' => ['legal_status_id' => 'id']],
        ];
    }
}