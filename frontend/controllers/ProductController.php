<?php


namespace frontend\controllers;


use common\models\Product;
use yii\web\Controller;

class ProductController extends Controller
{
    public function actionProduct_category()
    {
        return $this->render('product_category');
    }

    public function actionIndex()
    {
        $madel = Product::find()->asArray()->all();
        return $this->render('index', ['madel' => $madel]);
    }

    public function actionView()
    {
        $id = $_GET['id'];
        $madel = Product::find()->asArray()->all($id);
        return $this->render('view', ['madel' => $madel]);
    }

    public function actionEdit()
    {
        $id = $_GET['id'];
        $madel = Product::findOne($id);
        return $this->render('edit', ['data' => $madel]);
    }


    public function actionAdd()
    {
        $product = new Product();
        if ($product->load(\Yii::$app->request->post())) {
            if ($product->save()) {
                \Yii::$app->session->setFlash("success", "Malumot qushildi");
                $this->redirect('/category/index');
            }
        }
        return $this->render('add',['madel'=>$product]);
    }

}