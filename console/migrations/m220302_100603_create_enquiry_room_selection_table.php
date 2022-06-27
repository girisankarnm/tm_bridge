<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%enquiry_room_selection}}`.
 */
class m220302_100603_create_enquiry_room_selection_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%enquiry_room_selection}}', [
            'id' => $this->primaryKey(),
            'enquiry_id' =>  $this->integer(11)->notNull(),
            'property_id' => $this->integer(11)->notNull(),
            'room_id' => $this->integer(11)->notNull(),
            'enquiry_accommodation_id' => $this->integer(11)->notNull(),
            'day' =>  $this->date()->defaultValue(null),
            'status' => $this->boolean()->defaultValue(1),
            'rooming_mode' => $this->integer()->defaultValue(1),
            'hotel_policy_pax_count_adult' => $this->integer(11)->notNull(),
            'hotel_policy_pax_count_child' => $this->integer(11)->notNull(),
            'hotel_policy_pax_count_infant' => $this->integer(11)->notNull(),
            'slab_id' => $this->integer(11)->notNull(),
            'room' => $this->integer(11)->notNull(),
            'eba' => $this->integer(11)->notNull(),
            'cwb' => $this->integer(11)->notNull(),
            'cnb' => $this->integer(11)->notNull(),
            'sgl' => $this->integer(11)->notNull(),
        ]);
        $this->addForeignKey('fk_enquiry_room_selection_enquiry','enquiry_room_selection','enquiry_id','enquiry','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_enquiry_room_selection_room','enquiry_room_selection','room_id','room','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_enquiry_accommodation_id','enquiry_room_selection','enquiry_accommodation_id','enquiry_accommodation','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_slab_id','enquiry_room_selection','slab_id','room_tariff_slab','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_property_id','enquiry_room_selection','property_id','property','id','CASCADE','CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_enquiry_room_selection_enquiry','enquiry_room_selection');
        $this->dropForeignKey('fk_enquiry_room_selection_room','enquiry_room_selection');
        $this->dropForeignKey('fk_enquiry_accommodation_id','enquiry_room_selection');
        $this->dropForeignKey('fk_slab_id','enquiry_room_selection');
        $this->dropForeignKey('fk_property_id','enquiry_room_selection');
        $this->dropTable('{{%enquiry_room_selection}}');
    }
}
