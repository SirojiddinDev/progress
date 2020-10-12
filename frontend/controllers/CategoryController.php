<?php


namespace frontend\controllers;


use common\models\Category;

use yii\web\Controller;
use Yii;

class CategoryController extends Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        $mad = Category::find()->asArray()->all();
        return $this->render('index', ['madel' => $mad]);
    }

    public function actionAdd()
    {
        $category = new Category();
        if ($category->load(Yii::$app->request->post())) {
            if ($category->save()) {
                Yii::$app->session->setFlash("success", "Malumot qushildi");
                $this->redirect('/category/index');
            }
        }
        return $this->render('add', ['madel' => $category]);
    }
    public function actionView()
    {
        $id = $_GET['id'];
        $mad = Category::findOne([$id]);
        return $this->render('view', ['madel' => $mad]);
    }
    public function actionEdit()
    {
        $id = $_GET['id'];
        $mad = Category::findOne([$id]);
        if ($mad->load(Yii::$app->request->post())) {
            if ($mad->save()) {
                Yii::$app->session->setFlash("success", "Malumot qushildi");
                $this->redirect('/category/index');
            }
        }
        return $this->render('edit', ['madel' => $mad]);
    }
}