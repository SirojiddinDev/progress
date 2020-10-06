<?php


namespace frontend\controllers;


use yii\web\Controller;

class SingleController extends Controller
{
    public function actionSingle_product_extended()
    {
        return $this->render('single_product_extended');
    }

    public function actionSingle_product_fullwidth()
    {
        return $this->render('single_product_fullwidth');
    }

    public function actionSingle_product_sidebar()
    {
        return $this->render('single_product_sidebar');
    }
}