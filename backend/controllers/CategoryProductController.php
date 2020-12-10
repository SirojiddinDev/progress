<?php

namespace backend\controllers;

use backend\models\Category;
use backend\models\Product;
use Yii;
use backend\models\CategoryProduct;
use backend\models\CategoryProductSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoryProductController implements the CRUD actions for CategoryProduct model.
 */
class CategoryproductController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all CategoryProduct models.
     * @return mixed
     */
    public function actionIndex()
    {

        $searchModel = new CategoryProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,

        ]);
    }

    /**
     * Displays a single CategoryProduct model.
     * @param integer $category_id
     * @param integer $product_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($category_id, $product_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($category_id, $product_id),
        ]);
    }

    /**
     * Creates a new CategoryProduct model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $category = Category::find()->asArray()->all();
        $category_array = ArrayHelper::map($category, 'id', 'name');
        $product = Product::find()->asArray()->all();
        $product_array =ArrayHelper::map($product,'id', 'name');

        $model = new CategoryProduct();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'category_id' => $model->category_id, 'product_id' => $model->product_id]);
        }

        return $this->render('create', [
            'model' => $model,
            'category'=>$category_array,
            'product'=>$product_array,
        ]);
    }

    /**
     * Updates an existing CategoryProduct model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $category_id
     * @param integer $product_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($category_id, $product_id)
    {
        $model = $this->findModel($category_id, $product_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'category_id' => $model->category_id, 'product_id' => $model->product_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CategoryProduct model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $category_id
     * @param integer $product_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($category_id, $product_id)
    {
        $this->findModel($category_id, $product_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CategoryProduct model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $category_id
     * @param integer $product_id
     * @return CategoryProduct the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($category_id, $product_id)
    {
        if (($model = CategoryProduct::findOne(['category_id' => $category_id, 'product_id' => $product_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
