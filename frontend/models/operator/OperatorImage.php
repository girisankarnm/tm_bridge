<?php
namespace frontend\models\operator;
use yii\base\Model;
use yii\web\UploadedFile;

class OperatorImage extends Model{
    /**
     * @var UploadedFile
     */
    public $logo_image;
    public $v_card_image_front;
    public $v_card_image_back;

    public function rules()
    {
        return [
            [['logo_image', 'v_card_image_front', 'v_card_image_back'], 'required', 'on'=>['create']],
            [['logo_image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'maxSize' => 1024 * 1024 * 2,'on'=>['create','update']],
            [['v_card_image_front'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'maxSize' => 1024 * 1024 * 2,'on'=>['create','update']],
            [['v_card_image_back'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'maxSize' => 1024 * 1024 * 2,'on'=>['create','update']],
        ];
    }

    public function upload($imageFile, $file_name)
    {
        if ($this->validate()) {
            $imageFile->saveAs('uploads/' . $file_name, false);
            return true;
        } else {
            return false;
        }
    }
}
