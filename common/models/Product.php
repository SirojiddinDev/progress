<?php


namespace common\models;


use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public function rules()
    {
        return [
            [['productCode', 'productName','productLine','productScale','productVendor','productDescription','quantityInStock','buyPrice','MSRP'], 'required']
        ];
    }

    public static function tableName()
    {
        return '{{product}}';
    }
}