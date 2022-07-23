<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%client_requested_option}}`.
 */
class m220722_095811_create_client_requested_option_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%client_requested_option}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'key' => $this->integer(),
            'value' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%client_requested_option}}');
    }
}
