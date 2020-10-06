<?php


namespace frontend\controllers;


use yii\web\Controller;

class ShopController extends Controller
{
    public function actionShop()
    {
        return $this->render('shop');
    }

    public function actionShop_extended()
    {
        return $this->render('shop_extended');
    }

    public function actionShop_fullwidth()
    {
        return $this->render('shop_fullwidth');
    }

    public function actionShop_listing()
    {
        return $this->render('shop_listing');
    }

    public function actionShop_listing_with_product_sidebar()
    {
        return $this->render('shop_listing_with_product_sidebar');
    }

    public function actionShop_right_sidebar()
    {
        return $this->render('shop_right_sidebar');
    }
}