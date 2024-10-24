<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "circunferencia".
 *
 * @property int $id
 * @property float $raio
 */
class Circunferencia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'circunferencia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['raio'], 'required'],
            [['raio'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'raio' => 'Raio',
        ];
    }
}
