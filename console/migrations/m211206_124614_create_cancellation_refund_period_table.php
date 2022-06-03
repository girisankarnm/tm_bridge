<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cancellation_refund_period}}`.
 */
class m211206_124614_create_cancellation_refund_period_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cancellation_refund_period}}', [
            'id' => $this->primaryKey(),
            'property_id' => $this->integer(11)->defaultValue(null),
            'from_date' => $this->smallInteger(3)->defaultValue(null),
            'to_date' => $this->smallInteger(3)->defaultValue(null),
            'percentage' => $this->smallInteger(3)->defaultValue(null)
        ]);

        $this->addForeignKey('fk_cancellation_refund_property','cancellation_refund_period','property_id','property','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_cancellation_refund_property','property');
        $this->dropTable('{{%cancellation_refund_period}}');
    }
}
