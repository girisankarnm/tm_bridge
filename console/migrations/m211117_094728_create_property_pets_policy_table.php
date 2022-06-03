<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_pets_policy}}`.
 */
class m211117_094728_create_property_pets_policy_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_pets_policy}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)
        ]);

        $this->insert('property_pets_policy',[            
            'name' => "Pets allowed. Charges may apply.",           
        ]);

        $this->insert('property_pets_policy',[            
            'name' => "Pets are allowed. ",           
        ]);

        $this->insert('property_pets_policy',[            
            'name' => "Pets not allowed.",           
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_pets_policy}}');
    }
}
