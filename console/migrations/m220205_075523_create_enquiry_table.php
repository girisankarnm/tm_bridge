<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%enquiry}}`.
 */
class m220205_075523_create_enquiry_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%enquiry}}', [
            'id' => $this->primaryKey(),
            'enquiry_no' => $this->string(80)->notNull(),
            'guest_name' => $this->string(80)->notNull(),
            'nationality_id' =>  $this->integer(11)->defaultValue(0),
            'tour_start_date' => $this->date()->notNull()->defaultValue(null),
            'tour_duration' => $this->smallInteger()->notNull()->defaultValue(1),
            'email1' => $this->string(255)->defaultValue(null),
            'email2' => $this->string(255)->defaultValue(null),
            'contact1' => $this->string(15)->defaultValue(null),
            'contact2' => $this->string(15)->defaultValue(null),
            'guest_count_same_on_all_days' => $this->boolean()->defaultValue(true),
            'owner_id' => $this->integer(11)->defaultValue(null)
        ]);

        $this->addForeignKey('fk_enquiry_country','enquiry','nationality_id','country','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_enquiry_user','enquiry','owner_id','user','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_enquiry_country','enquiry');
        $this->dropForeignKey('fk_enquiry_user','enquiry');
        $this->dropTable('{{%enquiry}}');
    }
}
