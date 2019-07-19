<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main " role="main">

      <section class="hero">
        <div class="bottom-24 green">
          <h1><?php the_field('intro_one',get_option('page_for_posts'))?></h1>
        </div>
        <div>
          <h2><?php the_field('intro_two',get_option('page_for_posts'));?></h2>
        </div>
      </section>

      <section class="classes">
        <div class=" bottom-24">
          <h2 class="sub-title green-bold-title">Agenda de Cursos</h2>
        </div>
        <div class="card-wrapper">
          <?php
          $loop = new WP_Query( array( 'post_type' => 'curso' ) );
          if ( $loop->have_posts() ) :
              while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <div class="card">
                <div class="title">
                    <h2 class="title-curso green-bold-title"><?php echo get_the_title(); ?></h2>
                    <p class="green bottom-24 title-curso-des"><?php echo get_field("course_title"); ?></p>
                    <div class="bottom-24">
                      <h4>Proximo Curso</h4>
                      <?php
                        $startDate = get_field("start_date", false, false);
                        $DateOne = new DateTime($startDate);
                        $endDate = get_field("end_date", false, false);
                        $DateTwo = new DateTime($endDate);
                      ?>
                      <p><?php echo $DateOne->format('j').' à '. $DateTwo->format('j'). ' de '.$DateTwo->format(' F');?></p>
                    </div>
                </div>
                <div>
                <div class="btn-green-outline">
                  <p class="btn-p"><a href="#">Mais Dethales</a></p>
                </div>
                </div>
              </div>
              <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>
      </section>

      <section class="hero">
        <div class="bottom-24 green">
          <h3><?php the_field('bottom_title',get_option('page_for_posts'))?></h3>
        </div>
        <div>
          <h4><?php the_field('bottom_hero_description',get_option('page_for_posts'));?></h4>
        </div>
        <div class="btn-green-outline">
          <p class="btn-p">Formas de Pagamento</p>
        </div>
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
