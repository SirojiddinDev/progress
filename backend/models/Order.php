<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $user_id
 * @property string $date
 * @property int $status
 * @property int|null $del_adress_id
 *
 * @property DelAdress $delAdress
 * @property User $user
 * @property OrderDetails[] $orderDetails
 * @property Payment[] $payments
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'date', 'status'], 'required'],
            [['user_id', 'status', 'del_adress_id'], 'integer'],
            [['date'], 'safe'],
            [['del_adress_id'], 'exist', 'skipOnError' => true, 'targetClass' => DelAdress::className(), 'targetAttribute' => ['del_adress_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'date' => 'Date',
            'status' => 'Status',
            'del_adress_id' => 'Del Adress ID',
        ];
    }

    /**
     * Gets query for [[DelAdress]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDelAdress()
    {
        return $this->hasOne(DelAdress::className(), ['id' => 'del_adress_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[OrderDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetails::className(), ['order_id' => 'id']);
    }

    /**
     * Gets query for [[Payments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payment::className(), ['order_id' => 'id']);
    }
}
