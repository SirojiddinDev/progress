<?php
namespace frontend\controllers;


use common\models\Orders;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class OrdersController extends Controller
{
    public function actionIndex()
    {

       $model = new Orders();
       $request = \Yii::$app->request->get();
//        if (\Yii::$app->request->get()){
//            var_dump(\Yii::$app->request->get());
//        }
       $dataProvider = $model->search($request);
        return $this->render('index',[
            'searchModel'=>$model,
            'dataProvider'=>$dataProvider,

        ]);
    }

}