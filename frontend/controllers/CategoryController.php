<?php


namespace frontend\controllers;


use common\models\Category;

use yii\web\Controller;
use Yii;

class CategoryController extends Controller
{
    public function actionIndex()
    {
        $mad = Category::find()->all();
        return $this->render('index',['madel'=>$mad]);
    }

    public function actionAdd()
    {
        $category = new Category();
        if($category->load(Yii::$app->request->post())){
//            echo "<pre>";
//            var_dump($category);
            if($category->save()){
                Yii::$app->session->setFlash("success","Malumot qushildi");
                $this->redirect('/category/index');
            }
        }
        return $this->render('add',['madel'=>$category]);
    }
}