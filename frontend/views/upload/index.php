<?php
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($madel, 'myFile')->fileInput() ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>