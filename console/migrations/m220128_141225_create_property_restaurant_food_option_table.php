<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_restaurant_food_option}}`.
 */
class m220128_141225_create_property_restaurant_food_option_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_restaurant_food_option}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->defaultValue(null),
        ]);

        $this->insert('property_restaurant_food_option',[            
            'name' => "Vegan",           
        ]);

        $this->insert('property_restaurant_food_option',[            
            'name' => "Vegetarian",           
        ]);

        $this->insert('property_restaurant_food_option',[            
            'name' => "Non Vegetarian",           
        ]);

        $this->insert('property_restaurant_food_option',[            
            'name' => "Pescatarian",           
        ]);

        $this->insert('property_restaurant_food_option',[            
            'name' => "Ovo vegetarian",           
        ]);        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_restaurant_food_option}}');
    }
}
