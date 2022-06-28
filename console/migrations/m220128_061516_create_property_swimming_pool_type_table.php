<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_swimming_pool_type}}`.
 */
class m220128_061516_create_property_swimming_pool_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_swimming_pool_type}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->defaultValue(null),
        ]);

        $this->insert('property_swimming_pool_type',[            
            'name' => "Indoor",           
        ]);

        $this->insert('property_swimming_pool_type',[            
            'name' => "Outdoor",           
        ]);

        $this->insert('property_swimming_pool_type',[            
            'name' => "Rooftop",           
        ]);

        $this->insert('property_swimming_pool_type',[            
            'name' => "Infinity",           
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_swimming_pool_type}}');
    }
}
