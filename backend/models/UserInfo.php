<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user_info".
 *
 * @property int $id
 * @property int $user_id
 * @property string $l_name
 * @property string $f_name
 * @property string $birth_day
 * @property string $phone
 * @property string $adress
 * @property string $gender
 * @property string $city
 * @property string $passport
 *
 * @property User $user
 */
class UserInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'l_name', 'f_name', 'birth_day', 'phone', 'adress', 'gender', 'city', 'passport'], 'required'],
            [['user_id'], 'integer'],
            [['birth_day'], 'safe'],
            [['l_name', 'f_name', 'phone', 'adress', 'gender', 'city', 'passport'], 'string', 'max' => 255],
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
            'l_name' => 'L Name',
            'f_name' => 'F Name',
            'birth_day' => 'Birth Day',
            'phone' => 'Phone',
            'adress' => 'Adress',
            'gender' => 'Gender',
            'city' => 'City',
            'passport' => 'Passport',
        ];
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
}
