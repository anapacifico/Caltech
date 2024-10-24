<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "centripeda".
 *
 * @property int $id
 * @property string $raio
 * @property string $velocidade
 */
class Centripeda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'centripeda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['raio', 'velocidade'], 'required'],
            [['raio', 'velocidade'], 'string', 'max' => 45],
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
            'velocidade' => 'Velocidade',
        ];
    }
}
