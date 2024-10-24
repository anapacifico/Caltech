<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mcu".
 *
 * @property int $id
 * @property float $raio
 * @property string $vangular
 */
class Mcu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['raio', 'vangular'], 'required'],
            [['raio'], 'number'],
            [['vangular'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'raio' => 'Raio (m)',
            'vangular' => 'Velocidade angular (rad/s)',
        ];
    }
}
