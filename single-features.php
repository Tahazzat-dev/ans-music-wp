<?php
/**
 *Template Name: Feature details page
 *
 * @package ansmusic
 */

get_header();
?>

<main class="ANS_main-wrapper">
  <section class="ANS_about-banner-wrapper ANS_single-feature-wrap">
    <!-- banner content -->
    <div class="ANS_about-banner-bg">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo get_field('feature_banner_image') ?>" />
        <source media="(max-width: 767px)" srcset="<?php echo get_field('feature_banner_image') ?>" />
        <img data-aos="fade-down" src="<?php echo get_field('feature_banner_image'); ?>" alt="Banner image" />
      </picture>

      <div class="banner-overlay"></div>
    </div>

    <!-- banner content -->
    <div class="ANS_about-banner-container ANS_flex flex_column">
      <div style="max-width:1000px; overflow: hidden;"
        class="ANS_about-banner-content ANS_container ANS_flex flex_column flex_align_center justify_center">
        <h5 class="fs-lg-lh-md"><?php the_title(); ?></h5>
        <h2 class="fs-4xl text-center">
          <?php echo get_field('feature_sub_title'); ?>
        </h2>
        <p><?php echo get_field('feature_description') ?></p>
      </div>
    </div>
  </section>
  <?php

  $features_lists = get_field('feature_specification_lists');

  if (!empty($features_lists)) {
    echo '<section class="ANS_service-wrapper ANS_flex flex_column">';
    foreach ($features_lists as $feature) {
      ?>
      <!-- ANS_services -->
      <div class="ANS_service-container ANS_container ANS_flex flex_align_center justify_between">
        <div class="section-thum">
          <img data-aos="fade-down" src="<?php echo $feature['thum_img']; ?>" alt="Music plartform image" />
        </div>

        <div class="content ANS_flex flex_column">
          <h3 data-aos="fade-up" class="fs-3xl"><?php echo $feature['title']; ?></h3>
          <p data-aos="fade-up">
            <?php echo $feature['description']; ?>
          </p>
          <button data-aos="fade-up" class="ANS_btn btn-b-yellow">GET STARTED</button>
        </div>
      </div>
      <!-- ANS_services -->
      <?php
    }
    echo '</section>';
  }
  ?>



  <!-- distribution partners -->
  <?php
  global $post;
  $current_slug = $post->post_name;
  $query_args = array(
    'post_type' => 'features',
    'posts_per_page' => 10,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC'
  );

  $feature_query = new WP_Query($query_args);
  ?>
  <div class="ANS_distribution-partners-wrap features-wrap">
    <div class="ANS_distribution-partners-inner ANS_container">
      <h2 class="fs-5xl text-fill neon-stroke text-center">
        <span data-text="EXPLORE">EXPLORE</span>
      </h2>
      <div class="distribution-partners">
        <?php
        if ($feature_query->have_posts()):
          while ($feature_query->have_posts()):
            $feature_query->the_post();
            $post_slug = get_post_field('post_name', get_the_ID()); 
            if ($current_slug === $post_slug) {
              continue;
            }
            ?>

            <!-- card -->
            <a href="<?php the_permalink(); ?>" class="card">
              <div class="glow"></div>
              <img src="<?php echo get_template_directory_uri() . '/assets/icons/analytics-and-insights.svg'; ?>"
                alt="partners icon">
              <h3 class="fs-md"><?php the_title(); ?></h3>
            </a>
            <!-- card -->
            <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>


  </div>


</main>
<?php
get_footer();
