<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_meal_plan".
 *
 * @property int $id
 * @property string $name
 * @property int $index
 * @property int $status
 *
 * @property EnquiryAccommodation[] $enquiryAccommodations
 * @property Room[] $rooms
 */
class PropertyMealPlan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_meal_plan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['index', 'status'], 'integer'],
            [['name'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'index' => 'Index',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[EnquiryAccommodations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEnquiryAccommodations()
    {
        return $this->hasMany(EnquiryAccommodation::className(), ['meal_plan_id' => 'id']);
    }

    /**
     * Gets query for [[Rooms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRooms()
    {
        return $this->hasMany(Room::className(), ['meal_plan_id' => 'id']);
    }
}
