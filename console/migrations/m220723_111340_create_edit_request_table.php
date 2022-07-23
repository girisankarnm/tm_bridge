<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%edit_request}}`.
 */
class m220723_111340_create_edit_request_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%edit_request}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'optional' => $this->integer(),
            'key' => $this->integer(),
            'value' => $this->string(),
            'description' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%edit_request}}');
    }
}
