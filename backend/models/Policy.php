<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "policy".
 *
 * @property int $policy_id
 * @property string $policy_type
 * @property string $policy_name
 */
class Policy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'policy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['policy_type', 'policy_name'], 'required'],
            [['policy_name'],'unique'],
            [['policy_type', 'policy_name'], 'string', 'max' => 55],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'policy_id' => 'Policy ID',
            'policy_type' => 'Policy Type',
            'policy_name' => 'Policy Name',
        ];
    }
}
