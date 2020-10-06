<?php 

use yii\helpers\Html;

$this->title = 'Update Order Details №' . $model->id;

?>


<div class="order-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>