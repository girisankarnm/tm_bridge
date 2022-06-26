<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_parking_type}}`.
 */
class m220128_142632_create_property_parking_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_parking_type}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->defaultValue(null),
        ]);

        $this->insert('property_parking_type',[            
            'name' => "Free",           
        ]);

        $this->insert('property_parking_type',[            
            'name' => "Paid",           
        ]);
        
        $this->insert('property_parking_type',[            
            'name' => "Within premises",           
        ]);
        
        $this->insert('property_parking_type',[            
            'name' => "At a nearby location",           
        ]);

    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_parking_type}}');
    }
}
