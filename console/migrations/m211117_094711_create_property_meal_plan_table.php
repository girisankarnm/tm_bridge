<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_meal_plan}}`.
 */
class m211117_094711_create_property_meal_plan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_meal_plan}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->notNull(),
            'index' => $this->smallInteger()->notNull()->defaultValue(1),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)
        ]);

        $this->insert('property_meal_plan',[
            'id' => 1,
            'name' => "EP (Room Only)",
            'index' => 1,
        ]);

        $this->insert('property_meal_plan',[
            'id' => 2,
            'name' => "CP (B)",
            'index' => 2,
        ]);

        $this->insert('property_meal_plan',[
            'id' => 3,
            'name' => "MAP (B + D)",
            'index' => 3,
        ]);

        $this->insert('property_meal_plan',[
            'id' => 4,
            'name' => "AP (B + L + D)",
            'index' => 4,
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_meal_plan}}');
    }
}
