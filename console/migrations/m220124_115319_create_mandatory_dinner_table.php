<?php

use app\components\Migration;

/**
 * Handles the creation of table `{{%mandatory_dinner}}`.
 */
class m220124_115319_create_mandatory_dinner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mandatory_dinner}}', [
            'id' => $this->primaryKey(),
            'date' =>  $this->date()->defaultValue(null),
            'name' => $this->string(80)->defaultValue(null),
            'rate_adult' => $this->money(7, 2)->defaultValue(null),
            'rate_child' => $this->money(7, 2)->defaultValue(null),
            'meal_impact_id' =>  $this->integer(11)->defaultValue(null),
            'property_id' =>  $this->integer(11)->defaultValue(null),
            'date_range_id' => $this->integer(11)->defaultValue(null),
        ]);

        $this->timestamps('{{%mandatory_dinner}}');

        $this->addForeignKey('fk_mandatory_dinner_property','mandatory_dinner','property_id','property','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_mandatory_dinner_meal_impact','mandatory_dinner','meal_impact_id','property_meal_impact','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_mandatory_dinner_date_range','mandatory_dinner','date_range_id','tariff_date_range','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_mandatory_dinner_property','mandatory_dinner');
        $this->dropForeignKey('fk_mandatory_dinner_meal_impact','mandatory_dinner');
        $this->dropForeignKey('fk_mandatory_dinner_date_range','mandatory_dinner');
        $this->dropTable('{{%mandatory_dinner}}');
    }
}
