<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
echo $form->field($madel, 'productCode');
echo $form->field($madel, 'productName');
echo $form->field($madel, 'productLine');
echo $form->field($madel, 'productScale');
echo $form->field($madel, 'productVendor');
echo $form->field($madel, 'productDescription');
echo $form->field($madel, 'quantityInStock');
echo $form->field($madel, 'buyPrice');
echo $form->field($madel, 'MSRP');

echo Html::submitButton('saqlash', ['class' => 'btn btn-success']);

ActiveForm::end();