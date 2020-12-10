<?php


namespace frontend\controllers;


use common\models\Category;

use common\models\Product;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use Yii;

class CategoryController extends Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {

//        $mad = Category::find()->asArray()->all();
//        return $this->render('index', ['madel' => $mad]);
        $dataProvider = new ActiveDataProvider([
            'query' => Category::find(),

        ]);
        return $this->render('index', ['dataProvider' => $dataProvider]);
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