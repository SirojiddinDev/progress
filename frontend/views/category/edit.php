<form method="post">
    <div class="form-group row">
        <label for="employeeNumber" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
            <label name="id" value="<?php echo $madel['id'] ? $madel['id'] : "" ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="employeeNumber" class="col-sm-2 col-form-label">Nomi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $madel['name'] ? $madel['name'] : "" ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="employeeNumber" class="col-sm-2 col-form-label">P-ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="parent_id" name="parent_id" value="<?php echo $madel['parent_id'] ? $madel['parent_id'] : "" ?>">
        </div>
    </div>

    <button type="submit" class="btn btn-success">SAVE</button>
    <a class="btn btn-success" href="/category" role="button">INDEX</a>
</form>
