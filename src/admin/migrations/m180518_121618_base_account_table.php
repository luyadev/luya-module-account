<?php

use yii\db\Migration;

/**
 * Class m180518_121618_base_account_table
 */
class m180518_121618_base_account_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%account_user}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string(120)->unique()->notNull(),
            'password' => $this->string(140)->notNull(),
            'password_salt' => $this->string(140)->notNull(),
            'firstname' => $this->string(120),
            'lastname' => $this->string(120),
            'is_deleted' => $this->boolean()->defaultValue(false),
            'is_active' => $this->boolean()->defaultValue(false),
        ]);
        
        $this->createTable('{{%account_user_login}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'timestamp' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%account_user}}');
        $this->dropTable('{{%account_user_login}}');
    }
}
