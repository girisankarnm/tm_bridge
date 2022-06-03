<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_room_view}}`.
 */
class m211117_094748_create_property_room_view_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_room_view}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)
        ]);

        $this->insert('property_room_view',[
            'name' => "Airport",           
                    ]);
             $this->insert('property_room_view',[
            'name' => "Backwaters",           
                    ]);
             $this->insert('property_room_view',[
            'name' => "Beach",           
                    ]);
             $this->insert('property_room_view',[
            'name' => "Church",           
                    ]);
             $this->insert('property_room_view',[
            'name' => "Courtyard",           
                    ]);
             $this->insert('property_room_view',[
            'name' => "Garden",           
                    ]);
             $this->insert('property_room_view',[
            'name' => "Lake",           
                    ]);
             $this->insert('property_room_view',[
            'name' => "Mosque",           
                    ]);
             $this->insert('property_room_view',[
            'name' => "Mountain",           
                    ]);
             $this->insert('property_room_view',[
            'name' => "Ocean",           
                    ]);
             $this->insert('property_room_view',[
            'name' => "Pool",           
                    ]);
             $this->insert('property_room_view',[
            'name' => "River",           
                    ]);
             $this->insert('property_room_view',[
            'name' => "Road",           
                    ]);
             $this->insert('property_room_view',[
            'name' => "Temple",           
                    ]); 
             $this->insert('property_room_view',[
            'name' => "Valley",           
                    ]);
             $this->insert('property_room_view',[
            'name' => "Waterfall",           
                    ]);
             $this->insert('property_room_view',[
            'name' => "Others",           
                    ]);
        

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_room_view}}');
    }
}
