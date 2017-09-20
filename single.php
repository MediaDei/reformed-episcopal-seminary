<?php get_header(); ?>

</header>


<?php the_post(); ?>

  <section class="single">

    <article class="post" id="post-<?php the_ID(); ?>">
      <time>Posted on <?php the_time('F jS, Y'); ?></time>
      <h1><?php the_title(); ?></h1>

      <?php the_content(); ?>

      <time>Posted on <?php the_time('F jS, Y'); ?></time>

      <?php if(has_category()){ ?>
        <div class="categories">
          Categories: <?php the_category( ', ' ); ?>
        </div> <?php
      } ?>

    </article>
    <div class="more-posts-banner">
      <img src="/wp-content/themes/res-theme/images/logo-white-x2.png" alt="logo">
      <p>More News</p>
    </div>
    <div class="latest-posts">
      <?php 
        $args = array(
          'posts_per_page'  => '3'  // 3 per page
        );
        $query = new WP_Query($args);
          if($query->have_posts()){
            while($query->have_posts()): ?>
              <?php $query->the_post(); ?>

              <article class="post-preview clear">
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
            
            <?php endwhile;
          }
        // clean up after wp_query
        wp_reset_postdata(); 
      ?>
    </div>

  </section>

<?php get_footer(); ?>
