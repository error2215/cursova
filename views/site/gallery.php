<?php

/* @var $this yii\web\View */
/* @var $title */
/* @var $images */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\Assets\GalleryAsset;

$this->registerJsFile('@web/js/gallery.js');
$this->registerJsFile('@web/js/makeGreyBg.js');
GalleryAsset::register($this);

$this->title = $title;
// $this->params['breadcrumbs'][] = $this->title;
?>
<section class="galery" id="galery">
	<div class="container">
		<div class="galery-wrap">
			<h1 style="text-align: center"><?= $title ?></h1>
				<div class="gallery" id="gallery">
					<?php
						foreach ($images as $image) :
          ?>
							<div class="gallery-item" style="grid-row-end: span 14;">
								<div class="content">
									<div class="image-wrap">
								  		<?= Html::img('@web/img/'. $image->category . '/' . $image->source); ?>
								  		<div class="gallery-image-desc"><p><?= $image->description ?></p></div>
									</div>
							  </div>
							</div>
          <?php
							endforeach
					?>
				</div>
		</div>
	</div>
</section>

