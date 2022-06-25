<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_parking}}`.
 */
class m220128_142454_create_property_parking_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_parking}}', [
            'id' => $this->primaryKey(),
            'property_id' => $this->integer(11)->defaultValue(null),
        ]);

        $this->addForeignKey('fk_property_parking_property','property_parking','property_id','property','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_property_parking_property','property_parking');
        $this->dropTable('{{%property_parking}}');
    }
}
