<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "periodo".
 *
 * @property int $id
 * @property string $frequencia
 */
class Periodo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'periodo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['frequencia'], 'required'],
            [['frequencia'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'frequencia' => 'Frequência (Hz)',
        ];
    }
}
