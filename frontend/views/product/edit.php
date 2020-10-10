<form method="post">
    <div class="form-group row">
        <label for="employeeNumber" class="col-sm-2 col-form-label">Maxsulot kodi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="productCode" name="productCode" value="<?php echo $data['productCode'] ? $data['productCode'] : "" ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="employeeNumber" class="col-sm-2 col-form-label">Mahsulot nomi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="productName" name="productName" value="<?php echo $data['productName'] ? $data['productName'] : "" ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="employeeNumber" class="col-sm-2 col-form-label">Mahsulot turi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="productLine" name="productLine" value="<?php echo $data['productLine'] ? $data['productLine'] : "" ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="employeeNumber" class="col-sm-2 col-form-label">Nisbat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="productScale" name="productScale" value="<?php echo $data['productScale'] ? $data['productScale'] : "" ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="employeeNumber" class="col-sm-2 col-form-label">Mahsulot sotuvchi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="productVendor" name="productVendor" value="<?php echo $data['productVendor'] ? $data['productVendor'] : "" ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="employeeNumber" class="col-sm-2 col-form-label">Mahsulot tavsifi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="productDescription" name="productDescription" value="<?php echo $data['productDescription'] ? $data['productDescription'] : "" ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="employeeNumber" class="col-sm-2 col-form-label">Zahiradagi miqdor</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="quantityInStock" name="quantityInStock" value="<?php echo $data['quantityInStock'] ? $data['quantityInStock'] : "" ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="employeeNumber" class="col-sm-2 col-form-label">Sotib olinish narxi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="buyPrice" name="buyPrice" value="<?php echo $data['buyPrice'] ? $data['buyPrice'] : "" ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="employeeNumber" class="col-sm-2 col-form-label">MSRP</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="MSRP" name="MSRP" value="<?php echo $data['MSRP'] ? $data['MSRP'] : "" ?>">
        </div>
    </div>

    <button type="submit" class="btn btn-success">SAVE</button>
    <a class="btn btn-success" href="/proruct" role="button">ORQAGA</a>
</form>