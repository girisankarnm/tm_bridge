<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_restaurant_cuisine_option_map}}`.
 */
class m220128_141718_create_property_restaurant_cuisine_option_map_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_restaurant_cuisine_option_map}}', [
            'id' => $this->primaryKey(),
            'restaurant_id' => $this->integer(11)->defaultValue(null),
            'cuisine_option_id' => $this->integer(11)->defaultValue(null),
        ]);

        $this->addForeignKey('fk_property_cuisine_option_map_restaurant','property_restaurant_cuisine_option_map','restaurant_id','property_restaurant','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_property_cuisine_option_map_cuisine_option','property_restaurant_cuisine_option_map','cuisine_option_id','property_restaurant_cuisine_option','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_property_cuisine_option_map_restaurant','property_restaurant_cuisine_option_map');
        $this->dropForeignKey('fk_property_cuisine_option_map_cuisine_option','property_restaurant_cuisine_option_map');

        $this->dropTable('{{%property_restaurant_cuisine_option_map}}');
    }
}
