<?php


namespace frontend\models;


use common\models\Image;
use yii\db\ActiveRecord;

class UploadForm extends ActiveRecord
{
    public $myFile;

    public function rules()
    {
        return [
            [['myFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 10]
        ];
    }


    public function upload()
    {
//    var_dump($madel);die();

        if (!is_dir(\Yii::getAlias('@webroot') . '/uploads')) {
            mkdir(\Yii::getAlias('@webroot') . '/uploads');
        }
        if (!is_dir(\Yii::getAlias('@webroot') . '/uploads/40x40')) {
            mkdir(\Yii::getAlias('@webroot') . '/uploads/40x40');
        }

        if ($this->validate()) {
            $i = 1;
            foreach ($this->myFile as $item) {
                $name = strtotime("+$i seconds");
//                echo $name;die();
                $ext = $item->extension;
                $size = $item->size;

                $path = \Yii::getAlias('@webroot') . '/uploads/' . $name . '.' . $ext;
                $path_40_40 = \Yii::getAlias('@webroot') . '/uploads/40x40/' . $name . '.' . $ext;
                $item->saveAs('uploads/' . $name . '.' . $item->extension);
                $model = new Image();
                $model->product_id = 1;
                $model->name = $name . '.' . $ext;
                $model->size = $size;
                $model->main = 1;
                $model->save();

                if ($ext == 'jpg') {
                    $img = $this->resize_imagejpg($path, 40, 40);
                    imagejpeg($img, $path_40_40);
                }
                if ($ext == 'png') {
                    $img = $this->resize_imagepng($path, 40, 40);
                    imagepng($img, $path_40_40);

                }
                if ($ext == 'gif') {
                    $img = $this->resize_imagegif($path, 40, 40);
                    imagegif($img, $path_40_40);
                }
                $i++;
            }
            return true;
        } else {
            return false;
        }
    }


// for jpg
    function resize_imagejpg($file, $w, $h)
    {
        list($width, $height) = getimagesize($file);
        $src = imagecreatefromjpeg($file);
        $dst = imagecreatetruecolor($w, $h);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $w, $h, $width, $height);
        return $dst;
    }

// for png
    function resize_imagepng($file, $w, $h)
    {
        list($width, $height) = getimagesize($file);
        $src = imagecreatefrompng($file);
        $dst = imagecreatetruecolor($w, $h);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $w, $h, $width, $height);
        return $dst;
    }

// for gif
    function resize_imagegif($file, $w, $h)
    {
        list($width, $height) = getimagesize($file);
        $src = imagecreatefromgif($file);
        $dst = imagecreatetruecolor($w, $h);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $w, $h, $width, $height);
        return $dst;
    }
}