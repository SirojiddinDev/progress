<?php
use yii\widgets\ActiveForm;
//echo "<pre>";
//var_dump($model);die();
?>

<?php $form = ActiveForm::begin(['id' => 'tasdiq-form']) ?>

<?= $form->field($model, 'password_reset_token')->textInput()->label($email) ?>

    <button>Tasdiqlash</button>
    <a  href="/site/kod?email=<?= $email?>"><h2>Ko`dni olish uchun bu yerga bosing</h2></a>
<?php ActiveForm::end() ?>