<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "velocidadey".
 *
 * @property int $id
 * @property string|null $velocidadei
 * @property string $angulo
 */
class Velocidadey extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'velocidadey';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'angulo'], 'required'],
            [['id'], 'integer'],
            [['velocidadei', 'angulo'], 'string', 'max' => 45],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'velocidadei' => 'Velocidadei',
            'angulo' => 'Angulo',
        ];
    }
}
