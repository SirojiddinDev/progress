<?php


namespace frontend\models;


use yii\db\ActiveRecord;

class UploadForm extends ActiveRecord
{
    public $myFile;
    public function rules()
    {
        return [
            [['myFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg','maxFile'=>4]
        ];
    }


    public function upload()
{
    if(!is_dir(\Yii::getAlias('@webroot').'/uploads'))
    {
        mkdir(\Yii::getAlias('@webroot').'/uploads');
    }
    if ($this->validate()) {
        $this->myFile->saveAs('uploads/' . $this->myFile->baseName . '.' . $this->myFile->extension);
        return true;
    } else {
        return false;
    }
}
}