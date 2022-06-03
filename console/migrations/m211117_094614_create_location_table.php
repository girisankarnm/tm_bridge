<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%location}}`.
 */
class m211117_094614_create_location_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%location}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->notNull(),
            'country_id' => $this->integer(10)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)
        ]);

        $this->addForeignKey('fk_location_country','location','country_id','country','id','RESTRICT','CASCADE');

        $this->insert('location',[            
            'name' => 'Alappuzha',
            'country_id' => 1,
        ]);

        $this->insert('location',[            
            'name' => 'Ernakulam',
            'country_id' => 1,
        ]);

        $this->insert('location',[            
            'name' => 'Kozhicode',
            'country_id' => 1,
        ]);

        $this->insert('location',[            
            'name' => 'Beijing',
            'country_id' => 2,
        ]);

        $this->insert('location',[            
            'name' => 'Shanghai',
            'country_id' => 2,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_location_country','location');
        $this->dropTable('{{%location}}');
    }
}
