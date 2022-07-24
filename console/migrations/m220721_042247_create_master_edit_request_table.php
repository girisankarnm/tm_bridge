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

        $this->insert('master_edit_request',[
            'name' =>'property name',
        ]);
        $this->insert('master_edit_request',[
            'name' =>'property type',
        ]);
        $this->insert('master_edit_request',[
            'name' =>'property rating',
        ]);
        $this->insert('master_edit_request',[
            'name' =>'location',
        ]);
        $this->insert('master_edit_request',[
            'name' =>'destination',
        ]);
        $this->insert('master_edit_request',[
            'name' =>'legal status',
        ]);
        $this->insert('master_edit_request',[
            'name' =>'country',
        ]);
        $this->insert('master_edit_request',[
            'name' =>'pin code',
        ]);
        $this->insert('master_edit_request',[
            'name' =>'pan number',
        ]);
        $this->insert('master_edit_request',[
            'name' =>'business license number',
        ]);
        $this->insert('master_edit_request',[
            'name' =>'gst number',
        ]);
        $this->insert('master_edit_request',[
            'name' =>'bank name',
        ]);
        $this->insert('master_edit_request',[
            'name' =>'account name',
        ]);
        $this->insert('master_edit_request',[
            'name' =>'account number',
        ]);
        $this->insert('master_edit_request',[
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
