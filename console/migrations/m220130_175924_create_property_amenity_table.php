<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_amenity}}`.
 */
class m220130_175924_create_property_amenity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_amenity}}', [
            'id' => $this->primaryKey(),
            'property_id' => $this->integer(11)->defaultValue(null),
            'amenity_id' => $this->integer(11)->defaultValue(null),            
        ]);

        $this->addForeignKey('fk_property_amenity_property','property_amenity','property_id','property','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_property_amenity_amenity','property_amenity','amenity_id','amenity','id','CASCADE','CASCADE');        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_property_amenity_property','property_amenity');
        $this->dropForeignKey('fk_property_amenity_amenity','property_amenity');

        $this->dropTable('{{%property_amenity}}');
    }
}
