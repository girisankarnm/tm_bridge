<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_pictures}}`.
 */
class m220311_105914_create_property_pictures_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_pictures}}', [
            'id' => $this->primaryKey(),
            'property_id' => $this->integer(11)->defaultValue(null),
            'name' => $this->string(80)->notNull(),
            'description' => $this->string(80)->defaultValue(null),
        ]);

        $this->addForeignKey('fk_pictures_property','property_pictures','property_id','property','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_pictures_property','property_pictures');
        $this->dropTable('{{%property_pictures}}');
    }
}
