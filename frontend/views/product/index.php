<?php
//$yil = 2100;
//$oy = 2;
//echo (($oy == 1) || ($oy == 3) || ($oy == 5) || ($oy == 7) || ($oy == 8) || ($oy == 10) || ($oy == 12)) ? 31 : ((($oy == 4) || ($oy == 6) || ($oy == 9) || ($oy == 11)) ? 30 : ((($yil / 4) && !($yil / 400)) ? 28 : ((($yil / 4) && ($yil / 400)) ? 29 : 28)));
//die();

use yii\widgets\ListView;

//echo "<div class='row featured__filter'>";
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_post',
    'itemOptions' => [
        'tag' => null,
//        'class'=>'col-lg-4 col-md-6 col-sm-6'
    ],

    'layout' => "{summary}\n<div class='row'>{items}</div>\n{pager}",
]);
