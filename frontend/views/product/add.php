<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
//echo $form->field($madel, 'code');
echo $form->field($madel, 'name');
echo $form->field($madel, 'description');
echo $form->field($madel, 'characteristic');
echo $form->field($madel, 'status');

echo Html::submitButton('saqlash', ['class' => 'btn btn-success']);

ActiveForm::end();