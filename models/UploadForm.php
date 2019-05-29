<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false],
        ];
    }
    
    public function upload($folder, $name)
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('img/' . $folder . '/' . $name);
            return true;
        } else {
            return false;
        }
    }
}