<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_legal_status}}`.
 */
class m211117_094659_create_property_legal_status_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_legal_status}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)
        ]);

        $this->insert('property_legal_status',[            
            'name' => "Limited Liability Partnership",           
        ]);

        $this->insert('property_legal_status',[            
            'name' => "Parnership",           
        ]);
        $this->insert('property_legal_status',[            
            'name' => "Private Limited",           
        ]);
        $this->insert('property_legal_status',[            
            'name' => "Proprietorship",           
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_legal_status}}');
    }
}
