<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "member".
 *
 * @property int $member_id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $phone
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password', 'phone'], 'required'],
            [['email'],'unique'],
            [['username', 'email', 'password', 'phone'], 'string', 'max' => 55],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'member_id' => 'Member ID',
            'username' => 'Member Name',
            'email' => 'Email',
            'password' => 'Password',
            'phone' => 'Phone',
        ];
    }
}
