<?php
/**
 * Template Name: Next label distribution page
 *
 * @package ansmusic
 */

get_header();
?>

<?php
// about us page customization related ACF fields

$banner_large_background = get_field('next_label_distribution_banner_large_background');
$banner_small_background = get_field('next_label_distribution_banner_large_background');
$banner_title_top = get_field('next_label_distribution_banner_title_top');
$banner_title_bottom = get_field('next_label_distribution_banner_title_bottom');
$banner_subtitle = get_field('next_label_distribution_banner_subtitle');
?>
 <main class="ANS_main-wrapper">
      <section class="ANS_about-banner-wrapper ANS_distribution-partners-banner-wrap">
        <!-- banner content -->
        <div class="ANS_about-banner-bg">
          <picture>
            <source
              media="(min-width: 768px)"
              srcset="<?php echo $banner_large_background; ?>"
            />
            <source
              media="(max-width: 767px)"
              srcset="<?php echo $banner_small_background; ?>"
            />
            <img  data-aos="fade-down" src="<?php echo $banner_large_background; ?>" alt="Banner image" />
          </picture>

          <div class="banner-overlay"></div>
        </div>

        <!-- banner content -->
        <div class="ANS_about-banner-container ANS_flex flex_column ">
          <div
            class="ANS_about-banner-content ANS_container ANS_flex flex_column flex_align_center justify_center"
          >
            <h2 class="text-center text-fill neon-stroke fs-6xl">
              <span data-aos="zoom-in" data-text="<?php echo strtoupper($banner_title_top); ?>"><?php echo strtoupper($banner_title_top); ?></span> <br />
              <span data-aos="zoom-in" data-text="<?php echo strtoupper($banner_title_bottom); ?>"><?php echo strtoupper($banner_title_bottom); ?></span>
            </h2>
            <h3 data-aos="zoom-in" class="fs-3xl"><?php echo strtoupper($banner_subtitle); ?></h3>
          </div>
        </div>
      </section>


      <!-- services -->

      <?php
        $next_distribution_services = get_field('next_label_distribution_features');
      ?>

      <section class="ANS_next-label-distribution-wrap">
          <div class="ANS_next-label-distribution-inner ANS_flex ANS_container flex_column">
            <?php 
            foreach ($next_distribution_services as $distribution):
              ?>
                <!-- distribution info -->
           <div class="distribution-container">
             <h3 data-aos="zoom-in" class="fs-4xl"><?php echo $distribution['title'];?></h3>
             <p data-aos="zoom-in" class="fs-base"><?php echo $distribution['description'];?></p>

             <div class="section-thum">
                 <img data-aos="zoom-in" src="<?php echo $distribution['feature_thum'];?>" alt="section thumnail">
             </div>

              <div class="key-features">
                <h4 data-aos="fade-up" class="fs-3xl feature-title">Key Features</h4>

                <div class="features">
                  <?php
                   if(!empty($distribution['key_features'])):
                    foreach($distribution['key_features'] as $key_feature):
                      ?>
                      <!-- feature card -->
                    <div data-aos="fade-up" class="feature-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32" fill="none" data-v-5ebbf696=""><path d="M16 0L20.3215 11.6785L32 16L20.3215 20.3215L16 32L11.6785 20.3215L0 16L11.6785 11.6785L16 0Z" fill="#EBD510" data-v-5ebbf696=""></path></svg>
                    <h4 class="fs-xl"><?php echo $key_feature['title'] ?></h4>
                    <p><?php echo $key_feature['description'] ?></p>
                    </div>
                    <!-- feature card -->
                    <?php 
                    endforeach;
                   endif; 
                   ?>
                </div>
              </div>
           </div>
           <!-- distribution info -->
            <?php endforeach;?>
          </div>
      </section>


       <!-- our partners -->
  <section class="ANS_partners-wrap">
    <?php get_template_part('template-parts/content', 'partners'); ?>
  </section>
  <section class="ANS_partners-wrap">
  </section>

      
    </main>

<?php
get_footer();
