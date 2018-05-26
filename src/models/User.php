<?php

namespace luya\account\models;

use Yii;
use luya\admin\ngrest\base\NgRestModel;

/**
 * User.
 * 
 * File has been created with `crud/create` command. 
 *
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property string $password_salt
 * @property string $firstname
 * @property string $lastname
 * @property tinyint $is_deleted
 * @property tinyint $is_active
 */
class User extends NgRestModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account_user';
    }

    /**
     * @inheritdoc
     */
    public static function ngRestApiEndpoint()
    {
        return 'api-account-user';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
            'password_salt' => Yii::t('app', 'Password Salt'),
            'firstname' => Yii::t('app', 'Firstname'),
            'lastname' => Yii::t('app', 'Lastname'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
            'is_active' => Yii::t('app', 'Is Active'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'password', 'password_salt'], 'required'],
            [['email', 'firstname', 'lastname'], 'string', 'max' => 120],
            [['password', 'password_salt'], 'string', 'max' => 140],
            [['is_deleted', 'is_active'], 'string', 'max' => 1],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function genericSearchFields()
    {
        return ['email', 'password', 'password_salt', 'firstname', 'lastname'];
    }

    /**
     * @inheritdoc
     */
    public function ngRestAttributeTypes()
    {
        return [
            'email' => 'text',
            'password' => 'text',
            'password_salt' => 'text',
            'firstname' => 'text',
            'lastname' => 'text',
            'is_deleted' => 'number',
            'is_active' => 'number',
        ];
    }

    /**
     * @inheritdoc
     */
    public function ngRestScopes()
    {
        return [
            ['list', ['email', 'password', 'password_salt', 'firstname', 'lastname', 'is_deleted', 'is_active']],
            [['create', 'update'], ['email', 'password', 'password_salt', 'firstname', 'lastname', 'is_deleted', 'is_active']],
            ['delete', false],
        ];
    }
}