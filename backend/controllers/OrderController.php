<?php
namespace backend\controllers;

use Yii;
use app\models\Order;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;



/**
 * Order controller
 */
class OrderController extends Controller
{

    // /**
    //  * {@inheritdoc}
    //  */
    // public function behaviors()
    // {
    //     return [
    //         'access' => [
    //             'class' => AccessControl::className(),
    //             'rules' => [
    //                 [
    //                     'actions' => ['login', 'error'],
    //                     'allow' => true,
    //                 ],
    //                 [
    //                     'actions' => ['logout', 'index'],
    //                     'allow' => true,
    //                     'roles' => ['@'],
    //                 ],
    //             ],
    //         ],
    //         'verbs' => [
    //             'class' => VerbFilter::className(),
    //             'actions' => [
    //                 'logout' => ['post'],
    //             ],
    //         ],
    //     ];
    // }

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

        $count = Order::find()->count();

        $model = Order::find()
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
        $model = Order::findOne($id);

        return $this->render('view', ['model' => $model]);
    }


    public function actionCreate()
    {
        $model = new Order();
        
        if ($model->load(Yii::$app->request->post())){
            
            $model->date .= ' ' . date('H:i:s');
            
            if ($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', ['model' => $model]);

    }


    public function actionUpdate($id)
    {
        $model = Order::findOne($id);
        
        if ($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', ['model' => $model]);

    }


    public function actionDelete($id)
    {
        $model = Order::findOne($id);
        if ($model->delete()){
            return $this->redirect('index');
        }
    }


}