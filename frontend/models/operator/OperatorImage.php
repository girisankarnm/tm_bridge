<?php
namespace frontend\models\operator;
use yii\base\Model;
use yii\web\UploadedFile;

class OperatorImage extends Model{
    /**
     * @var UploadedFile
     */
    public $logo_image;
    public $v_card_image;

    public function rules()
    {
        return [
            [['logo_image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
            [['v_card_image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
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