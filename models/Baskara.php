<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "baskara".
 *
 * @property int $id
 * @property int $b
 * @property int $a
 * @property int $c
 */
class Baskara extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'baskara';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['b', 'a', 'c'], 'required'],
            [['b', 'a', 'c'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'a' => 'A (Coeficiente que multiplica x²)',
            'b' => 'B (Coeficiente que multiplica x)',
            'c' => 'C (Coeficiente que não multiplica a incógnita)',
        ];
    }
}
