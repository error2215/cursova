<?php

/* @var $this yii\web\View */
/* @var $title */
/* @var $images */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\Assets\GalleryAsset;

$this->registerJsFile('@web/js/gallery.js');
GalleryAsset::register($this);

$this->title = $title;
// $this->params['breadcrumbs'][] = $this->title;
?>
<h1 class="gallery-header"><?= $title ?></h1>

    <div class="gallery" id="gallery"  style="grid-row-gap: 8px;">
    	<?php

    	foreach ($images as $image) {
   			echo '<div class="gallery-item" style="grid-row-end: span 14;">';
   				echo '<div class="content">';
          echo Html::img('@web/img/'. $image->category . '/' . $image->source);
          // echo '<div class="category-name">' . $category->header .  '</div>';
   				echo '</div>';
   			echo '</div>';
       	}
    	?>
    </div>


