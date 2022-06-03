<?php

namespace frontend\models;

use Yii;
use frontend\models\TourMatrixModel;

/**
 * This is the model class for table "property_category".
 *
 * @property int $id
 * @property string $name
 * @property int $status
 */
class PropertyCategory extends TourMatrixModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
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
            'status' => 'Status',
        ];
    }
}
