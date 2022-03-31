<?php
/** 
* Template Name: Strona Główna
*/
?>
<?php get_header(); ?>

    <!-- WELCOME SECTION -->
    <section class="section">
        <div class="container welcome">
            <h2 class=" welcome__head">
                <?php the_field('tytul_powitalny', 'option'); ?>
            </h2>
            <div class=" welcome__box">
                <p class=" welcome__box-txt">
                    <?php the_field('tekst_powitalny', 'option'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION-->
    <section class="section">
        <div class="container about">
            <h1 class="about__head">
                <img class="about__head-logo" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/logo_totamto_black.svg" alt="logo totamto">
            </h1>
            <h4 class="about__subHead">
                <?php the_field('tytul_sekcji_o_nas', 'option'); ?> 
            </h4>
            <div class="about__opening">
                <?php the_field('tekst_sekcji_o_nas', 'option'); ?>
            </div>
        </div>
        <img class="about__imgRight" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/czytam_to.svg" alt="">
        <img class="about__imgLeft" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/kolko.svg" alt="">
    </section>

    
    <!-- BLOG SECTION-->
    <section class="section">
        <div class="container">
            <div class="container__header">
                <h2 class="container__header-head">
                    <?php the_field('tytul_sekcji_blog', 'option'); ?> 
                </h2>
                <h4 class="container__header-subHead">
                    <?php the_field('podtytul_sekcji_blog', 'option'); ?>
                </h4>
            </div>

            <!--START of wordpress post loop-->
            <?php
                $args = array(
                    'posts_per_page' => 1,
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'orderby' => 'post_date',
                );
                query_posts( $args );
                if (have_posts()) :
                    while (have_posts()) : the_post();
            ?>
            <article class="blog">
                <div class="blog__window blog__right">
                    <div class="blog__window-border blog__right">
                        <div class="blog__window-content">
                            <h3 class="blog__window-head">
                                <?php the_title(); ?>
                            </h3>
                            <h5 class="blog__window-subHead">
                                <?php the_field('podtytul'); ?>
                            </h5>
                            <p class="blog__window-txt">
                                <?php the_excerpt_max_charlength(500); ?>
                            </p>
                        </div>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="blog__button-right button">czytaj dalej...</a>
                </div>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'blog__img']); ?>
                </a>
            </article>
                
            <?php endwhile; ?>
            <?php endif; ?>
            <!--THE END of wordpress loop-->
        </div>
    </section>


    <!-- BOOKS SECTION -->
    <?php
        $args = array(
            //'posts_per_page' => 1,
            'post_status' => 'publish',
            'post_type' => 'books',
        );
        query_posts( $args );
        if (have_posts()) :
    ?>
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
    <?php endif; ?>

    <div class="wrapper-carousel">
        <div class="carousel">
             <!--START of wordpress post loop-->
             <?php 
                $args = array(
                    //'posts_per_page' => 1,
                    'post_status' => 'publish',
                    'post_type' => 'books',
                    'orderby' => 'post_date',
                    'order' => 'ASC'
                    // 'order' => 'DESC'
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
                        <div>
                            <a href="<?php the_permalink(); ?>" class="button">zobacz więcej</a>
                        </div>
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

    <!-- COMING SOON SECTION-->
    <?php
        $args = array(
            //'posts_per_page' => 1,
            'post_status' => 'publish',
            'post_type' => 'soon',
        );
        query_posts( $args );
        if (have_posts()) :
    ?>
    <section class="section">
        <img class="section__star" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/gwiazdka_już wkrotce_yell.svg" alt="">
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
                'posts_per_page' => 1,
                'post_status' => 'publish',
                'post_type' => 'soon',
                'orderby' => 'post_date',
            );
            query_posts( $args );
            if (have_posts()) :
                while (have_posts()) : the_post();
        ?>
        
        <article class="soon" id="soon-<?php the_ID(); ?>">
            <div class="soon__left">
                <?php the_post_thumbnail('post-thumbnail'); ?>
            </div>
            <div class="soon__right">
                <h3 class="soon__right-head">
                    <?php the_title(); ?>
                </h3>
                <h5 class="soon__right-subHead">
                    <!-- Katie Stokes forv example -->
                    <!-- <php echo get_post_meta($post->ID, 'autor', true); ?> -->
                    <?php the_field('autor'); ?>
                </h5>
                <p class="soon__right-date">
                    <?php the_field('data-premiery'); ?>
                </p>
                <p class="soon__right-txt">
                    <!-- <php the_excerpt_max_charlength(500); ?> -->
                    <?php the_content(); ?>
                </p>
            </div>
        </article>
         
        <?php endwhile; ?>
        <?php endif; ?>
        <!--THE END of wordpress post loop-->
    </section>
    <?php endif; ?>

    <!-- AUTHORS SECTION -->
    <section class="section">
        <div class="container">
            <div class="container__header">
                <h2 class="container__header-head">
                    <?php the_field('tytul_sekcji_autorzy', 'option'); ?>
                </h2>
                <h4 class="container__header-subHead">
                    <?php the_field('podtytul_sekcji_autorzy', 'option'); ?>
                    <!-- autorzy książek wydanych przez
                    <img class="" src="<php echo get_stylesheet_directory_uri() ?>/img/3.png" alt="logo totamto"> -->
                </h4>
            </div>
        </div>
    </section>
    <div class="wrapper-carousel">
        <div class="carousel carousel-padd">

            <!--START of wordpress post loop-->
            <?php 
                $args = array(
                    //'posts_per_page' => 1,
                    'post_status' => 'publish',
                    'post_type' => 'authors',
                    'orderby' => 'title',
                    'order'   => 'ASC',
                );
                query_posts( $args );
                if (have_posts()) :
                    while (have_posts()) : the_post();
            ?>
            <!-- .slick-slide -->
            <div class="slick__author">
                <div class="slick__author-imgBox">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'author__photo')); ?>
                    </a>
                    <p class="copyrights_abs"><?php the_field('copyrights'); ?></p>
                </div>
                <div class="slick__author-info">
                        <a href="<?php the_permalink(); ?>">
                            <h5><?php the_title(); ?></h5>
                        </a>
                    <?php the_field('ksiazki'); ?>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <!--THE END of wordpress loop-->
        </div>
    </div>

    <!-- ILLUSTRATORS SECTION -->
    <section class="section">
        <div class="container">
            <div class="container__header">
                <h2 class="container__header-head">
                    <?php the_field('tytul_sekcji_ilustratorzy', 'option'); ?>
                </h2>
                <h4 class="container__header-subHead">
                    <?php the_field('podtytul_sekcji_ilustratorzy', 'option'); ?>
                </h4>
            </div>
        </div>
    </section>
    <div class="wrapper-carousel">
        <div class="carousel carousel-padd">
            <!--START of wordpress post loop-->
            <?php 
                $args = array(
                    //'posts_per_page' => 1,
                    'post_status' => 'publish',
                    'post_type' => 'illustrators',
                    'orderby' => 'title',
                    'order'   => 'ASC',
                );
                query_posts( $args );
                if (have_posts()) :
                    while (have_posts()) : the_post();
            ?>
            <!-- .slick-slide -->
            <div class="slick__author">
                <div class="slick__author-imgBox">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'author__photo illustrator__photo')); ?>
                    </a>
                    <p class="copyrights_abs"><?php the_field('copyrights'); ?></p>
                </div>
                <div class="slick__author-info">
                        <a href="<?php the_permalink(); ?>">
                            <h5><?php the_title(); ?></h5>
                        </a>
                    <?php the_field('ksiazki'); ?>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <!--THE END of wordpress loop-->
        </div>
    </div>
  <!--BACK TO TOP BUTTON-->
  <button id="topBtn" class="topBtn" title="Do góry!">&#9650;</button>
<?php get_footer(); ?>
