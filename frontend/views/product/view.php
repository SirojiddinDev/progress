<a class="btn btn-success" href="/product/index" role="button">INDEX</a>
<table class="table">

<?php    /**
     * @var  $madel
     * @var  $img
     */
//print_r($madel);die();
?>
<div class="row no-gutters">
    <aside class="col-md-6">
        <article class="gallery-wrap">
            <div class="card img-big-wrap">
               <?php $path = '/uploads/' . $images->name; ?>
                <a href="#" data-fancybox="gallery"> <img alt="Panasonic ES-RT37-S520" src="<?=$path?>"></a>
            </div> <!-- img-big-wrap.// -->

        </article> <!-- gallery-wrap .end// -->
    </aside>
    <main class="col-md-6">
        <article class="product-info-aside">
            <div>

                <span class="label-rating mr-3 text-muted">Sharhlar</span>
                <a href="#" class="btn-link js-add-compare text-gray" data-id="2353"> <i class="feather icon-book-open"></i> Taqqoslash </a>
            </div>

            <hr>

            <div class="mb-3">
                <h6>Qisqahcha ma’lumot</h6>
                <ul class="list-unstyled mb-0"><li><?php $madel->name ?></li></ul>
                <div class="mb-3">
                    <?php $madel->description?><br>
                </div>
                <div class="mb-3">
                    <?php $madel->characteristic?><br>
                </div>
            </div>

            <div class="form-group" id="product_variations">

            </div>



        </article> <!-- product-info-aside .// -->
    </main> <!-- col.// -->
</div>

<?php
//die();
?>

<!--    <tr>-->
<!--        <td>ID</td>-->
<!--        <td>--><?//=$madel->id;?><!--</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>Code</td>-->
<!--        <td>--><?//=$madel->code;?><!--</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>Name</td>-->
<!--        <td>--><?//=$madel->name;?><!--</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>Description</td>-->
<!--        <td>--><?//=$madel->description;?><!--</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>Characters</td>-->
<!--        <td>--><?//=$madel->characteristic;?><!--</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>Status</td>-->
<!--        <td>--><?//=$madel->status;?><!--</td>-->
<!--    </tr>-->
<!--</table>-->
<!---->
<!--    --><?php
//    \Yii::setAlias('@photo', 'E:\OpenServer\domains\Git_yii\progress\common');
////    echo "<pre>";var_dump($img);die();
//    foreach ($img as $images) {
//
//            $path = '/uploads/' . $images->name;
////                echo $path;
//        ?>
<!--        <img  width="500" height="500" src="--><?//=$path?><!--">-->
<!--   --><?php
//    }
//    ?>

<!--<img width="500" height="500" src="/uploads/1603105592.jpg">-->