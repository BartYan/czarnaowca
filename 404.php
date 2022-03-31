<?php
/** 
* Template Name: 404
*/
?>
<?php get_header(); ?>

  <!-- WELCOME SECTION -->
  <section class="section section_404">
        <div class="container welcome">
            <h2 class=" welcome__head">
                <?php the_field('tytul_404', 'option'); ?>
            </h2>
            <div class=" welcome__box">
                <p class=" welcome__box-txt">
                    <?php the_field('tekst_404', 'option'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- BOOKS SECTION -->
    <section class="section">
        <a href="https://totamto.com.pl/ksiazki/">
            <img class="section__all" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/zobacz_wszystkie_ksiazki.svg" alt="zobacz wszystkie książki">
        </a>
        <div class="container">
            <div class="container__header">
                <h2 class="container__header-head">
                    <?php the_field('tytul_sekcji_ksiazek', 'option'); ?></h2>
                <h4 class="container__header-subHead">
                    <?php the_field('podtytul_sekcji_ksiazek', 'option'); ?>
                </h4>
            </div>
        </div>
    </section>
    <div class="wrapper-carousel">
        <div class="carousel">
             <!--START of wordpress post loop-->
             <?php 
                $args = array(
                    //'posts_per_page' => 1,
                    'post_status' => 'publish',
                    'post_type' => 'books',
                    'orderby' => 'post_date',
                );
                query_posts( $args );
                if (have_posts()) :
                    while (have_posts()) : the_post();
            ?>
            <!-- .slick-slide -->
            <div class="slick__books">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('post-thumbnail'); ?>
                </a>
                <div class="slick__books-info--center">
                    <div class="slick__books-info">
                        <div>
                            <h5><?php the_title(); ?></h5>
                            <?php the_field('autor'); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="button">zobacz więcej</a>
                    </div>
                </div>
                <?php if( get_field('bestseller') ): ?>
                    <img class="bestseller" src="<?php echo get_field('bestseller') ['url'] ?>" alt="bestseller">
                <?php endif; ?>
                <?php if( get_field('nowosc') ): ?>
                    <img class="new" src="<?php echo get_field('nowosc') ['url'] ?>" alt="nowość">
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <!--THE END of wordpress loop-->
        </div>
    </div>
    <button id="topBtn" class="topBtn topBtn-red" title="Do góry!">&#9650;</button>
<?php get_footer(); ?>