<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gallery_images".
 *
 * @property int $id
 * @property string $name
 * @property string $source
 * @property string $description
 * @property string $category
 * @property int $priority
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery_images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'source', 'description', 'category', 'priority'], 'required'],
            [['priority'], 'integer'],
            [['name', 'source', 'description', 'category'], 'string', 'max' => 255],
            
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
            'source' => 'Source',
            'description' => 'Description',
            'category' => 'Category',
            'priority' => 'Priority',
        ];
    }
}
