<?php


namespace backend\controllers;

use backend\models\Upload;
use yii\web\Controller;
use yii\web\UploadedFile;

class UploadController extends Controller
{
    public function actionIndex()
    {
        $madel = new Upload();
        if ($madel->load(\Yii::$app->request->post())) {
            if ($madel->myFile = UploadedFile::getInstances($madel, 'myFile')) {
                $madel->upload();
            }
        }
        return $this->render('index', ['madel' => $madel]);
    }

}