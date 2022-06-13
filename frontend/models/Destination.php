<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "destination".
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int|null $country_id
 * @property int|null $category_id
 * @property int $location_id
 * @property string|null $description
 * @property string|null $picture
 * @property int $status
 *
 * @property DestinationCategory $category
 * @property Country $country
 * @property Location $location
 */
class Destination extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'destination';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'code', 'location_id'], 'required'],
            [['country_id', 'category_id', 'location_id', 'status'], 'integer'],
            [['description'], 'string'],
            [['name', 'picture'], 'string', 'max' => 255],
            [['code'], 'string', 'max' => 3],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => DestinationCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'id']],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'id']],
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
            'code' => 'Code',
            'country_id' => 'Country ID',
            'category_id' => 'Category ID',
            'location_id' => 'Location ID',
            'description' => 'Description',
            'picture' => 'Picture',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(DestinationCategory::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Country]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }

    /**
     * Gets query for [[Location]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['id' => 'location_id']);
    }
}
