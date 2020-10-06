<?php


namespace frontend\controllers;


use yii\web\Controller;

class ProductController extends Controller
{
    public function actionProduct_category()
    {
        return $this->render('product_category');
    }

}