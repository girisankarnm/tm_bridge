<?php
namespace frontend\models;
use yii\base\Model;
use yii\web\UploadedFile;

class PropertyImage extends Model
{
    /**
     * @var UploadedFile
     */
    //public $imageFile;
    public $logoFile;
    public $proFile;

    public function rules()
    {
        return [
            [['proFile', 'logoFile'], 'required', 'on'=>['create']],
            [['proFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
            [['logoFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
        ];
    }
    
    public function upload($imageFile, $file_name)
    {        
        if ($this->validate()) {
            //$this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            $imageFile->saveAs('uploads/' . $file_name);
            return true;
        } else {
            return false;
        }
    }

    public function upload2($file_name)
    {   
        if ($this->validate()) {
            //$this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            $this->logoFile->saveAs('uploads/' . $file_name);
            return true;
        } else {
            return false;
        }
    }

    public function attributeLabels()
    {
        return [
            'imageFile' => 'Property picture',
        ];
    }
}
?>