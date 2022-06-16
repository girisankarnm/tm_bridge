<?php

namespace frontend\models\tariff;

use Yii;

/**
 * This is the model class for table "room_tariff_weekdayhike_days".
 *
 * @property int $id
 * @property int|null $day
 * @property int|null $tariff_id
 *
 * @property RoomTariffWeekdayhike $tariff
 */
class RoomTariffWeekdayhikeDays extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room_tariff_weekdayhike_days';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['day', 'tariff_id'], 'integer'],
            [['tariff_id'], 'exist', 'skipOnError' => true, 'targetClass' => RoomTariffWeekdayhike::className(), 'targetAttribute' => ['tariff_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'day' => 'Day',
            'tariff_id' => 'Tariff ID',
        ];
    }

    /**
     * Gets query for [[Tariff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTariff()
    {
        return $this->hasOne(RoomTariffWeekdayhike::className(), ['id' => 'tariff_id']);
    }
}
