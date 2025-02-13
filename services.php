<?php
/**
 * Template Name: Services page
 *
 * @package ansmusic
 */

get_header();
?>

<?php
// about us page customization related ACF fields

$banner_large_background = get_field('services_banner_large_background');
$banner_small_background = get_field('services_banner_small_background');
$banner_title = get_field('services_banner_title');
$banner_subtitle = get_field('services_banner_subtitle');
?>

<main class="ANS_main-wrapper">
  <!-- banner -->
  <section class="ANS_service-banner-wrapper">
    <!-- banner content -->
    <div class="ANS_service-banner-bg">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo $banner_large_background; ?>" />
        <source media="(max-width: 767px)" srcset="<?php echo $banner_small_background; ?>" />
        <img data-aos="fade-down" src="<?php echo $banner_large_background; ?>" alt="Banner image" />
      </picture>

      <div class="banner-overlay"></div>
    </div>

    <!-- banner content -->
    <div class="ANS_service-banner-container ANS_flex flex_column">
      <div class="ANS_service-banner-content ANS_container ANS_flex flex_column flex_align_center justify_center">
        <h2 class="text-fill neon-stroke fs-6xl">
          <span data-aos="zoom-in"
            data-text="<?php echo strtoupper($banner_title); ?>"><?php echo strtoupper($banner_title); ?></span>
        </h2>
        <h3 data-aos="zoom-in" class="fs-3xl"><?php echo strtoupper($banner_subtitle); ?></h3>
      </div>
    </div>
  </section>



  <!-- music distribution guide -->
  <?php
  $services_best_plartform_section_title = get_field('services_best_plartform_section_title');
  $services_best_plartform_section_description = get_field('services_best_plartform_section_description');
  $plartform_details_first = get_field('plartform_details_first');
  $plartform_details_second = get_field('plartform_details_second');
  $plartform_details_third = get_field('plartform_details_third');
  ?>
  <section class="ANS_distribution-plartform-wrap">
    <div class="ANS_distribution-plartform-inner ANS_container">
      <div class="top-text">
        <h2 data-aos="fade-up" class="fs-5xl">
          <?php echo $services_best_plartform_section_title; ?>
        </h2>
        <!-- <h2 class="fs-5xl text-fill neon-stroke"><span data-text="GET READY">GET READY</span><br /><span data-text="TO SELL YOUR MUSIC">TO SELL YOUR MUSIC</span></h2> -->
        <h3 data-aos="fade-up" class="fs-md">
          <?php echo $services_best_plartform_section_description; ?>
        </h3>
      </div>
      <div class="ANS_global-plartforms ANS_flex">
        <div class="card-box">
          <img data-aos="zoom-in" src="<?php echo $plartform_details_first['img']; ?>" alt="Global plartform" />
          <h4 data-aos="fade-up" class="fs-xl"><?php echo $plartform_details_first['plartform_name']; ?></h4>
          <p data-aos="fade-up">
            <?php echo $plartform_details_first['plartform_description']; ?>
          </p>
        </div>
        <!-- divider -->
        <div class="divider"></div>
        <!-- divider -->
        <div class="card-box">
          <img data-aos="zoom-in" src="<?php echo $plartform_details_second['img']; ?>" alt="Global plartform" />
          <h4 data-aos="fade-up" class="fs-xl"><?php echo $plartform_details_second['plartform_name']; ?></h4>
          <p data-aos="fade-up">
            <?php echo $plartform_details_second['plartform_description']; ?>
          </p>
        </div>
        <!-- divider -->
        <div class="divider"></div>
        <!-- divider -->
        <div class="card-box">
          <img data-aos="zoom-in" src="<?php echo $plartform_details_third['img']; ?>" alt="Global plartform" />
          <h4 data-aos="fade-up" class="fs-xl"><?php echo $plartform_details_third['plartform_name']; ?></h4>
          <p data-aos="fade-up">
            <?php echo $plartform_details_third['plartform_description']; ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ANS_services -->
  <?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'category_name' => 'service-we-provide',
    'orderby' => 'date',
    'order' => 'ASC',
  );

  $query = new WP_Query($args);

  ?>

  <section class="ANS_service-wrapper ANS_flex flex_column">

    <?php

    if ($query->have_posts()):
      while ($query->have_posts()):
        $query->the_post();

        $service_short_thumnail = get_field('service_short_thumnail', get_the_ID());
        $service_first_short_excerpt = get_field('service_first_short_excerpt', get_the_ID());
        $service_second_short_excerpt = get_field('service_second_short_excerpt', get_the_ID());
        ?>

        <!-- ANS_services -->
        <div class="ANS_service-container ANS_container ANS_flex flex_align_center justify_between">
          <div class="section-thum">
            <img data-aos="fade-down" src="<?php echo $service_short_thumnail; ?>" alt="Music plartform image" />
          </div>

          <div class="content ANS_flex flex_column">
            <h3 data-aos="fade-up" class="fs-4xl"><?php the_title(); ?></h3>
            <p data-aos="fade-up" class="check-list">
              <?php echo $service_first_short_excerpt; ?>
            </p>
            <p data-aos="fade-up" class="check-list">
              <?php echo $service_second_short_excerpt; ?>
            </p>

            <a data-aos="fade-up" href="<?php the_permalink(); ?>" class="ANS_btn btn-b-yellow">Learn More</a>
          </div>
        </div>
        <!-- ANS_services -->

        <?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </section>
  <!-- ANS_services -->

  <!-- different stores -->
  <?php
  $different_digital_stores_section_title = get_field('different_digital_stores_section_title');
  $different_digital_stores_section_description = get_field('different_digital_stores_section_description');
  ?>
  <section class="ANS_different-stores-wrap">
    <div class="ANS_different-stores-inner ANS_container">
      <div class="top-text">
        <h3 data-aos="fade-up" class="fs-4xl">
          <?php echo $different_digital_stores_section_title; ?>
        </h3>
        <p data-aos="fade-up" class="">
          <?php echo $different_digital_stores_section_description; ?>
        </p>
      </div>

      <div class="slider_wrap">
        <div class="ANS_partners-inner ANS_container ANS_marquee-slider-wrapper">
          <div class="ANS_flex flex_align_center ANS_marquee-slider">
            <img src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/apple.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Spotify.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/amazon.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/tidal-b.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Facebook.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/tiktok.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/vevo.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/napster.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/YouTube01.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/resso.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Deezer_logo.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Pandora.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/instagram.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/apple.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Spotify.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/amazon.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/tidal-b.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Facebook.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/tiktok.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/vevo.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/napster.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/YouTube01.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/resso.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Deezer_logo.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Pandora.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/instagram.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/apple.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Spotify.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/amazon.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/tidal-b.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Facebook.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/tiktok.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/vevo.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/napster.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/YouTube01.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/resso.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Deezer_logo.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Pandora.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/instagram.webp" alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]" />
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
