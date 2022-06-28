<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%room_pictures}}`.
 */
class m220311_110155_create_room_pictures_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%room_pictures}}', [
            'id' => $this->primaryKey(),
            'room_id' => $this->integer(11)->defaultValue(null),
            'name' => $this->string(80)->notNull(),
            'description' => $this->string(80)->defaultValue(null),
        ]);
        $this->addForeignKey('fk_pictures_room','room_pictures','room_id','room','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_pictures_room','room_pictures');
        $this->dropTable('{{%room_pictures}}');
    }
}
