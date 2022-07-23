<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%master_edit_request}}`.
 */
class m220721_042247_create_master_edit_request_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%master_edit_request}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()
        ]);

        $this->insert('country',[
            'name' =>'property name',
        ]);
        $this->insert('country',[
            'name' =>'property type',
        ]);
        $this->insert('country',[
            'name' =>'property rating',
        ]);
        $this->insert('country',[
            'name' =>'location',
        ]);
        $this->insert('country',[
            'name' =>'destination',
        ]);
        $this->insert('country',[
            'name' =>'legal status',
        ]);
        $this->insert('country',[
            'name' =>'country',
        ]);
        $this->insert('country',[
            'name' =>'pin code',
        ]);
        $this->insert('country',[
            'name' =>'pan number',
        ]);
        $this->insert('country',[
            'name' =>'business license number',
        ]);
        $this->insert('country',[
            'name' =>'gst number',
        ]);
        $this->insert('country',[
            'name' =>'bank name',
        ]);
        $this->insert('country',[
            'name' =>'account name',
        ]);
        $this->insert('country',[
            'name' =>'account number',
        ]);
        $this->insert('country',[
            'name' =>'ifsc code',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%master_edit_request}}');
    }
}
