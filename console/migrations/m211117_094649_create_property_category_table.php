<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_category}}`.
 */
class m211117_094649_create_property_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)
        ]);

        $this->insert('property_category',[            
            'name' => "2 Star",           
        ]);
        $this->insert('property_category',[            
            'name' => "3 Star",           
        ]);
        $this->insert('property_category',[            
            'name' => "4 Star",           
        ]);
        $this->insert('property_category',[            
            'name' => "5 Star",           
        ]);
        $this->insert('property_category',[            
            'name' => "Deluxe Houseboat",           
        ]);
        $this->insert('property_category',[            
            'name' => "Luxury Houseboat",           
        ]);
        $this->insert('property_category',[            
            'name' => "Premium Houseboat",           
        ]);
        $this->insert('property_category',[            
            'name' => "Not Applicable",           
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_category}}');
    }
}
