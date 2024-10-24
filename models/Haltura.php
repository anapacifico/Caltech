<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "haltura".
 *
 * @property int $id
 * @property string|null $velocidadei
 * @property string|null $angulo
 * @property string|null $gravidade
 */
class Haltura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'haltura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['velocidadei', 'angulo', 'gravidade'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'velocidadei' => 'Velocidade Inicial (m/s)',
            'angulo' => 'Ângulo do lançamento (sen²)',
            'gravidade' => 'Gravidade (m/s)',
        ];
    }
}
