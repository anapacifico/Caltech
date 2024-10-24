<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trabalho".
 *
 * @property int $id
 * @property int $massa
 * @property float $agravidade
 * @property int $altura
 */
class Trabalho extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trabalho';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['massa', 'agravidade', 'altura'], 'required'],
            [['massa', 'altura'], 'integer'],
            [['agravidade'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'massa' => 'Massa (kg)',
            'agravidade' => 'Aceleração da gravidade (m/s²)',
            'altura' => 'Altura (m)',
        ];
    }
}
