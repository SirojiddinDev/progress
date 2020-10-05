<?php

use yii\helpers\Html;
?>

<a href="/admin/order-details/update?id=<?= $model['id'] ?>" class="btn btn-primary">Update</a>

<?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
<br><br>
<table class="table table-bordered table-striped">
    <tbody>
        <? foreach($model as $label => $item) { ?>
        <tr>
            <td><b><?= $label ?></b></td>
            <td><?= $item ?></td>
        </tr>
        <? } ?>
    </tbody>
</table>
