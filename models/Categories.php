<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gallery_categories".
 *
 * @property int $id
 * @property string $name
 * @property string $header
 * @property string $tournament
 * @property int $priority
 * @property string $description
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery_categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'header', 'tournament', 'description'], 'required'],
            [['priority'], 'integer'],
            [['name', 'header', 'tournament', 'description'], 'string', 'max' => 255],
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
            'tournament' => 'Tournament',
            'priority' => 'Priority',
            'description' => 'Description',
        ];
    }
}
