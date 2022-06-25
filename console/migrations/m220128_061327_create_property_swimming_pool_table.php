<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_swimming_pool}}`.
 */
class m220128_061327_create_property_swimming_pool_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_swimming_pool}}', [
            'id' => $this->primaryKey(),
            'property_id' => $this->integer(11)->defaultValue(null),
            'count' => $this->integer(11)->defaultValue(null),
        ]);

        $this->addForeignKey('fk_swimming_pool_property','property_swimming_pool','property_id','property','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_swimming_pool_property','property_swimming_pool');
        $this->dropTable('{{%property_swimming_pool}}');
    }
}
