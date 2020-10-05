<?php

use yii\helpers\Html;

$this->title = 'Orders';

?>

<a href="/admin/order/create" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add Order</a>
<br>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>User Name</th>
            <th>Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <? foreach ($model as $order) { ?>
        <tr>
            <? foreach($order as $key => $items) { ?>
            <? if ($key == 'user_id') { ?>
            <td><?= $order->user->username ?></td>
            <?}else{?>
            <td><?= $items ?></td>
            <?}?>

            <? } ?>
            <td>
                <a href="/admin/order/view?id=<?= $order['id'] ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="/admin/order/update?id=<?= $order['id'] ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                <?= Html::a('<span class="glyphicon glyphicon-trash">', ['delete', 'id' => $model->id], [
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </td>
        </tr>
        <? } ?>
    </tbody>
</table>

<?
    if (count($model) > 10) {
?>

<nav aria-label="Page navigation">
    <ul class="pagination">
        <li class="<?= ($page == 1) ? 'disabled' : ''; ?>">
            <? if ($page != 1){ ?>
            <a href="?page=<?= $page - 1 ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
            <? } else { ?>
            <span aria-hidden="true">&laquo;</span>
            <? } ?>
        </li>
        <? for($i = 1; $i <= (ceil($count / 10)); $i++) { ?>
        <li class="<?= ($i == $page) ? 'active' : ''; ?>"><a href="?page=<?= $i ?>"><?= ($i) ?></a></li>
        <? } ?>
        <li class="<?= ($page >= ceil($count / 10)) ? 'disabled' : ''; ?>">
            <? if ($page < ceil($count / 10)) { ?>
            <a href="?page=<?= $page + 1 ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
            <? } else { ?>
            <span aria-hidden="true">&raquo;</span>
            <? } ?>
        </li>
    </ul>
</nav>

<? } ?>