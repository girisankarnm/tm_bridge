<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%amenity_sub_option}}`.
 */
class m220130_052304_create_amenity_sub_option_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%amenity_sub_option}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->defaultValue(null),
            'amenity_id' => $this->integer(11)->defaultValue(null),
        ]);

        $this->addForeignKey('fk_sub_option_amenity','amenity_sub_option','amenity_id','amenity','id','CASCADE','CASCADE');

        $this->insert('amenity_sub_option',[            
            'name' =>'Higway Garden',
            'amenity_id' => 1,            
        ]);

        $this->insert('amenity_sub_option',[            
            'name' =>'Roof Garden',
            'amenity_id' => 1,            
        ]);

        $this->insert('amenity_sub_option',[            
            'name' =>'Ground Garden',
            'amenity_id' => 1,            
        ]);

        $this->insert('amenity_sub_option',[            
            'name' => 'Artificial Lawn',
            'amenity_id' => 2,            
        ]);

        $this->insert('amenity_sub_option',[            
            'name' => 'Seagrass Lawn',
            'amenity_id' => 2,            
        ]);

        $this->insert('amenity_sub_option',[            
            'name' => 'Split AC',
            'amenity_id' => 3,            
        ]);

        $this->insert('amenity_sub_option',[            
            'name' => 'Window AC',
            'amenity_id' => 3,            
        ]);

        $this->insert('amenity_sub_option',[            
            'name' => 'Solar Water Heater',
            'amenity_id' => 4,            
        ]);

        $this->insert('amenity_sub_option',[            
            'name' => 'Electric Water Heater',
            'amenity_id' => 4,            
        ]);
        
        $this->insert('amenity_sub_option',[            
            'name' => 'Broadband',
            'amenity_id' => 5,            
        ]);

        $this->insert('amenity_sub_option',[            
            'name' => 'Optic Fiber Internet',
            'amenity_id' => 5,            
        ]);

        $this->insert('amenity_sub_option',[            
            'name' => 'Secure Wifi',
            'amenity_id' => 6,            
        ]);

        $this->insert('amenity_sub_option',[            
            'name' => 'Public Wifi',
            'amenity_id' => 6,            
        ]);

        $this->insert('amenity_sub_option',[            
            'name' => 'Electric Wheel Chair',
            'amenity_id' => 7,            
        ]);

        $this->insert('amenity_sub_option',[            
            'name' => 'Mechanical chair',
            'amenity_id' => 7,            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_sub_option_amenity','amenity_sub_option');
        $this->dropTable('{{%amenity_sub_option}}');
    }
}
