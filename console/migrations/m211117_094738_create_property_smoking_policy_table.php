<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_smoking_policy}}`.
 */
class m211117_094738_create_property_smoking_policy_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_smoking_policy}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)
        ]);

        $this->insert('property_smoking_policy',[            
            'name' => "Allowed only in designated area",           
        ]);

        $this->insert('property_smoking_policy',[            
            'name' => "Smoking Rooms Available",           
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_smoking_policy}}');
    }
}
