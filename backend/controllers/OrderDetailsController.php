<?php
namespace backend\controllers;

use Yii;
use app\models\Order;
use app\models\OrderDetails;
use yii\web\Controller;



/**
 * Order controller
 */
class OrderDetailsController extends Controller
{


    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($page = 1)
    {
        $page = abs($page);
        $limit = 10;
        $offset = ($page - 1) * 10;

        $count = OrderDetails::find()->count();

        $model = OrderDetails::find()
            ->limit($limit)
            ->offset($offset)
            ->all();
        return $this->render('index', [
                'model' => $model,
                'page' => $page,
                'count' => $count
            ]);
    }


    public function actionView($id)
    {
        $model = OrderDetails::findOne($id);

        return $this->render('view', ['model' => $model]);
    }


    public function actionCreate()
    {
        $model = new OrderDetails();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()){
                        
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', ['model' => $model]);

    }


    public function actionUpdate($id)
    {
        $model = OrderDetails::findOne($id);
        
        if ($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', ['model' => $model]);

    }


    public function actionDelete($id)
    {
        $model = OrderDetails::findOne($id);
        if ($model->delete()){
            return $this->redirect('index');
        }
    }


}