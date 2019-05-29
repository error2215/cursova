<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "works".
 *
 * @property int $id
 * @property string $team
 * @property string $region
 * @property string $tournament
 * @property string $link
 * @property string $tour
 */
class Works extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'works';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['team', 'region', 'tournament', 'link', 'tour'], 'required'],
            [['team', 'region', 'tournament', 'link'], 'string', 'max' => 255],
            [['tour'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'team' => 'Team',
            'region' => 'Region',
            'tournament' => 'Tournament',
            'link' => 'Link',
            'tour' => 'Tour',
        ];
    }
}
