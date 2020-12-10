<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \common\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-search">
    <?php
        $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'fromDate') ?>

    <?= $form->field($model, 'toDate') ?>
    <div class="form-group">
        <?= Html::submitButton('ok', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'reset']) ?>
<!--        --><?//= Html::resetButton('Tozala', ['class' => 'reset']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>