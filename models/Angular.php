<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "angular".
 *
 * @property int $id
 * @property int $frequencia
 */
class Angular extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'angular';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['frequencia'], 'required'],
            [['frequencia'], 'integer'],
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
