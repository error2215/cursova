<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\Assets\GalleryAsset;

/* @var $this yii\web\View */
/* @var $images images */
/* @var $instructors instructors */

$this->registerJsFile('@web/js/main_page.js');
GalleryAsset::register($this);

$this->title = 'Турнір юних інформатиків';
?>
    
    <main class="main">
        <section class='parent'>
  <div class='slider'>
   <a class="source source-2" id='rightBtn'>
    <button type="button" id='right' class='right ' name="button">

       <svg version="1.1" id="Capa_1" width='40px' height='40px ' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
       <g>
        <path style='fill: #9d9d9d;' d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
          c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z
          "/>
       </g>

       </svg>

       </button>
  </a>
  <a class="source source-4" id='leftBtn'>
    <button type="button" id='left' class='left' name="button">
    
       <svg version="1.1" id="Capa_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
       <g>
        <path style='fill: #9d9d9d;' d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
          c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
       </g>
       </svg>
    </button>
  </a>
   <svg id='svg2' class='up2' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <circle id='circle1' class='circle1 steap' cx="34px" cy="49%" r="20"  />
      <circle id='circle2' class='circle2 steap' cx="34px" cy="49%" r="100"  />
      <circle id='circle3' class='circle3 steap' cx="34px" cy="49%" r="180"  />
      <circle id='circle4' class='circle4 steap' cx="34px" cy="49%" r="260"  />
      <circle id='circle5' class='circle5 steap' cx="34px" cy="49%" r="340"  />
      <circle id='circle6' class='circle6 steap' cx="34px" cy="49%" r="420"  />
      <circle id='circle7' class='circle7 steap' cx="34px" cy="49%" r="500"  />
      <circle id='circle8' class='circle8 steap' cx="34px" cy="49%" r="580"  />
      <circle id='circle9' class='circle9 steap' cx="34px" cy="49%" r="660"  />
    </svg>
   <svg id='svg1' class='up2' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <circle id='circle10' class='circle10 steap' cx="648px" cy="49%" r="20"  />
      <circle id='circle11' class='circle11 steap' cx="648px" cy="49%" r="100"  />
      <circle id='circle12' class='circle12 steap' cx="648px" cy="49%" r="180"  />
      <circle id='circle13' class='circle13 steap' cx="648px" cy="49%" r="260"  />
      <circle id='circle14' class='circle14 steap' cx="648px" cy="49%" r="340"  />
      <circle id='circle15' class='circle15 steap' cx="648px" cy="49%" r="420"  />
      <circle id='circle16' class='circle16 steap' cx="648px" cy="49%" r="500"  />
      <circle id='circle17' class='circle17 steap' cx="648px" cy="49%" r="580"  />
      <circle id='circle18' class='circle18 steap' cx="648px" cy="49%" r="660"  />
    </svg>
      <?php
        $slideNumber = 1;
        foreach ($tournaments as $tournament) {

          echo "<div id='slide" . $slideNumber . "' class='slide" . $slideNumber;
          echo $slideNumber == 1 ? " up1'" : "'" ; 
          echo " style=\"background-image: url('/img/" . $tournament->image . "')\">";
          echo $tournament->header . "</div>";
          $slideNumber++;

        }
      ?>
  </div>
</section>
        <section class="about">
            <div class="container">
                <h3 class="about-text">
                    QUAERAT QUOD VOLUPTATE CONSEQUUNTUR
                </h3>
                <p class="about-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, dolores obcaecati ex aliquid, dolor provident accusamus omnis dolorum ipsam. Voluptatem ipsum expedita, corporis facilis laborum asperiores nostrum! Amet porro numquam ratione temporibus quia dolorem sint lorem voluptates quasi mollitia.
                </p>
                <a href="" class="btn btn-first">Learn MORE</a>
                <a href="" class="btn">Download</a>
            </div>
        </section>

        <?php

        foreach ($tournaments as $tournament) :
        
          echo '<section class="last-tournament target target-' . $tournament->id .'">';
            echo '<div class="container">';
              echo '<div class="tournament-header"><p>' . $tournament->header .'</p></div>';
              echo '<div class="tournament-wrap">';
                echo '<div class="tournament-block">';
                  echo '<div class="block-title">'. $tournament->place . '</div>';
                  echo '<div class="block-text">Місце проведення</div>';
                echo "</div>";
                echo '<div class="tournament-block">';
                  echo '<div class="block-title">'. $tournament->sponsors . '</div>';
                  echo '<div class="block-text">Спонсори</div>';
                echo "</div>";
                echo '<div class="tournament-block">';
                  echo '<div class="block-title">'. $tournament->date . '</div>';
                  echo '<div class="block-text">Дата проведення</div>';
                echo "</div>";
              echo "</div>";
            echo "</div>";

         ?>
        
        <section class="about-tournament">
            <div class="container">
                <div class="about-tournament-wrap">
                    <div class="about-tournament-block-left">
                        <h3>Про турніри юних інформатиків</h3>
                        <p class="content-text">Турнір юних інформатиків є командним змаганням школярів, що доводить їх здатність вирішувати складні наукові та дослідницькі завдання, подавати свої розв’язки у доведеній до впровадження формі, захищати їх під час наукової дискусії.

                        Участі в турнірі передує ретельна підготовка, але поза рамками базової шкільної програми. Майже необхідною умовою участі дітей у змаганні з інформатики у галузі програмування є додаткові заняття з математики. Програмування є невід’ємною частиною математики.
                        </p>
                    </div>
                    <div class="about-tournament-block-right"></div>
                </div>
            </div>
        </section>

        <h1 class="gallery-header">Галерея турніру</h1>
        <div class="gallery" id="gallery">
          <?php

            foreach ($galleryCategories as $category) {
              if ($category->tournament == $tournament->name || $category->name == 'instructors'){
                echo '<div class="gallery-item" style="grid-row-end: span 14;">';
                  echo '<div class="content">';
                  echo Html::a(Html::img('@web/img/'. $category->name . '/main_image.jpg'),['gallery/gallery', 'category' => $category->name]);
                  echo '<div class="category-name">' . $category->header .  '</div>';
                  echo '</div>';
                echo '</div>';
              }
            }
            
            echo "</section>";

          endforeach;
          ?>
        </div>

        <!-- <section class="teacher">
            <div class="container">
                <div class="teacher-header"><h3>Викладачі, жюрі, наставники</h3></div>
                <div class="teacher-wrap"> -->
                  <?php  /*
                    foreach ($instructors as $instructor) {
                      echo '<div class="teacher-block">';
                        echo '<div class="teacher-img">';
                          echo Html::img('@web/img/' . $instructor->img_source);
                          echo '<div class="teacher-desc"><p>' . $instructor->description . '</p></div>';
                        echo '</div>';
                        echo '<div class="teacher-name">';
                          echo '<p>'. $instructor->full_name . '</p>';
                        echo '</div>';
                        echo '<div class="teacher-university">';
                          echo '<p>' . $instructor->university . '</p>';
                        echo '</div>';
                      echo "</div>";
                    } */
                  ?>
                <!-- </div>
            </div>
        </section> -->
    </main>
