<?php


namespace common\models;
/**
 * Category model
 *
 * @property String $name
 * @property integer $parent_id
 * @property integer $id
 */

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{

    public function rules()
    {
        return [
            [['name', 'parent_id'], 'string']
        ];
    }

    public static function tableName()
    {
        return '{{category}}';
    }
}