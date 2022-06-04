<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%enquiry_guest_count}}`.
 */
class m220205_082122_create_enquiry_guest_count_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%enquiry_guest_count}}', [
            'id' => $this->primaryKey(),
            'plan' => $this->smallInteger()->notNull()->defaultValue(1),
            'adults' => $this->smallInteger()->notNull()->defaultValue(1),
            'children' => $this->smallInteger()->notNull()->defaultValue(0),
            'enquiry_id' =>  $this->integer(11)->defaultValue(null),
        ]);

        $this->addForeignKey('fk_guest_count_enquiry','enquiry_guest_count','enquiry_id','enquiry','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_guest_count_enquiry','enquiry_guest_count');
        $this->dropTable('{{%enquiry_guest_count}}');
    }
}
