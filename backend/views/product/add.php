<?php
/**
 * @var $model \backend\controllers\ProductController
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
//echo $form->field($madel, 'code');
$model->code = 123;
echo $form->field($model, 'name');
echo $form->field($model, 'description');
echo $form->field($model, 'characteristic');
echo $form->field($model, 'status');

echo Html::submitButton('saqlash', ['class' => 'btn btn-success']);

ActiveForm::end();