<?php
namespace frontend\models\operator;
use yii\base\Model;
use yii\web\UploadedFile;

class LegalDocsImages extends Model{
    public $pan_image;
    public $gst_image;
    public $cheque_image;

    public function rules()
    {
        return [
            [['pan_image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
            [['gst_image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
            [['cheque_image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    public function upload($imageFile, $file_name)
    {
        if ($this->validate()) {
            $imageFile->saveAs('uploads/' . $file_name);
            return true;
        } else {
            return false;
        }
    }
}