<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "area_triangulo".
 *
 * @property int $id
 * @property float $base
 * @property float $altura
 */
class AreaTriangulo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'area_triangulo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['base', 'altura'], 'required'],
            [['base', 'altura'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'base' => 'Base',
            'altura' => 'Altura',
        ];
    }
}
