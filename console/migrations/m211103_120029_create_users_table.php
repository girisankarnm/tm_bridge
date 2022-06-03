<?php

use app\components\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m211103_120029_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       /* $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->text()->notNull(),
            'last_name' => $this->text()->notNull(),
            'email' => $this->string(30)->notNull(),
            'phone' => $this->integer(15)->notNull(),
            'username' => $this->text()->notNull(),
            'password' => $this->string(30)->notNull(),
            'rememberMe' => $this->boolean(),
            'otp' => $this->integer(20),
        ]);

        $this->timestamps('users');*/
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       // $this->dropTable('{{%users}}');
    }
}
