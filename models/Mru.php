<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mru".
 *
 * @property int $id
 * @property int $pinicial
 * @property int $velocidade
 * @property int $intervalot
 */
class Mru extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mru';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pinicial', 'velocidade', 'intervalot'], 'required'],
            [['pinicial', 'velocidade', 'intervalot'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pinicial' => 'Posição Inicial (m)',
            'velocidade' => 'Velocidade (m/s)',
            'intervalot' => 'Intervalo de tempo (s)',
        ];
    }
}
