<?php

namespace luya\account\models;

use Yii;
use luya\admin\ngrest\base\NgRestModel;

/**
 * User Login.
 * 
 * File has been created with `crud/create` command. 
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $timestamp
 */
class UserLogin extends NgRestModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account_user_login';
    }

    /**
     * @inheritdoc
     */
    public static function ngRestApiEndpoint()
    {
        return 'api-account-userlogin';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'timestamp' => Yii::t('app', 'Timestamp'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'timestamp'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function genericSearchFields()
    {
        return [''];
    }

    /**
     * @inheritdoc
     */
    public function ngRestAttributeTypes()
    {
        return [
            'user_id' => 'number',
            'timestamp' => 'number',
        ];
    }

    /**
     * @inheritdoc
     */
    public function ngRestScopes()
    {
        return [
            ['list', ['user_id', 'timestamp']],
            [['create', 'update'], ['user_id', 'timestamp']],
            ['delete', false],
        ];
    }
}