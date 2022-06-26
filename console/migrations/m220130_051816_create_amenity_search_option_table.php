<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%amenitiy_search_option}}`.
 */
class m220130_051816_create_amenity_search_option_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%amenity_search_option}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->defaultValue(null),
        ]);

        $this->insert('amenity_search_option',[
            'id' =>'1',
            'name' =>'Searchable'
        ]);
        $this->insert('amenity_search_option',[
            'id' =>'2',
            'name' =>'Non-searchable'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%amenity_search_option}}');
    }
}
