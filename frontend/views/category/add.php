<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
echo $form->field($madel, 'name');
echo $form->field($madel, 'parent_id');

echo Html::submitButton('saqlash', ['class' => 'btn btn-success']);

ActiveForm::end();