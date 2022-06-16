<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%room_tariff_slab_weekdayhike}}`.
 */
class m211227_064143_create_room_tariff_slab_weekdayhike_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%room_tariff_slab_weekdayhike}}', [
            'id' => $this->primaryKey(),            
            'room_rate' =>  $this->money(7, 2)->defaultValue(null),
            'adult_with_extra_bed' =>  $this->money(7, 2)->defaultValue(null),
            'child_with_extra_bed' =>  $this->money(7, 2)->defaultValue(null),
            'child_sharing_bed' =>  $this->money(7, 2)->defaultValue(null),
            'single_occupancy' =>  $this->money(7, 2)->defaultValue(null),            
            'tariff_id' =>  $this->integer(11)->defaultValue(null),            
        ]);

        $this->addForeignKey('fk_room_tariff_slab_weekdayhike_tariff','room_tariff_slab_weekdayhike','tariff_id','room_tariff_weekdayhike','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_room_tariff_slab_weekdaywise_tariff','room_tariff_slab_weekdayhike');
        $this->dropTable('{{%room_tariff_slab_weekdayhike}}');
    }
}
