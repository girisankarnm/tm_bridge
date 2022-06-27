<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_favourite}}`.
 */
class m220401_091630_create_property_favourite_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_favourite}}', [
            'id' => $this->primaryKey(),
            'property_id' => $this->integer(11)->defaultValue(null),
            'operator_id' => $this->integer(11)->defaultValue(null),
        ]);
        $this->addForeignKey('fk_property_favourite_prop_id','property_favourite','property_id','property','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_property_favourite_operator_id','property_favourite','operator_id','user','id','CASCADE','CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_property_favourite_prop_id','property_favourite');
        $this->dropForeignKey('fk_property_favourite_operator_id','property_favourite');
        $this->dropTable('{{%property_favourite}}');
    }
}
