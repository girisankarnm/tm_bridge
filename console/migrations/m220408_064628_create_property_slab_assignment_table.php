<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_slab_assignment}}`.
 */
class m220408_064628_create_property_slab_assignment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_slab_assignment}}', [
            'id' => $this->primaryKey(),
            'property_id' => $this->integer(11)->notNull(),
            'operator_id' => $this->integer(11)->notNull(),
            'slab_number' => $this->smallInteger(2)->notNull(),
            'assigned_date' =>  $this->date()->notNull(),
        ]);

        $this->addForeignKey('fk_property_slab_assignment','property_slab_assignment','property_id','property','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_operator_slab_assignment','property_slab_assignment','operator_id','operator','id','CASCADE','CASCADE');        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_property_slab_assignment','property_slab_assignment');
        $this->dropForeignKey('fk_operator_slab_assignment','property_slab_assignment');
        $this->dropTable('{{%property_slab_assignment}}');
    }
}
