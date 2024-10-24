<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "velocidadex".
 *
 * @property int $id
 * @property string|null $velocidadei
 * @property string|null $cosseno
 */
class Velocidadex extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'velocidadex';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['velocidadei', 'cosseno'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'velocidadei' => 'Velocidade inicial (m/s)',
            'cosseno' => 'Cos do ângulo da direção do lançamento',
        ];
    }
}
