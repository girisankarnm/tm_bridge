<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%room_tariff_weekdayhike}}`.
 */
class m211218_093812_create_room_tariff_weekdayhike_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%room_tariff_weekdayhike}}', [
            'id' => $this->primaryKey(),
            'property_id' => $this->integer(11)->defaultValue(null),
            'room_id' =>  $this->integer(11)->defaultValue(null),
            'range_id' => $this->integer(11)->defaultValue(null),
            'status' => $this->smallInteger()->notNull()->defaultValue(9),
        ]);
                
        $this->addForeignKey('fk_room_tariff_weekdayhike_property','room_tariff_weekdayhike','property_id','property','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_room_tariff_weekdayhike_room','room_tariff_weekdayhike','room_id','room','id','CASCADE','CASCADE');        
        $this->addForeignKey('fk_room_tariff_weekdayhike_date_range','room_tariff_weekdayhike','range_id','tariff_date_range','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_room_tariff_weekdayhike_property','room_tariff_weekdayhike');
        $this->dropForeignKey('fk_room_tariff_weekdayhike_room','room_tariff_weekdayhike');
        $this->dropForeignKey('fk_room_tariff_weekdayhike_date_range','room_tariff_weekdayhike');
        $this->dropTable('{{%room_tariff_weekdayhike}}');
    }
}
