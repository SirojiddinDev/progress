<a class="btn btn-success" href="/category/add" role="button">ADD</a>
<table class="table">

    <?php
    //  $n = count($madel);

    //var_dump($madel);die();
    foreach ($madel as $item) {
        ?>
        <tr>
            <td><?php echo $item['productCode']?></td>
            <td><?php echo $item['productName']?></td>
            <td><?php echo $item['productLine']?></td>
            <td>
                <a class="btn btn-primary" href="/product/view?id=<?=$item['id'];?>" role="button">VIEW</a>
                <a class="btn btn-success" href="/product/edit?id=<?=$item['id'];?>" role="button">EDIT</a>
                <a class="btn btn-danger"  href="/product/delete?id=<?=$item['id'];?>" role="button">DELETE</a>
            </td>
        </tr>

    <? }
    ?>
</table>