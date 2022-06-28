<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%enquiry_property_selection}}`.
 */
class m220420_095433_create_enquiry_property_selection_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%enquiry_property_selection}}', [
            'id' => $this->primaryKey(),
            'enquiry_id' =>  $this->integer(11)->notNull(),
            'property_id' => $this->integer(11)->notNull(),
            'hotel_policy_pax_count_adult' => $this->integer(11)->notNull(),
            'hotel_policy_pax_count_child' => $this->integer(11)->notNull(),
            'hotel_policy_pax_count_infant' => $this->integer(11)->notNull(),
            'status' => $this->tinyInteger()->notNull(),
        ]);
        $this->addForeignKey('fk_enquiry_property_selection_enquiry','enquiry_property_selection','enquiry_id','enquiry','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_enquiry_property_selection_property_id','enquiry_property_selection','property_id','property','id','CASCADE','CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_enquiry_property_selection_enquiry','enquiry_property_selection');
        $this->dropForeignKey('fk_enquiry_property_selection_property_id','enquiry_property_selection');
        $this->dropTable('{{%enquiry_property_selection}}');
    }
}
