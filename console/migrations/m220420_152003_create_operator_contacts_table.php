<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%operator_contacts}}`.
 */
class m220420_152003_create_operator_contacts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%operator_contacts}}', [
            'id' => $this->primaryKey(),
            'name1' => $this->string(255)->defaultValue(null),
            'name2' => $this->string(255)->defaultValue(null),
            'phone1' => $this->string(15)->defaultValue(null),
            'phone2' => $this->string(15)->defaultValue(null),
            'email1' => $this->string(255)->defaultValue(null),
            'email2' => $this->string(255)->defaultValue(null),
            'operator_id' => $this->integer(11)->notNull(),
        ]);
        $this->addForeignKey('fk_operator_contacts','operator_contacts','operator_id','operator','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_operator_contacts','operator_contacts');
        $this->dropTable('{{%operator_contacts}}');
    }
}
