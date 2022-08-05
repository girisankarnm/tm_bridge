<?php

use app\components\Migration;

/**
 * Handles the creation of table `{{%suppliment_meal}}`.
 */
class m211229_045645_create_suppliment_meal_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%suppliment_meal}}', [
            'id' => $this->primaryKey(),            
            'property_id' =>  $this->integer(11)->defaultValue(null),
            'date_range_id' => $this->integer(11)->defaultValue(null),
        ]);

        $this->timestamps('{{%suppliment_meal}}');

        $this->addForeignKey('fk_suppliment_meal_property','suppliment_meal','property_id','property','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_suppliment_meal_date_range','suppliment_meal','date_range_id','tariff_date_range','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_suppliment_meal_property','suppliment_meal');
        $this->dropForeignKey('fk_suppliment_meal_date_range','suppliment_meal');
        $this->dropTable('{{%suppliment_meal}}');
    }
}
