<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_restaurant}}`.
 */
class m220128_135258_create_property_restaurant_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_restaurant}}', [
            'id' => $this->primaryKey(),
            'property_id' => $this->integer(11)->defaultValue(null),
            'count' => $this->integer(11)->defaultValue(null),
        ]);

        $this->addForeignKey('fk_property_restaurant_property','property_restaurant','property_id','property','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_property_restaurant_property','property_restaurant');
        $this->dropTable('{{%property_restaurant}}');
    }
}
