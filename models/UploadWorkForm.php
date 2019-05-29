<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadWorkForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $file;

    public function rules()
    {
        return [
            [['file'], 'file', 'skipOnEmpty' => false]
        ];
    }
    
    public function upload($name, $extension)
    {
        if ($this->validate()) {
            $this->file->saveAs('teamsWorks/' . $name . '.' . $extension);
            return true;
        } else {
            return false;
        }
    }
}