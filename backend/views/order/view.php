<?php

use yii\helpers\Html;

$this->title = 'Order  №' .$model->id;
?>

<a href="/admin/order/update?id=<?= $model['id'] ?>" class="btn btn-primary">Update</a>

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
            <? if($label == 'user_id'){ ?>
            <td><?= $model->user->username; ?></td>
            <? } else { ?>
            <td><?= $item ?></td>
            <?}?>
        </tr>
        <? } ?>
    </tbody>
</table>


<?php if($model->details) { ?>
    
    <div class="col-lg-6 col-lg-offset-3">
        <h2>Order Details</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Product Id</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <? foreach($model->details as $details) { ?>
                        <tr>
                            <td><?=$details['product_id'] ?></td>
                            <td><?=$details['quantity'] ?></td>
                        </tr>
                <? } ?>
            </tbody>
        </table>
    </div>

<? } ?>

<div class="col-lg-6 col-lg-offset-3">
    <?= Html::a('Add New Order', ['order-details/create', 'id' => $model->id], [
    'class' => 'btn btn-success'
    ]); ?>
</div>