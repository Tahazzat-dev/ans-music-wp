<?php
/**
 *
 * @package ansmusic
 */

get_header();
?>

<main class="ANS_main-wrapper">
      <section class="ANS_about-banner-wrapper">
        <!-- banner content -->
        <div class="ANS_about-banner-bg">
          <picture>
            <source
              media="(min-width: 768px)"
              srcset="<?php echo get_template_directory_uri();?>/assets/img/about-us-banner-bg.jpg"
            />
            <source
              media="(max-width: 767px)"
              srcset="<?php echo get_template_directory_uri();?>/assets/img/about-us-banner-bg.jpg"
            />
            <img  data-aos="fade-down" src="<?php echo get_template_directory_uri();?>/assets/img/about-us-banner-bg.jpg" alt="Banner image" />
          </picture>

          <div class="banner-overlay"></div>
        </div>

        <!-- banner content -->
        <div class="ANS_about-banner-container ANS_flex flex_column">
          <div
           style="max-width:1000px; overflow: hidden;"
            class="ANS_about-banner-content ANS_container ANS_flex flex_column flex_align_center justify_center"
          >
            <h2 class="fs-4xl">
              <?php the_title(); ?>
            </h2>
          </div>
        </div>
      </section>

      <section class="ANS_blog-wrapper">
        <div class="">
            <?php the_content(); ?>
        </div>
      </section>
    </main>
<?php
get_footer();
