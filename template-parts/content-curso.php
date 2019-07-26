<?php
/*
*
* This is a template for single page - curso
*
*/

?>

<div class="single-curso-grid">

  <div class="single--top">
    <h1><?php the_title();?></h1>
    <div class="single-curso-grid-section">
      <h3 class="single-curso-grid-subtitle"><?php echo get_field("course_title", false, false);?></h3>
      <p class="lg-50"><?php echo get_field("course_description", false, false);?></p>
    </div>

    <div class="single-curso-grid-section">
      <h3>Requisitos</h3>
      <p class="lg-50"><?php echo get_field("course_requisitos", false, false);?></p>
    </div>
  </div>

  <div class="single-curso-sidebar">
    <h4>Próximo Curso</h4>
    <br>
    <h5>Data</h5>
    <?php
      $startDate = get_field("start_date", false, false);
      $DateOne = new DateTime($startDate);
      $endDate = get_field("end_date", false, false);
      $DateTwo = new DateTime($endDate);
    ?>
    <p class="single-curso-sidebar-data"><?php echo $DateOne->format('j').' à '. $DateTwo->format('j'). ' de '.$DateTwo->format(' F');?></p>
    <?php 
      $startTime =  new DateTime(get_field("start_time", false, false));
      $endTime =  new DateTime(get_field("end_time", false, false));
      $duracao =  get_field("duracao", false, false);
    ?>
    <p><?php echo $startTime->format('G:i')."h - ".$endTime->format('G:i')."h"?></p>
    <br>
    <h5>Duracao</h5>
    <p><?php echo $duracao?></p>

    <br>
    <h5>Local</h5>
    <p><?php echo get_field("local", false, false);?></p>

    <br>
    <h5>Instructor</h5>
    <p><?php echo get_field("instructor", false, false);?></p>
    <p>Vide site oficial : <a href:<?php echo get_field("link_to_website",false, false)?>>Mikrotik</a></p>
    <div class="btn-green-outline single-curso-sidebar-btn">
      <p class="btn-p"><a href="#">Compre Já</a></p>
    </div>
  </div>

  <div class="single--bottom">
    <div class="single-curso-grid-section">
      <h3><?php echo get_field("course_include", false, false);?></h3>
      <ul class="lg-50">
        <?php
        $values = get_field('bullet_point', false, false);
        $values2 = explode(",",$values);
        foreach($values2 as $val){
          echo "<li>".$val."</li>";
        }
        ?>
      </ul>
    </div>
    <div class="single-curso-grid-section">
    <h4>O que irá aprender</h4>
    <p class="lg-50"><?php echo get_field("course_detail", false, false);?></p>
      </div>
  </div>
</div>
