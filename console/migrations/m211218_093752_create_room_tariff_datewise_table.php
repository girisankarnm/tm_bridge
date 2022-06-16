<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%room_tariff_datewise}}`.
 */
class m211218_093752_create_room_tariff_datewise_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%room_tariff_datewise}}', [
            'id' => $this->primaryKey(),            
            'nationality_id' =>  $this->integer(11)->defaultValue(0),
            'property_id' => $this->integer(11)->defaultValue(null),
            'room_id' =>  $this->integer(11)->defaultValue(null),
            'date_range_id' => $this->integer(11)->defaultValue(null),
            'status' => $this->smallInteger()->notNull()->defaultValue(9),
        ]);

        $this->addForeignKey('fk_room_tariff_datewise_property','room_tariff_datewise','property_id','property','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_room_tariff_datewise_room','room_tariff_datewise','room_id','room','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_room_tariff_date_range','room_tariff_datewise','date_range_id','tariff_date_range','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_room_tariff_datewise_property','room_tariff_datewise');
        $this->dropForeignKey('fk_room_tariff_datewise_room','room_tariff_datewise');
        $this->dropForeignKey('fk_room_tariff_date_range','date_range_id');
        $this->dropTable('{{%room_tariff_datewise}}');
    }
}
