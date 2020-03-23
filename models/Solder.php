<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "soldati".
 *
 * @property int $id
 * @property int $Name
 * @property int $Weapon
 * @property int $Color
 */
class Solder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'soldati';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Weapon', 'Color'], 'required'],
            [['Name', 'Weapon', 'Color'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Name',
            'Weapon' => 'Weapon',
            'Color' => 'Color',
        ];
    }
}
