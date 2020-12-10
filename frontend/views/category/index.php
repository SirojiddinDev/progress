
<?php

use yii\grid\GridView;

echo GridView::widget([
    'dataProvider' => $dataProvider,

//    'columns' => [
//        ['class' => 'yii\grid\SerialColumn'],
//        'id',
//        'name',
//        'parent_id',
//
//        ['class' => 'yii\grid\ActionColumn'],
//    ],

]);

?>