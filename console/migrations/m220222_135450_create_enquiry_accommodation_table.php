<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%enquiry_accommodation}}`.
 */
class m220222_135450_create_enquiry_accommodation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%enquiry_accommodation}}', [
            'id' => $this->primaryKey(),
            'day' =>  $this->date()->defaultValue(null),
            'status' => $this->boolean()->defaultValue(1),
            'destination_id' => $this->integer(11)->notNull(),
            'meal_plan_id' => $this->integer(11)->notNull(),
            'guest_count_plan_id' => $this->integer(11)->notNull(),
            'enquiry_id' =>  $this->integer(11)->defaultValue(null),
        ]);
        
        $this->addForeignKey('fk_accommodation_destination','enquiry_accommodation','destination_id','destination','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_accommodation_meal_plan','enquiry_accommodation','meal_plan_id','property_meal_plan','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_accommodation_guest_count_plan','enquiry_accommodation','guest_count_plan_id','enquiry_guest_count','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_accommodation_enquiry','enquiry_accommodation','enquiry_id','enquiry','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_accommodation_destination','enquiry_accommodation');
        $this->dropForeignKey('fk_accommodation_meal_plan','enquiry_accommodation');
        $this->dropForeignKey('fk_accommodation_guest_count_plan','enquiry_accommodation');
        $this->dropForeignKey('fk_accommodation_enquiry','enquiry_accommodation');
        $this->dropTable('{{%enquiry_accommodation}}');
    }
}
