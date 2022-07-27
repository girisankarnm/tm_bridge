<?php
namespace frontend\models;
use yii\base\Model;
use yii\web\UploadedFile;

class LegalDocsImages extends Model
{
    /**
     * @var UploadedFile
     */
    public $pan_image;
    public $business_licence_image;   

    public function rules()
    {
        return [
            [['pan_image', 'business_licence_image'], 'required', 'on'=>['create']],
            [['pan_image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'maxSize' => 1024 * 1024 * 2],
            [['business_licence_image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'maxSize' => 1024 * 1024 * 2],            
        ];
    }

    public function upload($imageFile, $file_name)
    {
        if ($this->validate()) {
            $imageFile->saveAs('uploads/' . $file_name,false);
            return true;
        } else {
            return false;
        }
    }
}
?>
