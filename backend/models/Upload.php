<?php


namespace backend\models;


use common\models\Image;
use yii\db\ActiveRecord;

class Upload extends ActiveRecord
{
    public $myFile;

    public function rules()
    {
        return [
            [['myFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 10]
        ];
    }


    public function upload($id)
    {
//    var_dump($madel);die();
        \Yii::setAlias('@photo', 'E:\OpenServer\domains\Git_yii\progress\frontend\web');
        if (!is_dir(\Yii::getAlias('@photo') . '/uploads')) {
            mkdir(\Yii::getAlias('@photo') . '/uploads');
        }
        if (!is_dir(\Yii::getAlias('@photo') . '/uploads/40x40')) {
            mkdir(\Yii::getAlias('@photo') . '/uploads/40x40');
        }

        if ($this->validate()) {
            $i = 1;
            foreach ($this->myFile as $item) {
                $name = strtotime("+$i seconds");
                $ext = $item->extension;
                $size = $item->size;

                $path = \Yii::getAlias('@photo') . '/uploads/' . $name . '.' . $ext;
                $path_40_40 = \Yii::getAlias('@photo') . '/uploads/40x40/' . $name . '.' . $ext;
                $item->saveAs(\Yii::getAlias('@photo') . '/uploads/' . $name . '.' . $item->extension);
                $model = new Image();
                $model->product_id = $id;
                $model->name = $name . '.' . $ext;
                $model->size = $size;
                $model->main = 1;
                $model->save();
                list($width, $height) = getimagesize($path);

               $w = $width*0.5;
               $h = $height*0.5;


                if ($ext == 'jpg') {
                    $img = $this->resize_imagejpg($path, $w, $h);
                    imagejpeg($img, $path_40_40);
                }
                if ($ext == 'png') {
                    $img = $this->resize_imagepng($path, $w, $h);
                    imagepng($img, $path_40_40);

                }
                if ($ext == 'gif') {
                    $img = $this->resize_imagegif($path, $w, $h);
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