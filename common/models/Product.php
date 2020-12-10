<?php


namespace common\models;


use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public function rules()
    {
        return [
            [['code', 'name','Description','characteristic','status'], 'required']
        ];
    }

    public static function tableName()
    {
        return '{{product}}';
    }
}