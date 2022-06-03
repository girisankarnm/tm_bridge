<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%room_type}}`.
 */
class m211126_070703_create_room_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%room_type}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->notNull(),
        ]);

        $this->insert('room_type',[
            'name' => "Cottage",
            ]);
        $this->insert('room_type',[
            'name' => "Floating Cottage",
            ]);

        $this->insert('room_type',[
            'name' => "Beach Cottage",
            ]);

        $this->insert('room_type',[
            'name' => "Standard Room",
            ]);                
        $this->insert('room_type',[
        'name' => "Suite Room",
            ]);
        $this->insert('room_type',[
        'name' => "Tent",
            ]);

        $this->insert('room_type',[
        'name' => "Tree House",
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%room_type}}');
    }
}
