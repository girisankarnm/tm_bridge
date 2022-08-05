<?php

use app\components\Migration;

/**
 * Handles the creation of table `{{%tariff_date_range}}`.
 */

class m211218_093680_create_tariff_date_range_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tariff_date_range}}', [
            'id' => $this->primaryKey(),
            'from_date' =>  $this->date()->defaultValue(null),
            'to_date' =>  $this->date()->defaultValue(null),
            'property_id' =>  $this->integer(11)->defaultValue(null),
            'parent' => $this->integer(11)->defaultValue(0),
            'status' => $this->tinyInteger()->defaultValue(0), 
            'tariff_type' => $this->tinyInteger()->defaultValue(0), 
        ]);

        $this->timestamps('{{%tariff_date_range}}');

        $this->addForeignKey('fk_date_range_property','tariff_date_range','property_id','property','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_date_range_property','tariff_date_range');
        $this->dropTable('{{%tariff_date_range}}');
    }
}
