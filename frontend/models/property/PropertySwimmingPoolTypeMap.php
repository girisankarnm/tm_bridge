<?php

namespace frontend\models\property;

use Yii;

/**
 * This is the model class for table "property_swimming_pool_type_map".
 *
 * @property int $id
 * @property int|null $pool_id
 * @property int|null $pool_type_id
 *
 * @property PropertySwimmingPool $pool
 * @property PropertySwimmingPoolType $poolType
 */
class PropertySwimmingPoolTypeMap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_swimming_pool_type_map';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pool_id', 'pool_type_id'], 'integer'],
            [['pool_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertySwimmingPool::className(), 'targetAttribute' => ['pool_id' => 'id']],
            [['pool_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PropertySwimmingPoolType::className(), 'targetAttribute' => ['pool_type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pool_id' => 'Pool ID',
            'pool_type_id' => 'Pool Type ID',
        ];
    }

    /**
     * Gets query for [[Pool]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPool()
    {
        return $this->hasOne(PropertySwimmingPool::className(), ['id' => 'pool_id']);
    }

    /**
     * Gets query for [[PoolType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPoolType()
    {
        return $this->hasOne(PropertySwimmingPoolType::className(), ['id' => 'pool_type_id']);
    }
}
