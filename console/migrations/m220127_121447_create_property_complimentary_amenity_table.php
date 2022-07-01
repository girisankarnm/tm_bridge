<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_complimentary_amenity}}`.
 */
class m220127_121447_create_property_complimentary_amenity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_complimentary_amenity}}', [
            'id' => $this->primaryKey(),
            'property_id' => $this->integer(11)->defaultValue(null),
            'name' => $this->string(80)->defaultValue(null),
        ]);

        $this->addForeignKey('fk_complimentary_amenity_property','property_complimentary_amenity','property_id','property','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_complimentary_amenity_property','property_complimentary_amenity');

        $this->dropTable('{{%property_complimentary_amenity}}');
    }
}
