<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_restaurant_cuisine_option}}`.
 */
class m220128_141605_create_property_restaurant_cuisine_option_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_restaurant_cuisine_option}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->defaultValue(null),
        ]);

        $this->insert('property_restaurant_cuisine_option',[            
            'name' => "Italian",           
        ]);

        $this->insert('property_restaurant_cuisine_option',[            
            'name' => "Japanese",           
        ]);
        
        $this->insert('property_restaurant_cuisine_option',[            
            'name' => "Chinese",           
        ]);
        
        $this->insert('property_restaurant_cuisine_option',[            
            'name' => "Indian",           
        ]);

        $this->insert('property_restaurant_cuisine_option',[            
            'name' => "American",           
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_restaurant_cuisine_option}}');
    }
}
