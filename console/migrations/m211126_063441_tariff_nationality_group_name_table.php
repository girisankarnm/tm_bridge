<?php

use app\components\Migration;

/**
 * Class m211126_063441_tariff_nationality_group_name_table
 */
class m211126_063441_tariff_nationality_group_name_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tariff_nationality_group_name}}', [
            'id' => $this->primaryKey(),
            'property_id' => $this->integer(11)->defaultValue(null),
            'name' => $this->string(80)->notNull()            
        ]);

        $this->addForeignKey('fk_tariff_nationality_group_property','tariff_nationality_group_name','property_id','property','id','CASCADE','CASCADE');

        $this->insert('tariff_nationality_group_name',[            
            'name' => 'Asian',
            'property_id' => 1
        ]);

        $this->insert('tariff_nationality_group_name',[            
            'name' => 'European',
            'property_id' => 1
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_tariff_nationality_group_property','tariff_nationality_group_name');
        $this->dropTable('{{%tariff_nationality_group_name}}');
    }
}
