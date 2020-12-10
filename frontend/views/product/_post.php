<?php
use common\models\Image;
$id = $model->id;
$img = Image::find()->where(['product_id'=>$id])->one(); ?>
<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="product__item">
        <div class="product__item__pic set-bg" data-setbg="/uploads/<?=$img->name; ?>">
            <ul class="product__item__pic__hover">
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
        </div>
        <div class="product__item__text">
<!--            <h6><a href="/ogani/shop-details?id=--><?//= $model->id ?><!--">--><?//= $model->name ?><!--</a></h6>-->
            <h5>20 000 so`m</h5>
            <p><?=$model->name?></p>
            <p><?=$model->description?></p>
            <p><a href="/product/view?id=<?php echo $model->id?>">Batafsil</a></p>
        </div>
    </div>
</div>