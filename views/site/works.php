<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $images images */
/* @var $instructors instructors */

// $this->registerJsFile('@web/js/main_page.js');
$this->registerCssFile('@web/css/tabBar/tab.css');
$this->registerJsFile('@web/js/tabBar/tab.js');

$this->title = 'Турнір юних інформатиків'; ?>

<div class="tab" style="">
	<?php foreach ($tournaments as $tournament) : ?>
  		<button class="tablinks" onclick="openCity(event,'<?=$tournament->name ?>')" <?php if ($tournament->id == 4) echo 'id="defaultOpen"' ?> ><?= $tournament->header?></button>
 	<?php endforeach ?>
</div>

<!-- Tab content -->
<?php foreach ($tournaments as $tournament) : ?>
	<div id="<?= $tournament->name ?>" class="tabcontent">
	  <div class="opendedTab">
	  	<table class="table text-center" style="font-size: 16px">
	    	<thead class="thead-dark thd">
			    <tr>
			      <th scope="col">Номер роботи</th>
			      <th scope="col">Назва команди</th>
			      <th scope="col">Регіон</th>
			      <th scope="col">Тур</th>
			      <th scope="col">Посилання на завантаження</th>
			    </tr>
			  </thead>
	    	<tbody>
		    <?php   
		        foreach ($works as $id => $work) : 
		        	if ($work->tournament == $tournament->name && $work->link != 'none'){ ?>
		        		<tr>
					      <th scope="row"><?= $work->id ?></th>
					      <td><?= $work->team ?></td>
					      <td><?= $work->region == 'none' ? '' : $work->region ?></td>
					      <td><?= $work->tour ?></td>
					      <td><?= Html::a('Скачати', ['site/load', 'id' => $work->link]) ?></td>
					    </tr>
			<?php }
	        	endforeach;
	       	?>
        	</tbody>
	    </table>
	  </div>
	</div>

<?php endforeach ?>
