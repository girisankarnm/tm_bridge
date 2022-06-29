<?php

namespace frontend\models\tariff;
use frontend\models\property\Property;
use frontend\models\tariff\TariffNationalityTable;

use Yii;

/**
 * This is the model class for table "tariff_nationality_group_name".
 *
 * @property int $id
 * @property int|null $property_id
 * @property string $name
 *
 * @property Property $property
 * @property TariffNationalityTable[] $tariffNationalityTables
 */
class TariffNationalityGroupName extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tariff_nationality_group_name';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_id'], 'integer'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 80],
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
            'name' => 'Name',
        ];
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
     * Gets query for [[TariffNationalityTables]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTariffNationalityTables()
    {
        return $this->hasMany(TariffNationalityTable::className(), ['group_id' => 'id']);
    }
}
