<?php

namespace frontend\models\tariff;

use Yii;

/**
 * This is the model class for table "suppliment_meal_type".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property SupplimentMealSlab[] $supplimentMealSlabs
 */
class SupplimentMealType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suppliment_meal_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
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
        ];
    }

    /**
     * Gets query for [[SupplimentMealSlabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupplimentMealSlabs()
    {
        return $this->hasMany(SupplimentMealSlab::className(), ['meal_type_id' => 'id']);
    }
}
