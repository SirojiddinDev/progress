<?php

namespace app\models;

use yii\db\ActiveRecord;

class OrderDetails extends ActiveRecord
{
    
    
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{order_details}}';
    }

    public function rules()
    {
        return [
            [['order_id', 'product_id', 'quantity'], 'required'],
            [['order_id', 'product_id'], 'integer'],
            ['quantity', 'integer', 'min' => 0, 'max' => 999]
        ];
    }

    public function attributeLabels()
    {
        return [
            'order_id' => 'Order Id',
            'product_id' => 'Product Id',
            'quantity' => 'Quantity',
        ];
    }


    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }
}