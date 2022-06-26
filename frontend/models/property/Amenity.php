<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "amenity".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $display_level_id
 * @property int|null $nest_under_id
 * @property int|null $search_option_id
 *
 * @property AmenitySubOption[] $amenitySubOptions
 * @property AmenityDisplayLevel $displayLevel
 * @property AmenityGroup $nestUnder
 * @property AmenitySearchOption $searchOption
 */
class Amenity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'amenity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['display_level_id', 'nest_under_id', 'search_option_id'], 'integer'],
            [['name'], 'string', 'max' => 80],
            [['display_level_id'], 'exist', 'skipOnError' => true, 'targetClass' => AmenityDisplayLevel::className(), 'targetAttribute' => ['display_level_id' => 'id']],
            [['nest_under_id'], 'exist', 'skipOnError' => true, 'targetClass' => AmenityGroup::className(), 'targetAttribute' => ['nest_under_id' => 'id']],
            [['search_option_id'], 'exist', 'skipOnError' => true, 'targetClass' => AmenitySearchOption::className(), 'targetAttribute' => ['search_option_id' => 'id']],
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
            'display_level_id' => 'Display Level ID',
            'nest_under_id' => 'Nest Under ID',
            'search_option_id' => 'Search Option ID',
        ];
    }

    /**
     * Gets query for [[AmenitySubOptions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAmenitySubOptions()
    {
        return $this->hasMany(AmenitySubOption::className(), ['amenity_id' => 'id']);
    }

    /**
     * Gets query for [[DisplayLevel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDisplayLevel()
    {
        return $this->hasOne(AmenityDisplayLevel::className(), ['id' => 'display_level_id']);
    }

    /**
     * Gets query for [[NestUnder]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNestUnder()
    {
        return $this->hasOne(AmenityGroup::className(), ['id' => 'nest_under_id']);
    }

    /**
     * Gets query for [[SearchOption]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSearchOption()
    {
        return $this->hasOne(AmenitySearchOption::className(), ['id' => 'search_option_id']);
    }
}
