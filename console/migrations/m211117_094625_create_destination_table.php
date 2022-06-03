<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%destination}}`.
 */
class m211117_094625_create_destination_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%destination}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'code' => $this->string(3)->notNull(),
            'country_id' => $this->integer(11)->defaultValue(null),
            'category_id' => $this->integer(11)->defaultValue(null),
            'location_id' => $this->integer(11)->notNull(),
            'description' => $this->text()->defaultValue(null),            
            'picture' => $this->string()->defaultValue(null),    
            'status' => $this->smallInteger()->notNull()->defaultValue(10)  
        ]);

        $this->addForeignKey('fk_destination_category','destination','category_id','destination_category','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_destination_country','destination','country_id','country','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_destination_location','destination','location_id','location','id','CASCADE','CASCADE');

        $this->insert('destination',[            
            'name' =>'Punnamada',
            'code' =>'PUN',
            'country_id' => 1,
            'category_id' => 1,
            'location_id' => 1,                        
            'description' =>'Welcome to Punnamada'
        ]);

        $this->insert('destination',[            
            'name' =>'Alappuzha Beach',
            'code' =>'ALP',
            'country_id' => 1,
            'category_id' => 2,
            'location_id' => 1,            
            'description' =>'Welcome to Alpy Beach'
        ]);

        $this->insert('destination',[            
            'name' =>'Hill Station',
            'code' =>'HLL',
            'country_id' => 1,
            'category_id' => 3,
            'location_id' => 2,            
            'description' =>'Hill Station'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_destination_category','destination');
        $this->dropForeignKey('fk_destination_country','destination');
        $this->dropForeignKey('fk_destination_location','destination');
        $this->dropTable('{{%destination}}');
    }
}
