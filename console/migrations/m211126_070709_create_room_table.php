<?php

use app\components\Migration;

/**
 * Handles the creation of table `{{%room}}`.
 */
class m211126_070709_create_room_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%room}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->defaultValue(null), 
            'type_id' =>  $this->integer(11)->defaultValue(null),
            'view_id' => $this->integer(11)->defaultValue(null),
            'meal_plan_id' => $this->integer(11)->defaultValue(null),
            'count' => $this->smallInteger(2)->defaultValue(null), 
            'size' => $this->smallInteger(2)->defaultValue(null), 
            'child_policy_same_as_property' => $this->boolean()->defaultValue(1), 
            'restricted_for_child' => $this->boolean()->defaultValue(0), 
            'restricted_for_child_below_age' => $this->smallInteger(2)->defaultValue(null),
            'same_tariff_for_single_occupancy' => $this->boolean()->defaultValue(1), 
            'number_of_adults' => $this->smallInteger(2)->defaultValue(null),
            'number_of_kids_on_sharing' => $this->smallInteger(2)->defaultValue(null),
            'number_of_extra_beds' => $this->smallInteger(2)->defaultValue(null),
            'extra_bed_type_id' => $this->integer(11)->defaultValue(null),            
            'is_base' => $this->string(80)->defaultValue(null), 
            'property_id' => $this->integer(11)->defaultValue(null),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'owner_id' => $this->integer(11)->defaultValue(null)
        ]);

        $this->timestamps('{{%room}}');

        $this->addForeignKey('fk_room_type','room','type_id','room_type','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_room_view','room','view_id','property_room_view','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_meal_plan','room','meal_plan_id','property_meal_plan','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_extra_bed_type','room','extra_bed_type_id','property_room_extra_bed_type','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_room_property','room','property_id','property','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_room_user','room','owner_id','user','id','CASCADE','CASCADE');
     
        $this->insert('room',[            
            'name' => 'Standard Room',
            'type_id' => 1,
            'view_id' => 1,
            'meal_plan_id' => 1,
            'count' => 10,
            'size' => 1020,
            'child_policy_same_as_property' => 1,
            'restricted_for_child' => 0,
            'restricted_for_child_below_age' => 10,
            'number_of_adults' => 2,
            'number_of_kids_on_sharing' => 1,
            'number_of_extra_beds' => 1,
            'extra_bed_type_id' => 1,
            'property_id' => 1,

        ]);

        $this->insert('room',[            
            'name' => 'Luxury suit',
            'type_id' => 1,
            'view_id' => 1,
            'meal_plan_id' => 1,
            'count' => 10,
            'size' => 1020,
            'child_policy_same_as_property' => 1,
            'restricted_for_child' => 0,
            'restricted_for_child_below_age' => 10,
            'number_of_adults' => 2,
            'number_of_kids_on_sharing' => 1,
            'number_of_extra_beds' => 1,
            'extra_bed_type_id' => 1,
            'property_id' => 1,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_room_type','room');
        $this->dropForeignKey('fk_room_view','room');
        $this->dropForeignKey('fk_meal_plan','room');
        $this->dropForeignKey('fk_extra_bed_type','room');
        $this->dropForeignKey('fk_room_property','room');
        $this->dropForeignKey('fk_room_user','room');
        
        $this->dropTable('{{%room}}');
    }
}
