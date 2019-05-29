<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tournaments".
 *
 * @property int $id
 * @property string $name
 * @property string $header
 * @property string $place
 * @property string $sponsors
 * @property string $date
 * @property int $priority
 * @property string $image
 */
class Tournaments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tournaments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'header', 'place', 'sponsors', 'date', 'image'], 'required'],
            [['priority'], 'integer'],
            [['name', 'header', 'place', 'sponsors', 'date', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'header' => 'Header',
            'place' => 'Place',
            'sponsors' => 'Sponsors',
            'date' => 'Date',
            'priority' => 'Priority',
            'image' => 'Image',
        ];
    }
}
