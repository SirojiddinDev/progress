<?php
use yii\grid\GridView;

/**
 * @var \frontend\controllers\OrdersController $dataProvider
 * @var \frontend\controllers\OrdersController $searchModel
 */

//echo $this->render('_search', ['model' => $searchModel]);

//var_dump($searchModel);die();
echo $this->render('_search', ['model' => $searchModel]);
echo GridView::widget([
    'dataProvider' => $dataProvider,
//    'filterModel' => $searchModel,
    'columns' => [
        'orderNumber',
        'orderDate',
        'status',
        ]
]);