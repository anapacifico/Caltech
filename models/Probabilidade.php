<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "probabilidade".
 *
 * @property int $id
 * @property int $favoravel
 * @property int|null $possivel
 */
class Probabilidade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'probabilidade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['favoravel'], 'required'],
            [['favoravel', 'possivel'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'favoravel' => 'Número de resultados favoráveis',
            'possivel' => 'Número de resultados possíveis',
        ];
    }
}
