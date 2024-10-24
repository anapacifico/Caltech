<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "potencia".
 *
 * @property int $id
 * @property float $trabalho
 * @property int $itempo
 */
class Potencia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'potencia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['trabalho', 'itempo'], 'required'],
            [['trabalho'], 'number'],
            [['itempo'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'trabalho' => 'Trabalho (J)',
            'itempo' => 'Intervalo de tempo (s)',
        ];
    }
}
