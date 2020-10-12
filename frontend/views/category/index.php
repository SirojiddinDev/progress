<a class="btn btn-success" href="/category/add" role="button">ADD</a>
<table class="table">

    <?php
  //  $n = count($madel);

//var_dump($madel);die();
    foreach ($madel as $item) {
        ?>
        <tr>
            <td><?php echo $item['name']?></td>
            <td><?php echo $item['parent_id']?></td>
            <td>
                <a class="btn btn-primary" href="/category/view?id=<?=$item['id'];?>" role="button">VIEW</a>
                <a class="btn btn-success" href="/category/edit?id=<?=$item['id'];?>" role="button">EDIT</a>
                <a class="btn btn-danger"  href="/category/delete?id=<?=$item['id'];?>" role="button">DELETE</a>
            </td>
        </tr>

    <? }
    ?>
</table>



