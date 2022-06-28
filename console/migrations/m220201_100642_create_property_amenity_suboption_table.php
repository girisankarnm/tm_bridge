<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_amenity_suboption}}`.
 */
class m220201_100642_create_property_amenity_suboption_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_amenity_suboption}}', [
            'id' => $this->primaryKey(),
            'property_amenity_id' => $this->integer(11)->defaultValue(null),
            'sub_option_id' => $this->integer(11)->defaultValue(null),
        ]);

        $this->addForeignKey('fk_prop_amenity_sub_option_sub_option','property_amenity_suboption','sub_option_id','amenity_sub_option','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_prop_amenity_sub_option_amenity','property_amenity_suboption','property_amenity_id','property_amenity','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_prop_amenity_sub_option_sub_option','property_amenity_suboption');
        $this->dropForeignKey('fk_prop_amenity_sub_option_amenity','property_amenity_suboption');

        $this->dropTable('{{%property_amenity_suboption}}');
    }
}
