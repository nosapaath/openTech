<?php
/*
*
* This is a template for single page - curso
*
*/

?>

<h1><?php the_title();?></h1>
<p><?php echo get_field("course_title", false, false);?></p>
<br>
<p><?php echo get_field("course_description", false, false);?></p>

<h3>Requisitos</h3>
<p><?php echo get_field("course_requisitos", false, false);?></p>

<br>
<br>

<p><?php echo get_field("course_include", false, false);?></p>

<?php
$values = get_field('bullet_point', false, false);
$values2 = explode(",",$values);
foreach($values2 as $val){
  echo "<li>".$val."</li>";
}
?>
<br>
<br>

<h4>O que irá aprender</h4>
<p><?php echo get_field("course_detail", false, false);?></p>
<br>
<br>

<h4>Proximo Curso</h4>
<br>
<h5>Data</h5>
<?php
  $startDate = get_field("start_date", false, false);
  $DateOne = new DateTime($startDate);
  $endDate = get_field("end_date", false, false);
  $DateTwo = new DateTime($endDate);
?>
<p><?php echo $DateOne->format('j').' à '. $DateTwo->format('j'). ' de '.$DateTwo->format(' F');?></p>
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