<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "motor".
 *
 * @property int $motor_id
 * @property string $username
 * @property string $motor_type
 * @property string $policy_name
 * @property string $manufacturer
 * @property string $model
 * @property string $colour
 * @property string $registration_year
 * @property string $registration_number
 * @property string $premium_selected
 */
class Motor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'motor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username','policy_name', 'manufacturer', 'model', 'colour', 'registration_year', 'registration_number', 'premium_selected'], 'required'],
            [['username'],'unique'],            
            [['username', 'policy_name', 'manufacturer', 'model', 'colour', 'registration_year', 'registration_number', 'premium_selected'], 'string', 'max' => 55],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'motor_id' => 'Motor ID',
            'username' => 'Memeber Name',
            'policy_name' => 'Policy Name',
            'manufacturer' => 'Manufacturer',
            'model' => 'Model',
            'colour' => 'Colour',
            'registration_year' => 'Registration Year',
            'registration_number' => 'Registration Number',
            'premium_selected' => 'Premium Selected',
        ];
    }
}
