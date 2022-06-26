<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%amenities}}`.
 */
class m220130_052110_create_amenity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%amenity}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->defaultValue(null),
            'display_level_id' => $this->integer(11)->defaultValue(null),
            'nest_under_id' => $this->integer(11)->defaultValue(null),
            'search_option_id' => $this->integer(11)->defaultValue(null),
        ]);

        $this->addForeignKey('fk_amenity_display_level_amenity','amenity','display_level_id','amenity_display_level','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_amenity_group_amenity','amenity','nest_under_id','amenity_group','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_amenity_search_option_amenity','amenity','search_option_id','amenity_search_option','id','CASCADE','CASCADE');

        $this->insert('amenity',[            
            'name' =>'Garden',
            'display_level_id' => 1,
            'nest_under_id' => 1,
            'search_option_id' => 1, 
        ]);

        $this->insert('amenity',[            
            'name' =>'Lawn',
            'display_level_id' => 1,
            'nest_under_id' => 1,
            'search_option_id' => 1, 
        ]);

        $this->insert('amenity',[            
            'name' =>'Air Condition',
            'display_level_id' => 2,
            'nest_under_id' => 2,
            'search_option_id' => 1, 
        ]);

        $this->insert('amenity',[            
            'name' =>'Water Heater',
            'display_level_id' => 2,
            'nest_under_id' => 2,
            'search_option_id' => 1, 
        ]);

        $this->insert('amenity',[            
            'name' =>'Internet',
            'display_level_id' => 2,
            'nest_under_id' => 3,
            'search_option_id' => 1, 
        ]);

        $this->insert('amenity',[            
            'name' =>'Wifi',
            'display_level_id' => 2,
            'nest_under_id' => 3,
            'search_option_id' => 1, 
        ]);

        $this->insert('amenity',[            
            'name' =>'Wheel Chair',
            'display_level_id' => 3,
            'nest_under_id' => 4,
            'search_option_id' => 1, 
        ]);

        $this->insert('amenity',[            
            'name' =>'Pathway for differently abled',
            'display_level_id' => 3,
            'nest_under_id' => 4,
            'search_option_id' => 1, 
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_amenity_display_level_amenity','amenity');
        $this->dropForeignKey('fk_amenity_group_amenity','amenity');
        $this->dropForeignKey('fk_amenity_search_option_amenity','amenity');

        $this->dropTable('{{%amenities}}');
    }
}
