<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\Assets\GalleryAsset;

GalleryAsset::register($this);

$this->title = 'Галерея';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
<h1>Галерея</h1>

    <div class="gallery" id="gallery">
    	<?php
    	foreach ($categories as $category) {
   			echo '<div class="gallery-item" style="grid-row-end: span 14;">';
   				echo '<div class="content">';
          echo Html::a(Html::img('@web/img/'. $category->name . '/main_image.jpg'),['gallery/gallery', 'category' => $category->name]);
          echo '<div class="category-name">' . $category->header .  '</div>';
   				echo '</div>';
   			echo '</div>';
       	}
    	?>
    </div>
</div>

