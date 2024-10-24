<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "impulso".
 *
 * @property int $id
 * @property string|null $massa
 * @property float|null $velocidade
 */
class Impulso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'impulso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['velocidade'], 'number'],
            [['massa'], 'string', 'max' => 45],
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
            'velocidade' => 'Velocidade (m/s)',
        ];
    }
}
