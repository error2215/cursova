<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\Assets\GalleryAsset;

GalleryAsset::register($this);
$this->registerJsFile('@web/js/makeGreyBg.js');

$this->title = 'Галерея';
// $this->params['breadcrumbs'][] = $this->title;
?>

<section class="galery" id="galery">
	<div class="container">
		<div class="galery-wrap">
		<h1 style="text-align: center">Галерея</h1>

			<div class="gallery" id="gallery">

				<?php
					foreach ($categories as $category) :
        ?>
  					<div class="gallery-item" style="grid-row-end: span 14;">
  							<div class="content">
  							  <div class="image-wrap">
      							<?php 

                    echo Html::img(('@web/img/'. $category->name . '/main_image.jpg'),['site/gallery', 'category' => $category->name]); 
                    ?>
                    <?php 
                      echo Html::a(
                        Html::tag(
                          'div',
                          Html::tag(
                            'p', $category->description, []
                          ),
                          ['class' => 'gallery-image-desc']
                        ),
                        ['site/gallery', 'category' => $category->name]
                      );
                    ?>
    							</div>
  							<?php echo '<div class="category-name">' . $category->header .  '</div>'; ?>
  						</div>
  					</div>
					<?php endforeach ?>
									
			</div>
		</div>
	</div>

</section>

