<?php 

use yii\helpers\Html;

$this->title = 'Update Order №' . $model->id;
?>


<div class="order-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>