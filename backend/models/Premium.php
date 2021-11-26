<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "premium".
 *
 * @property int $premium_id
 * @property string $name
 * @property string $price
 * @property string $discount
 */
class Premium extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'premium';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'discount'], 'required'],
            [['name'],'unique'],
            [['name', 'price', 'discount'], 'string', 'max' => 55],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'premium_id' => 'Premium ID',
            'name' => 'Name',
            'price' => 'Price (£)',
            'discount' => 'Discount ( % )',
        ];
    }
}
