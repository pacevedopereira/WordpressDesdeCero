<?php get_header(); ?>


    <section id="main">
        <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <small>Publicado el <?php the_time('j/m/Y') ?> por <?php the_author_posts_link() ?> </small>
            <?php the_excerpt(); ?>


        <?php endwhile;
        else: ?>
            <p><?php _e('No hay entradas .'); ?></p>
        <?php endif; ?>

        <!--  <?php

        echo "<img src=' " . get_template_directory_uri() . "/images/minimal.png'>";
        ?>
        </img>
        -->


    </section> <!-- Fin de main -->

    <div id="about">
        <?php
        $mipagina = get_post(51);
        $titulo = $mipagina->post_title;


        echo apply_filters('the_content', $mipagina->post_content);

        ?>
        <h3><?php echo $titulo ?></h3>
    </div>

    <!-- no sé si esto va aquí -->
    <div id="content">
        <h2>Date</h2>

        <div class="post" id="post-<?php the_ID(); ?>">
            <h3 class="storytitle">Post Title</h3>

            <div class="meta">Post Meta Data</div>
            <div class="storycontent">
                <p>Welcome to WordPress.</p>
            </div>
            <div class="feedback">Comments (2)</div>
        </div>
    </div>


<?php get_sidebar() ?>


<?php get_footer(); ?>