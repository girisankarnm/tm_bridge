<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_type}}`.
 */
class m211117_094639_create_property_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_type}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)
        ]);

        $this->insert('property_type',[            
            'name' => "Airport Hotel",           
        ]);
        $this->insert('property_type',[            
            'name' => "Apartments",           
        ]);
        $this->insert('property_type',[            
            'name' => "HomeStays",           
        ]);
        $this->insert('property_type',[            
            'name' => "Hotel",           
        ]);
        $this->insert('property_type',[            
            'name' => "Houseboat",           
        ]);
        $this->insert('property_type',[            
            'name' => "Resort",           
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_type}}');
    }
}
