<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_room_usp}}`.
 */
class m211117_094755_create_property_room_usp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_room_usp}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_room_usp}}');
    }
}
