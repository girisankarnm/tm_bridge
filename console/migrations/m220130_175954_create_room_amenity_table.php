<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%room_amenity}}`.
 */
class m220130_175954_create_room_amenity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%room_amenity}}', [
            'id' => $this->primaryKey(),
            'room_id' => $this->integer(11)->defaultValue(null),
            'amenity_id' => $this->integer(11)->defaultValue(null),
        ]);

        $this->addForeignKey('fk_room_amenity_room','room_amenity','room_id','room','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_room_amenity_amenity','room_amenity','amenity_id','amenity','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_room_amenity_room','room_amenity');
        $this->dropForeignKey('fk_room_amenity_amenity','room_amenity');
                
        $this->dropTable('{{%room_amenity}}');
    }
}
