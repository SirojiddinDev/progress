<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "card".
 *
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property int $size
 * @property string|null $card_date
 */
class Card extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'card';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'product_id', 'size'], 'required'],
            [['user_id', 'product_id', 'size'], 'integer'],
            [['card_date'], 'safe'],
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
            'product_id' => 'Product ID',
            'size' => 'Size',
            'card_date' => 'Card Date',
        ];
    }
}
