<?php


namespace frontend\controllers;


use common\models\Category;
use common\models\Image;
use common\models\Product;
use frontend\models\Categoryproduct;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

class ProductController extends Controller
{
    public function actionProduct_category()
    {
        return $this->render('product_category');
    }

    public function actionIndex($id = 0)
    {

        $this->layout = 'product';
        if ($id > 0) {
            $category = Categoryproduct::find()->where(['category_id' => $id])->asArray()->all();
            $i = 0;
            foreach ($category as $item) {
                $array[$i] = $item['product_id'];
                $i++;
            }
            $dataProvider = new ActiveDataProvider([
                'query' => Product::find()->where(['id' => $array]),
                'pagination' => [
                    'pageSize' => 6,
                ],

            ]);
            return $this->render('index', ['dataProvider' => $dataProvider, 'img' => $img]);
        }
//        $madel = Product::find()->asArray()->all();
//
//        $img = Image::find()->where(['main'=>1])->all();
        $dataProvider = new ActiveDataProvider([
            'query' => Product::find(),
            'pagination' => [
                'pageSize' => 6,
            ],

        ]);
        return $this->render('index', ['dataProvider' => $dataProvider, 'img' => $img]);
    }

    public function actionView()
    {
        $this->layout = 'product';
        $id = $_GET['id'];
        $madel = Product::find()->where(['id' => $id])->one();
        $img = Image::find()->where(['product_id' => $id])->one();
        return $this->render('view', ['madel' => $madel, 'img' => $img]);
    }

    public function actionEdit()
    {
        $this->layout = 'product';
        $id = $_GET['id'];
        $madel = Product::findOne($id);
        return $this->render('edit', ['data' => $madel]);
    }


    public function actionAdd()
    {
        $this->layout = 'product';
        $product = new Product();
        if ($product->load(\Yii::$app->request->post())) {
            if ($product->save()) {
                \Yii::$app->session->setFlash("success", "Malumot qushildi");
                $this->redirect('/category/index');
            }
        }
        return $this->render('add', ['madel' => $product]);
    }

    public function actionSearch()
    {
        $this->layout = 'product';
        $query = Product::find();
        if(\Yii::$app->request->post('search'))
        {
            $query->andFilterWhere(['like','name',\Yii::$app->request->post('search')]);
        }
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'searchModel' => $searchModel,
            'pagination' => [
                'pageSize' => 6,
            ],

        ]);
        return $this->render('index',['dataProvider'=>$dataProvider]);
    }

}