<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\GalleryCategories;
use app\models\Images;

class GalleryController extends Controller
{
    public function tableName()
    {
        return 'gallery_categories';
    }

    public function actionCategories()
    {
        $categories = GalleryCategories::find()
        ->indexBy('id')
        ->all();
        return $this->render('categories', [
            'categories' => $categories,
        ]);
    }
    public function actionGallery()
    {
        $request = Yii::$app->request;

        $images = Images::find()
        ->where(['category' => $request->get('category')])
        ->indexBy('id')
        ->all();

        $title = GalleryCategories::find()
        ->where(['name' => $request->get('category')])
        ->select('header')->all();

        return $this->render('gallery', [
            'images' => $images,
            'title' => $title[0]['header']
        ]);
    }
}
