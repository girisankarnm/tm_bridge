<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_property_map}}`.
 */
class m220421_080011_create_user_property_map_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_property_map}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull(),
            'property_id' => $this->integer(11)->notNull(),
        ]);

        $this->addForeignKey('fk_user_property_user','user_property_map','user_id','user','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_user_property_property','user_property_map','property_id','property','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_user_property_user','user_property_map');
        $this->dropForeignKey('fk_user_property_property','user_property_map');
        $this->dropTable('{{%user_property_map}}');
    }
}
