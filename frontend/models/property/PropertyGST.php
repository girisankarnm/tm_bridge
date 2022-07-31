<?php
namespace frontend\models\property;
use yii\base\Model;
use yii\web\UploadedFile;

class PropertyGST extends Model
{
    /**
     * @var UploadedFile
     */
    public $gst_image;
    public $gst_number;

    public function rules()
    {
        return [            
            [
                ['gst_image'], 'required', 'whenClient' => "function (attribute, value) {
                    $('#legaltaxdocumentation-gst_number').val($('#legaltaxdocumentation-gst_number').val().trim());                    
                    return ( $('#legaltaxdocumentation-gst_number').val().trim().length != 0 && $('#gst_image_is_there').val() != 1); 
                }"
            ],
            
            [['gst_image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'maxSize' => 1024 * 1024 * 2],            
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
