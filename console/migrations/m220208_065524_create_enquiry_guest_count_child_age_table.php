<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%enquiry_guest_count_child_age}}`.
 */
class m220208_065524_create_enquiry_guest_count_child_age_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%enquiry_guest_count_child_age}}', [
            'id' => $this->primaryKey(),            
            'plan_id' => $this->integer(11)->defaultValue(null),
            'age' => $this->smallInteger()->notNull()->defaultValue(0),
            'count' => $this->smallInteger()->notNull()->defaultValue(0),
        ]);

        $this->addForeignKey('fk_child_age_guest_count','enquiry_guest_count_child_age','plan_id','enquiry_guest_count','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_child_age_guest_count','enquiry_guest_count_child_age');
        $this->dropTable('{{%enquiry_guest_count_child_age}}');
    }
}
