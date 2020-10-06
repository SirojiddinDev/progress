<?php


namespace frontend\controllers;


use yii\web\Controller;

class OrderController extends Controller
{
    public function actionOrder_received()
    {
        return $this->render('order_received');
    }
}