<?php


namespace common\models;


use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;

class Orders extends ActiveRecord
{
    public $fromDate;
    public $toDate;

    /**
     * @var mixed|null
     */

    public static function tableName()
    {
        return '{{orders}}';
    }

    public function rules()
    {
        return [
            [['orderDate', 'orderNumber', 'fromDate', 'toDate'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = Orders::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 25,
            ],

        ]);
        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
//        $query->andFilterWhere(['orderDate'=>$this->orderDate]);
//        $query->andFilterWhere(['like','orderDate',$this->orderDate]);
        $query->andFilterWhere(['>=', 'orderDate', $this->fromDate])
            ->andFilterWhere(['<=', 'orderDate', $this->toDate]);
        return $dataProvider;
    }
}