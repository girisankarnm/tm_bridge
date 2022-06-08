<?php

namespace frontend\models\tariff;

use Yii;

/**
 * This is the model class for table "tariff_nationality_table".
 *
 * @property int $id
 * @property int|null $group_id
 * @property int|null $country_id
 *
 * @property Country $country
 * @property TariffNationalityGroupName $group
 */
class TariffNationalityTable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tariff_nationality_table';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_id', 'country_id'], 'integer'],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'id']],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => TariffNationalityGroupName::className(), 'targetAttribute' => ['group_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Group ID',
            'country_id' => 'Country ID',
        ];
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
     * Gets query for [[Group]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(TariffNationalityGroupName::className(), ['id' => 'group_id']);
    }
}
