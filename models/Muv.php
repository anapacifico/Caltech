<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "muv".
 *
 * @property int $id
 * @property int $vinicial
 * @property int $aceleracao
 * @property int $tempo
 */
class Muv extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'muv';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vinicial', 'aceleracao', 'tempo'], 'required'],
            [['vinicial', 'aceleracao', 'tempo'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vinicial' => 'Velocidade inicial (m/s)',
            'aceleracao' => 'Aceleração (m/s²)',
            'tempo' => 'Tempo (s)',
        ];
    }
}
