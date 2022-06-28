<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%amenitiy_group}}`.
 */
class m220130_050633_create_amenity_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%amenity_group}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->defaultValue(null),
        ]);

        $this->insert('amenity_group',[
            'id' =>'1',
            'name' =>'Property Features'
        ]);
        $this->insert('amenity_group',[
            'id' =>'2',
            'name' =>'Room Features'
        ]);
        $this->insert('amenity_group',[
            'id' =>'3',
            'name' =>'Media & Tech'
        ]);
        $this->insert('amenity_group',[
            'id' =>'4',
            'name' =>'Accessibility'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%amenitiy_group}}');
    }
}
