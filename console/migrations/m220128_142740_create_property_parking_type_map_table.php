<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_parking_type_map}}`.
 */
class m220128_142740_create_property_parking_type_map_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_parking_type_map}}', [
            'id' => $this->primaryKey(),
            'parking_id' => $this->integer(11)->defaultValue(null),
            'parking_type_id' => $this->integer(11)->defaultValue(null),
        ]);

        $this->addForeignKey('fk_property_parking_parking_type_map','property_parking_type_map','parking_id','property_parking','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_property_parking_type_map','property_parking_type_map','parking_type_id','property_parking_type','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_property_parking_parking_type_map','property_parking_type_map');
        $this->dropForeignKey('fk_property_parking_type_map','property_parking_type_map');

        $this->dropTable('{{%property_parking_type_map}}');
    }
}
