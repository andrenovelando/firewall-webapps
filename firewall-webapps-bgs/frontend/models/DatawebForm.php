<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dataweb".
 *
 * @property integer $idWeb
 * @property string $Nama
 */
class DatawebForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dataweb';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nama'], 'required'],
            [['Nama'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idWeb' => 'Id Web',
            'Nama' => 'Nama',
        ];
    }
}
