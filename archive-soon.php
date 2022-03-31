<?php
/** 
* Template Name: Zapowiedzi
*/
?>
<?php get_header(); ?>

    <!-- COMING SOON SECTION-->
    <section class="section">
        <img class="section__star" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/gwiazdka_juz_wkrotce.svg" alt="">
        <div class="container">
            <div class="container__header">
                <h2 class="container__header-head">
                    <?php the_field('tytul_sekcji_zapowiedzi', 'option'); ?> 
                </h2>
                <h4 class="container__header-subHead">
                    <?php the_field('podtytul_sekcji_zapowiedzi', 'option'); ?> 
                </h4>
            </div>
        </div>

        <!--START of wordpress post loop-->
        <?php 
            $args = array(
                // 'posts_per_page' => 1,
                'post_status' => 'publish',
                'post_type' => 'soon',
                'orderby' => 'post_date',
            );
            query_posts( $args );
            if (have_posts()) :
                while (have_posts()) : the_post();
        ?>
        <article class="soon">
            <div class="soon__left">
                <?php the_post_thumbnail('post-thumbnail'); ?>
            </div>
            <div class="soon__right">
                <h3 class="soon__right-head">
                    <?php the_title(); ?>
                </h3>
                <h5 class="soon__right-subHead">
                    <?php the_field('autor'); ?>
                </h5>
                <p class="soon__right-date">
                    <?php the_field('data-premiery'); ?>
                </p>
                <p class="soon__right-txt">
                    <?php the_content(); ?>
                </p>
            </div>
        </article>
        <?php endwhile; ?>
        <?php endif; ?>
        <!--THE END of wordpress post loop-->
    </section>
    <button id="topBtn" class="topBtn topBtn-red" title="Do góry!">&#9650;</button>
<?php get_footer(); ?>