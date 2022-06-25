<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_restaurant_food_option_map}}`.
 */
class m220128_141338_create_property_restaurant_food_option_map_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_restaurant_food_option_map}}', [
            'id' => $this->primaryKey(),
            'restaurant_id' => $this->integer(11)->defaultValue(null),
            'food_option_id' => $this->integer(11)->defaultValue(null),
        ]);

        $this->addForeignKey('fk_property_food_option_map_restaurant','property_restaurant_food_option_map','restaurant_id','property_restaurant','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_property_food_option_map_food_option','property_restaurant_food_option_map','food_option_id','property_restaurant_food_option','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_property_food_option_map_restaurant','property_restaurant_food_option_map');
        $this->dropForeignKey('fk_property_food_option_map_food_option','property_restaurant_food_option_map');

        $this->dropTable('{{%property_restaurant_food_option_map}}');
    }
}
