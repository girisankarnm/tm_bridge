<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
            'username' => $this->string()->notNull()->unique(),
            'phone' => $this->string(15)->notNull()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'user_type' => $this->smallInteger()->notNull()->defaultValue(1),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(9),
            'user_type' => $this->smallInteger()->notNull()->defaultValue(2),
            'first_login' => $this->boolean()->defaultValue(1),
            'password_change_on_login' => $this->boolean()->defaultValue(0),
            'parent' => $this->integer(11)->defaultValue(0),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->insert('user',[            
            'first_name' => 'Hotel',
            'last_name' => "TourMatrix",
            'phone' => '+919785978455',
            'username' => 'hotel@a.com',
            'email' => 'hotel@a.com',
            'user_type' => 1,
            'status' => 10,
            'password_hash' => Yii::$app->security->generatePasswordHash("123456789"),
            'auth_key' => Yii::$app->security->generateRandomString(),
            
        ]);

        $this->insert('user',[            
            'first_name' => 'Operator',
            'last_name' => "TourMatrix",
            'phone' => '+919785978456',
            'username' => 'op@a.com',
            'email' => 'op@a.com',
            'user_type' => 1,
            'status' => 10,
            'password_hash' => Yii::$app->security->generatePasswordHash("123456789"),
            'auth_key' => Yii::$app->security->generateRandomString(),            
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
