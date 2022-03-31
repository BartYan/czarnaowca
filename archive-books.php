<?php
/** 
* Template Name: Książki
*/
?>
<?php get_header(); ?>

     <!-- BOOKS SECTION -->
     <section class="section m-b-4">
        <img class="section__star" src="<?php echo get_stylesheet_directory_uri() ?>/img/5.png" alt="">
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
    <article>
        <!--START of wordpress post loop-->
        <?php
            $args = array(
                //'posts_per_page' => 1,
                'post_status' => 'publish',
                'post_type' => 'books',
                'orderby' => 'post_date',
                'order' => 'ASC'
            );
            query_posts( $args );
            if (have_posts()) :
                while (have_posts()) : the_post();
        ?>
        <div class="items">
            <div class="items__books">
                <div class="items__stars">
                    <?php if( get_field('bestseller') ): ?>
                    <img class="bestseller" src="<?php echo get_field('bestseller') ['url'] ?>" alt="bestseller">
                    <?php endif; ?>
                    <?php if( get_field('nowosc') ): ?>
                        <img class="new" src="<?php echo get_field('nowosc') ['url'] ?>" alt="nowość">
                    <?php endif; ?>
                </div>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'items__books']); ?>
                </a>
            </div>
            <div class="items-info">
                <div>
                    <h5><?php the_title(); ?></h5>
                    <!-- <p><php echo get_post_meta($post->ID, 'autor', true); ?></p> -->
                    <p><?php the_field('autor'); ?></p>
                    <p>
                        <!-- <php the_excerpt_max_charlength(150); ?> -->
                        <?php the_field('skrocony-tekst-ksiazki'); ?>
                    </p>
                </div>
                <div>
                    <a href="<?php the_permalink(); ?>" class="button">zobacz więcej</a>
                </div>
            </div>
            
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <!--THE END of wordpress loop-->
    </article>
    <button id="topBtn" class="topBtn topBtn-red" title="Do góry!">&#9650;</button>

<?php get_footer(); ?>