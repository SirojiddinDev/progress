<?php


namespace frontend\controllers;


use frontend\models\UploadForm;
use yii\web\Controller;
use yii\web\UploadedFile;

class UploadController extends Controller
{
    public function actionIndex()
    {
        $madel = new UploadForm();
        if ($madel->load(\Yii::$app->request->post())) {
            if ($madel->myFile = UploadedFile::getInstances($madel, 'myFile')) {
                $madel->upload();
            }
        }
        return $this->render('index', ['madel' => $madel]);
    }

}