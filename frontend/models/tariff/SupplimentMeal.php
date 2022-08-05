<?php

namespace frontend\models\tariff;
use frontend\models\property\Property;
use frontend\models\TourMatrixActiveRecord;

use Yii;

/**
 * This is the model class for table "suppliment_meal".
 *
 * @property int $id
 * @property int|null $property_id
 * @property int|null $date_range_id
 *
 * @property TariffDateRange $dateRange
 * @property Property $property
 * @property SupplimentMealSlab[] $supplimentMealSlabs
 */
class SupplimentMeal extends TourMatrixActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suppliment_meal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_id', 'date_range_id'], 'integer'],
            [['date_range_id'], 'exist', 'skipOnError' => true, 'targetClass' => TariffDateRange::className(), 'targetAttribute' => ['date_range_id' => 'id']],
            [['property_id'], 'exist', 'skipOnError' => true, 'targetClass' => Property::className(), 'targetAttribute' => ['property_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'property_id' => 'Property ID',
            'date_range_id' => 'Date Range ID',
        ];
    }

    /**
     * Gets query for [[DateRange]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDateRange()
    {
        return $this->hasOne(TariffDateRange::className(), ['id' => 'date_range_id']);
    }

    /**
     * Gets query for [[Property]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProperty()
    {
        return $this->hasOne(Property::className(), ['id' => 'property_id']);
    }

    /**
     * Gets query for [[SupplimentMealSlabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupplimentMealSlabs()
    {
        return $this->hasMany(SupplimentMealSlab::className(), ['tariff_id' => 'id']);
    }
}