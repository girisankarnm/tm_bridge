<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_contacts}}`.
 */
class m220420_091724_create_property_contacts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_contacts}}', [
            'id' => $this->primaryKey(),
            'sales_name' => $this->string(255)->defaultValue(null),
            'reservation_name' => $this->string(255)->defaultValue(null),
            'front_office_name' => $this->string(255)->defaultValue(null),
            'accounts_office_name' => $this->string(255)->defaultValue(null),
            'sales_phone' => $this->string(15)->defaultValue(null),
            'reservation_phone' => $this->string(15)->defaultValue(null),
            'front_office_phone' => $this->string(15)->defaultValue(null),
            'accounts_office_phone' => $this->string(15)->defaultValue(null),
            'sales_email' => $this->string(255)->defaultValue(null),
            'reservation_email' => $this->string(255)->defaultValue(null),
            'front_office_email' => $this->string(255)->defaultValue(null),
            'accounts_office_email' => $this->string(255)->defaultValue(null),
            'property_id' => $this->integer(11)->notNull(),
        ]);

        $this->addForeignKey('fk_property_contacts','property_contacts','property_id','property','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_property_contacts','property_contacts');
        $this->dropTable('{{%property_contacts}}');
    }
}
