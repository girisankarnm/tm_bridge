<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%room_amenity_suboption}}`.
 */
class m220201_085543_create_room_amenity_suboption_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%room_amenity_suboption}}', [
            'id' => $this->primaryKey(),
            'room_amenity_id' => $this->integer(11)->defaultValue(null),
            'sub_option_id' => $this->integer(11)->defaultValue(null),
        ]);

        $this->addForeignKey('fk_amenity_sub_option_sub_option','room_amenity_suboption','sub_option_id','amenity_sub_option','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_amenity_sub_option_amenity','room_amenity_suboption','room_amenity_id','room_amenity','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_room_amenity_sub_option','room_amenity_suboption');
        $this->dropForeignKey('fk_amenity_sub_option_amenity','room_amenity_suboption');
        $this->dropTable('{{%room_amenity_suboption}}');
    }
}
