<?php get_header(); ?>

<?php the_post(); ?>
        <a class="single__back" href="https://totamto.com.pl/autorzy/">
            powrót
        </a>
        <article class="single__authors">
            <div class="items items-start">
                <div class="items__author">
                    <span>
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'author__photo')); ?>
                    <p class="copyrights"><?php the_field('copyrights'); ?></p>
                    </span>
                </div>
                <div class="items-info">
                    <div>
                        <h5><?php the_title(); ?></h5>
                        <p><?php the_field('ksiazki'); ?></p>
                        <p><?php the_content(); ?></p>
                    </div>
                    <?php if( get_field('link_ksiazki') ): ?>
                        <div>
                            <a href="<?php the_field('link_ksiazki'); ?>" class="button button-small">zobacz książkę</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </article>
    <button id="topBtn" class="topBtn topBtn-red" title="Do góry!">&#9650;</button>

<?php get_footer(); ?>