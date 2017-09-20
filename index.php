<?php get_header(); ?>

</header>


<section class="news">
  <?php 
    $bg_color = 1; //apply bg color on odd posts
    if ( have_posts() ) {
      while ( have_posts() ) {
        
        the_post(); ?>
        <article class="post-preview clear<?php if($bg_color % 2 == 0){echo ' bg-color';}?>">
          <time>Posted on <?php the_time('F jS, Y'); ?></time>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
          <div class="content">
            <?php if(has_post_thumbnail()){ ?>
              <figure><?php the_post_thumbnail(); ?></figure>
            <?php
            }
            the_content(); ?>
          </div>
        </article>
        <?php
        $bg_color++;
        //
        // Post Content here
        //
      } // end while
    } // end if
  ?>
</section>

<?php get_footer(); ?>
