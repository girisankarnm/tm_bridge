<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_parking_type_map".
 *
 * @property int $id
 * @property int|null $parking_id
 * @property int|null $parking_type_id
 *
 * @property PropertyParking $parking
 * @property PropertyParkingType $parkingType
 */
class PropertyParkingTypeMap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_parking_type_map';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parking_id', 'parking_type_id'], 'integer'],
            [['parking_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyParking::className(), 'targetAttribute' => ['parking_id' => 'id']],
            [['parking_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertyParkingType::className(), 'targetAttribute' => ['parking_type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parking_id' => 'Parking ID',
            'parking_type_id' => 'Parking Type ID',
        ];
    }

    /**
     * Gets query for [[Parking]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParking()
    {
        return $this->hasOne(PropertyParking::className(), ['id' => 'parking_id']);
    }

    /**
     * Gets query for [[ParkingType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParkingType()
    {
        return $this->hasOne(PropertyParkingType::className(), ['id' => 'parking_type_id']);
    }
}
