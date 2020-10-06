<?php 

use yii\helpers\Html;

$this->title = 'Create New Order Details';

?>


<div class="order-create">

    <?= $this->render('_form', [
        'model' => $model,
        'id' => $order_id,
    ]) ?>

</div>