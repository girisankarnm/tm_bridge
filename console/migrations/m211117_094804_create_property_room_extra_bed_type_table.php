<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_room_extra_bed_type}}`.
 */
class m211117_094804_create_property_room_extra_bed_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_room_extra_bed_type}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)
        ]);

        $this->insert('property_room_extra_bed_type',[
            'name' => "Folding Bed with Matress",           
            ]);

        $this->insert('property_room_extra_bed_type',[
            'name' => "Matress",           
            ]);

        $this->insert('property_room_extra_bed_type',[
            'name' => "Roll away Matress",           
            ]);
    }

    
 



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_room_extra_bed_type}}');
    }
}
