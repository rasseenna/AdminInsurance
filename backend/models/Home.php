<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "home".
 *
 * @property int $home_id
 * @property string $username
 * @property string $policy_name
 * @property string $address
 * @property string $built_date
 * @property string $home_type
 * @property string $home_age
 * @property string $membership_type
 * @property string $premium_selected
 */
class Home extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'policy_name', 'address', 'built_date', 'home_type', 'home_age', 'membership_type', 'premium_selected'], 'required'],
            [['username'],'unique'],
            [['username', 'policy_name', 'built_date', 'home_type', 'home_age', 'membership_type', 'premium_selected'], 'string', 'max' => 55],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'home_id' => 'Home ID', 
            'username' => 'Member Name',
            'policy_name' => 'Policy Name',
            'address' => 'Address',
            'built_date' => 'Built Date',
            'home_type' => 'Home Type',
            'home_age' => 'Home Age (in Years)',
            'membership_type' => 'Membership Type',
            'premium_selected' => 'Premium Selected',
        ];
    }
}
