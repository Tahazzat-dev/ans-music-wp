<?php
/**
 * Template Name: Distribution Partners page
 *
 * @package ansmusic
 */

get_header();
?>

<?php
// about us page customization related ACF fields

$banner_large_background = get_field('about_us_banner_large_background');
$banner_small_background = get_field('about_us_banner_small_background');
$banner_title = get_field('about_us_banner_title');
$banner_subtitle = get_field('about_us_banner_subtitle');
?>
 <main class="ANS_main-wrapper">

 <!-- test banner -->
      <section class="ANS_about-banner-wrapper">
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
        <div class="ANS_about-banner-container ANS_flex flex_column">
          <div
            class="ANS_about-banner-content ANS_container ANS_flex flex_column flex_align_center justify_center"
          >
            <h2 class="text-fill neon-stroke fs-6xl">
              <span data-aos="zoom-in" data-text="<?php echo strtoupper($banner_title); ?>"><?php echo strtoupper($banner_title); ?></span>
            </h2>
            <h3 data-aos="zoom-in" class="fs-3xl"><?php echo strtoupper($banner_subtitle); ?></h3>
          </div>
        </div>
      </section>


      <!-- distribution partners -->
       <div class="ANS_distribution-partners-wrap">
           <div class="ANS_distribution-partners-inner ANS_container">
                <h2 class="fs-6xl text-fill neon-stroke"  >
                    <span data-text="OUR">OUR</span> <br />
                    <span data-text=" PARTNERS"> PARTNERS</span>
                </h2>
                <p class="fs-md">Platforms to which you can distribute your music with ANS Music</p>

                <div class="distribution-partners">

                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">Amazon</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/anghami.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">Anghami</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/audiomack.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">Audiomack</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="iTunes">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
           </div>
           </div>

          
       </div>
   
    </main>

<?php
get_footer();
