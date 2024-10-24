<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alcance".
 *
 * @property int $id
 * @property string|null $velocidade
 * @property string|null $seno
 * @property string|null $gravidade
 */
class Alcance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alcance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['velocidade', 'seno', 'gravidade'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'velocidade' => 'Velocidade inicial (m/s)',
            'seno' => 'seno do dobro do ângulo da direção do lançamento',
            'gravidade' => 'aceleração da gravidade (m/s²)',
        ];
    }
}
