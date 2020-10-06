<?php 

use yii\helpers\Html;

$this->title = 'Create New Order';

?>


<div class="order-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>