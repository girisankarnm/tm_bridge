<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_swimming_pool_type_map}}`.
 */
class m220128_061552_create_property_swimming_pool_type_map_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_swimming_pool_type_map}}', [
            'id' => $this->primaryKey(),
            'pool_id' => $this->integer(11)->defaultValue(null),
            'pool_type_id' => $this->integer(11)->defaultValue(null),
        ]);

        $this->addForeignKey('fk_property_pool_map','property_swimming_pool_type_map','pool_id','property_swimming_pool','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_property_pool_type_pool_map','property_swimming_pool_type_map','pool_type_id','property_swimming_pool_type','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_property_pool_map','property_swimming_pool_type_map');
        $this->dropForeignKey('fk_property_pool_type_pool_map','property_swimming_pool_type_map');

        $this->dropTable('{{%property_swimming_pool_type_map}}');
    }
}
