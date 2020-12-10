<?php
use yii\widgets\ActiveForm;
/**
 * @var $madel UploadController
 */
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<?= $form->field($madel, 'myFile[]')->fileInput(['multiple' => true]) ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>