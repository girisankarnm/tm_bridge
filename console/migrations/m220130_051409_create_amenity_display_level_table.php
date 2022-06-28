<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%amenitiy_display_level}}`.
 */
class m220130_051409_create_amenity_display_level_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%amenity_display_level}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->defaultValue(null),
        ]);

        $this->insert('amenity_display_level',[
            'id' =>'1',
            'name' =>'Property Only'
        ]);
        $this->insert('amenity_display_level',[
            'id' =>'2',
            'name' =>'Room Only'
        ]);
        $this->insert('amenity_display_level',[
            'id' =>'3',
            'name' =>'Both'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%amenity_display_level}}');
    }
}
