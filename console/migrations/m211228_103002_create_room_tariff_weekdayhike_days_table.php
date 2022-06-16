<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%room_tariff_weekdaywise_days}}`.
 */
class m211228_103002_create_room_tariff_weekdayhike_days_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%room_tariff_weekdayhike_days}}', [
            'id' => $this->primaryKey(),
            'day' => $this->tinyInteger()->defaultValue(null),
            'tariff_id' =>  $this->integer(11)->defaultValue(null),
        ]);

        $this->addForeignKey('fk_week_days_tariff','room_tariff_weekdayhike_days','tariff_id','room_tariff_weekdayhike','id','CASCADE','CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_week_days_tariff','room_tariff_weekdayhike_days');
        $this->dropTable('{{%room_tariff_weekdayhike_days}}');
    }
}
