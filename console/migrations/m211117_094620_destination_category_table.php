<?php

use yii\db\Migration;

/**
 * Class m211118_082617_destination_category_table
 */
class m211117_094620_destination_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%destination_category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)
        ]);

        $this->insert('destination_category',[            
            'name' =>'Backwaters',
        ]);

        $this->insert('destination_category',[            
            'name' =>'Beach',
        ]);

        $this->insert('destination_category',[            
            'name' =>'Hill Station',            
        ]);

        $this->insert('destination_category',[            
            'name' =>'Waterfalls',            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%destination_category}}');
       
    }
  
}
