<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%suppliment_meal_slab}}`.
 */
class m211229_054847_create_suppliment_meal_slab_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%suppliment_meal_slab}}', [
            'id' => $this->primaryKey(),
            'meal_type_id' => $this->integer(11)->defaultValue(null),
            'rate_adult' => $this->money(7, 2)->defaultValue(null),
            'rate_child' => $this->money(7, 2)->defaultValue(null),
            'tariff_id' =>  $this->integer(11)->defaultValue(null),   
        ]);

        $this->addForeignKey('fk_suppliment_meal_slab_meal_type','suppliment_meal_slab','meal_type_id','suppliment_meal_type','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_suppliment_meal_slab_tariff','suppliment_meal_slab','tariff_id','suppliment_meal','id','CASCADE','CASCADE');
    }

    
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_suppliment_meal_slab_meal_type','suppliment_meal_slab');
        $this->dropForeignKey('fk_suppliment_meal_slab_tariff','suppliment_meal_slab');
        $this->dropTable('{{%suppliment_meal_slab}}');
    }
}
