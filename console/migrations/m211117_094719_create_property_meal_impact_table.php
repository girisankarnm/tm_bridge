<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_meal_impact}}`.
 */
class m211117_094719_create_property_meal_impact_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_meal_impact}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)
        ]);

        $this->insert('property_meal_impact',[
            'id' => 1,
            'name' => "No Impact",           
        ]);

        $this->insert('property_meal_impact',[
            'id' => 2,
            'name' => "Breakfast",           
        ]);

        $this->insert('property_meal_impact',[
            'id' => 3,
            'name' => "Lunch",           
        ]);

        $this->insert('property_meal_impact',[
            'id' => 4,
            'name' => "Dinner",           
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_meal_impact}}');
    }
}
