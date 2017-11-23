<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<section class="home">
  <h2 class="smallcaps title">Reformed Episcopal Seminary</h2>
  <p class="title-msg italic">Study with the best, in order to lorem ac enim pellentesque, adipiscing metus id, pharetra odio. Arma virumque cano vergilius sum.</p>
  <div class="photo-text">
    <div class="photo nick">
      <div class="text">
        <h3>A history of excellence</h3>
        <p><span class="italic">Compelling Education</span> defines our nature and mission. Lorem ipsum dolor sit amet. Ut vel dictum sem, a pretium dui. In malesuada.</p>
        <a class="button" href="/programs">Explore Programs</a>
      </div>
    </div>
  </div>
  <div class="latest-post">

    <?php /*
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
      */
    ?>
  </div>
  <div class="founded-banner grid">
    <img src="/wp-content/themes/res-theme/images/logo-white-x2.png" alt="logo">
    <div class="grid-1-2">
      <p class="top">seminary founded</p>
      <p class="bottom">In the year of our lord</p>
    </div>
    <div class="grid-1-2">
      <p class="date">1887<time datetime="1887"></p>
    </div>
  </div>

  <div class="photo-text">
    <div class="photo bridge">
      <div class="text">
        <h3>A Legacy of Faith</h3>
        <p><span class="italic">After 130 years,</span> we stay true to our founding mission of faithfulness lorem ipsum. Ut vel dictum sem, a pretium dui. In malesuada.</p>
        <a class="button" href="/heritage">Our Heritage</a>
      </div>
    </div>
  </div>

  <div class="professor-highlight clear">
    <img src="/wp-content/themes/res-theme/images/dale-crouthamel.jpg" alt="professor">
    <div class="text">
      <p class="bio">
        <span>Incredible education</span> Ut vel dictum sem, a pretium dui. In malesuada enim in dolor euismod, id commodo mi consectetur. Curabitur at vestibulum nisi. Nullam vehicula nisi velit. Mauris turpis nisl, molestie ut ipsum et, suscipit.
      </p>
      <p class="prof-name">Archbishop Foley Beach</p>
      <p class="title">Primate, Anglican Church in North America</p>
    </div>
  </div>

  <div class="photo-text">
    <div class="photo convo">
      <div class="text">
        <h3>Continuing Education</h3>
        <p><span class="italic">Learning without ceasing</span> is a goal of as much growing in knowledge as in years. Ut vel dictum sem, a pretium dui. In malesuada.</p>
        <a class="button" href="/programs">Explore Programs</a>
      </div>
    </div>
  </div>

  <div class="accreditation">
    <h3>Accreditation</h3>
    <p>The Reformed Episcopal Seminary is accredited by the Commission on Accrediting of the Association of Theological Schools in the United States and Canada.<br><br> In the last five years -87- percent of all Master of Divinity students have completed their program on schedule.  In the last five years, -92- percent of all our graduates have been active in Christian ministry.  -100- percent of our current students are active in Christian ministry.</p>
  </div>
  <div class="photo-join">
    <div class="photo">
      <div class="text">
        <h3>Join Us</h3>
        <p>Explore the opportunities and grow in the beauty of faith. Join us!</p>
        <a class="button" href="/admissions">Admissions</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
