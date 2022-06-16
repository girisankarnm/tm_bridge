<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%suppliment_meal_type}}`.
 */
class m211229_054840_create_suppliment_meal_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%suppliment_meal_type}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->defaultValue(null),
        ]);

        $this->insert('suppliment_meal_type',[ 'id' => 1, 'name' => "Breakfast"]);
        $this->insert('suppliment_meal_type',[ 'id' => 2, 'name' => "Lunch"]);
        $this->insert('suppliment_meal_type',[ 'id' => 3, 'name' => "Dinner"]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%suppliment_meal_type}}');
    }
}
