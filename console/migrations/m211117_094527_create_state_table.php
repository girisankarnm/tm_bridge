<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%state}}`.
 */
class m211117_094527_create_state_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%state}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'country_id' => $this->integer(11)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)
        ]);

        $this->addForeignKey('fk_state_country','state','country_id','country','id','RESTRICT','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_state_country','state');
        $this->dropTable('{{%state}}');
    }
}
