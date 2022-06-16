<?php

namespace frontend\models\tariff;

use Yii;

/**
 * This is the model class for table "room_tariff_slab_weekdayhike".
 *
 * @property int $id
 * @property float|null $room_rate
 * @property float|null $adult_with_extra_bed
 * @property float|null $child_with_extra_bed
 * @property float|null $child_sharing_bed
 * @property float|null $single_occupancy
 * @property int|null $tariff_id
 *
 * @property RoomTariffWeekdayhike $tariff
 */
class RoomTariffSlabWeekdayhike extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room_tariff_slab_weekdayhike';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_rate', 'adult_with_extra_bed', 'child_with_extra_bed', 'child_sharing_bed', 'single_occupancy'], 'number'],
            [['tariff_id'], 'integer'],
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
            'room_rate' => 'Room Rate',
            'adult_with_extra_bed' => 'Adult With Extra Bed',
            'child_with_extra_bed' => 'Child With Extra Bed',
            'child_sharing_bed' => 'Child Sharing Bed',
            'single_occupancy' => 'Single Occupancy',
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
