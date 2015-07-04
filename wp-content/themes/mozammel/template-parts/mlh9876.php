
<div class="col-md-6 post">
                <?php 
                $attr=array('class'=>'img-responsive', 'alt'=>'');
                $size=array(600,400);
                ?>
                <?php the_post_thumbnail( $size, $attr ); ?>

                <div class="post-container">
                    <h2><?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?></h2>

                    <div class="meta">Posted By <?php the_author(); ?> on <?php the_time("F j, Y"); ?></div>

                    <?php the_excerpt(); ?>

                    <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>
                </div>
    </div>
            