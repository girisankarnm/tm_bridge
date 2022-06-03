<?php

use app\components\Migration;

/**
 * Class m211126_063507_tariff_nationality_table
 */
class m211126_063507_tariff_nationality_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tariff_nationality_table}}', [
            'id' => $this->primaryKey(),
            'group_id' => $this->integer(11)->defaultValue(null),
            'country_id' => $this->integer(11)->defaultValue(null),
        ]);

        $this->addForeignKey('fk_tariff_nationality_group_name','tariff_nationality_table','group_id','tariff_nationality_group_name','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_tariff_nationality_country','tariff_nationality_table','country_id','country','id','CASCADE','CASCADE');

        $this->insert('tariff_nationality_table',[            
            'group_id' => 1,
            'country_id' => 1
        ]);

        $this->insert('tariff_nationality_table',[            
            'group_id' => 1,
            'country_id' => 2
        ]);

        $this->insert('tariff_nationality_table',[            
            'group_id' => 2,
            'country_id' => 3
        ]);

        $this->insert('tariff_nationality_table',[            
            'group_id' => 2,
            'country_id' => 4
        ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_tariff_nationality_group_name','tariff_nationality_table');
        $this->dropForeignKey('fk_tariff_nationality_country','tariff_nationality_table');
        
        $this->dropTable('{{%tariff_nationality_table}}');
    }    
}
