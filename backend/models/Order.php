<?php

namespace app\models;

use common\models\User;
use yii\db\ActiveRecord;
use app\models\OrderDetails;

class Order extends ActiveRecord
{
    
    
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{order}}';
    }

    public function rules()
    {
        return [
            [['user_id', 'date', 'status'], 'required'],
            [['user_id', 'status'], 'integer'],
            ['date', 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'user_id' => 'User Id',
            'date' => 'Date',
            'status' => 'Status',
        ];
    }


    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }


    public function getDetails()
    {
        return OrderDetails::findAll(['order_id' => $this->id]);
    }
}