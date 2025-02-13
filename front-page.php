<?php
/**
 * Template Name: Front page
 *
 * @package ansmusic
 */

get_header();
?>


<main class="ANS_main-wrapper">

<!-- test banner starts -->
<section class="ANS_home-banner-wrapper">
 <!-- banner content -->
   <div class="ANS_home-banner-container ANS_flex flex_column">
     <div class="ANS_home-banner-content ANS_container">

        <?php 
$field = get_field('home_our_services_section_title');
echo '<pre>';
print_r($field);
echo '</pre>';

        ?>
     </div>
   </div>
</section>
<!-- test banner  ends-->

<!-- banner related ACF fields -->
    <?php 
    $banner_subtitle = get_field('home_banner_subtitle');
    $banner_title = get_field('home_banner_title');
    $banner_title = get_field('home_banner_title');
    $banner_btn_text = get_field('home_banner_title');
    $banner_btn_text = get_field('home_banner_title');
    ?>
      <section class="ANS_home-banner-wrapper">
        <div class="ANS_home-banner-bg">
          <video autoplay muted loop playsinline>
            <source src="<?php echo get_field('home_banner_bg_video'); ?>" type="video/mp4">
            Your browser does not support the video tag.
            </video>
            <div class="video-overlay"></div>
        </div>
        <!-- banner content -->
          <div class="ANS_home-banner-container ANS_flex flex_column">
            <div class="ANS_home-banner-content ANS_container">
              <h4 data-aos="zoom-in-right" class="fs-2xl"><?php echo get_field('home_banner_subtitle'); ?></h4>
              <h1 data-aos="zoom-in-right" class="fs-5xl">
              <?php echo get_field('home_banner_title'); ?>
              </h1>
              <!-- <p class="fs-md">
             ANS Music, founded in 2022, is a global music distribution and
             publishing company serving independent artists, labels, and
             creators. We offer free digital music and video distribution to
             platforms like Spotify, Apple Music, TikTok, and YouTube. Our
             services include royalty collection, AI-powered mastering, YouTube
             monetization, and VEVO distribution. With industry expertise and
             advanced tools, we help artists retain 100% of their copyrights
             while maximizing their reach.
           </p> -->
              <a
                target="_blank"
                data-aos="zoom-in"
                href="<?php echo get_field('home_banner_button_link'); ?>"
                class="ANS_btn btn-b-yellow fs-md"
              >
              <?php echo get_field('home_banner_button_text'); ?>
              </a>
            </div>
          </div>
      </section>

      <!-- how it works related ACF fields -->
    
      <!-- how it works section -->
      <section class="ANS_how-it-works-wrapper">
        <div class="ANS_how-it-works ANS_container ANS_flex flex_column">
          <!-- <div class="top-text">
            <h2 class="text-fill neon-stroke fs-huge"><span data-text="HOW IT">HOW IT</span> <br /> <span data-text="WORKS">WORKS</span></h2>
          </div> -->

          <!-- how it works steps -->
          <div class="ANS_how-it-works-steps ANS_flex flex_column">
            <!-- step -->
            <?php $first_step = get_field('how-it-works-first-step');?>
            <div class="step-col ANS_flex">
              <div class="icon-box ANS_flex flex_column">
                <div data-aos="fade-up-right" class="icon">
                  <img src="<?php echo !empty($first_step['icon']) ? $first_step['icon'] : get_template_directory_uri().'/assets/icons/upload-music.svg';?>" alt="Steps icon" />
                </div>
                <span data-aos="fade-up" class="steps-line"></span>
              </div>
              <div class="content-box">
                <h3 data-aos="fade-up" class="fs-2xl"><?php echo $first_step['title_']; ?></h3>
                <p data-aos="fade-up"><?php echo $first_step['description'];?></p>
              </div>
            </div>

            <!-- step -->
            <?php $second_step = get_field('how-it-works-second-step');?>
            <div class="step-col ANS_flex">
              <div class="icon-box ANS_flex flex_column">
                <div data-aos="fade-up-right" class="icon">
                <img src="<?php echo !empty($second_step['icon']) ? $second_step['icon'] : get_template_directory_uri().'/assets/icons/release-music.svg';?>" alt="Steps icon" />
                </div>
                <span data-aos="fade-up" class="steps-line"></span>
              </div>
              <div class="content-box">
              <h3 data-aos="fade-up" class="fs-2xl"><?php echo $second_step['title_']; ?></h3>
              <p data-aos="fade-up"><?php echo $second_step['description'];?></p>
              </div>
            </div>

            <!-- step -->
            <?php $third_step = get_field('how-it-works-third-step');?>      
            <div class="step-col ANS_flex">
              <div class="icon-box ANS_flex flex_column">
                <div data-aos="fade-up-right" class="icon">
                <img src="<?php echo !empty($third_step['icon']) ? $third_step['icon'] : get_template_directory_uri().'/assets/icons/get-paid-svg.svg';?>" alt="Steps icon" />
                </div>
                <span data-aos="fade-up" class="steps-line"></span>
              </div>
              <div class="content-box">
              <h3 data-aos="fade-up" class="fs-2xl"><?php echo $third_step['title_']; ?></h3>
              <p data-aos="fade-up"><?php echo $third_step['description'];?></p>
              </div>
            </div>
            <!-- step -->
          </div>
        </div>
      </section>

      <!-- our partners -->
      <section class="ANS_partners-wrap">
        <div
          class="ANS_partners-inner ANS_container ANS_marquee-slider-wrapper"
        >
          <div class="ANS_flex flex_align_center ANS_marquee-slider">
            <img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/apple.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Spotify.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/amazon.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/tidal-b.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Facebook.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/tiktok.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/vevo.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/napster.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/YouTube01.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/resso.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Deezer_logo.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Pandora.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/instagram.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/apple.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Spotify.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/amazon.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/tidal-b.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Facebook.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/tiktok.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/vevo.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/napster.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/YouTube01.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/resso.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Deezer_logo.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Pandora.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/instagram.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/apple.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Spotify.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/amazon.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/tidal-b.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Facebook.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/tiktok.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/vevo.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/napster.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/YouTube01.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/resso.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Deezer_logo.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/Pandora.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            /><img
              src="https://gallery.vision/wp-content/themes/Gallery-Vision/assets/images/instagram.webp"
              alt="icon"
              class="md:!mx-10 mx-5 mt-2 md:!max-h-[38px] max-h-[20px]"
            />
          </div>
        </div>
      </section>

      <!-- our best services -->
      <section class="ANS_key-services-wrap">
        <div class="ANS_key-services-inner ANS_container">
          <div class="top-text ANS_flex flex_column">
            <h2 class="text-fill neon-stroke fs-huge">
            <?php 
            $service_section_title = get_field('home_our_services_section_title');
                if (!empty($service_section_title)) {
                    $words = explode(' ', strtoupper($service_section_title));
                    foreach ($words as $index => $word) {
                        echo '<span data-aos="zoom-in" data-text="' . esc_attr($word) . '">' . esc_html($word) . '</span>';
                        if ($index < count($words) - 1) {
                            echo '<br />';
                        }
                    }
                }
            ?>
            </h2>
          </div>

          <div class="service-info ANS_flex justify_between">

          <!-- left box required ACF fields -->
           <?php 
            $service_left_box = get_field('home_our_services_section_left_box');
           ?>
            <div class="left">
              <h5 data-aos="zoom-in-up" class="fs-sm">
                <?php echo !empty($service_left_box['sub_title']) ? strtoupper($service_left_box['sub_title']) :'';  ?>
              </h5>
              <h4 data-aos="zoom-in-up" class="fs-lg-lh-normal">
              <?php echo !empty($service_left_box['title']) ? $service_left_box['title'] :'';  ?>
              </h4>
              <p data-aos="zoom-in-up">
              <?php echo !empty($service_left_box['section_description']) ? $service_left_box['section_description'] :'';  ?>
              </p>
            </div>

            <!-- right box required ACF fields -->
           <?php 
            $service_right_box = get_field('home_our_services_section_right_box_text');
           ?>
            <div class="right">
              <h2 data-aos="zoom-in" class="fs-4xl">
              <?php echo !empty($service_right_box) ? $service_right_box :'';  ?>
              </h2>
            </div>
          </div>
          <div class="ANS_key-services">
            <!-- service -->
            <div class="ANS_service-card">
              <img
                data-aos="zoom-in"
                src="<?php echo get_template_directory_uri(); ?>/assets/icons/distribution.svg"
                alt="Service icon"
                class="service-icon"
              />
              <h4 data-aos="fade-up" class="fs-xl-lh-md">DISTRIBUTION</h4>
              <p data-aos="fade-up">
                Find out exactly where fans are streaming your tracks so you can
                increase marketing efforts and plan tours in those regions. Get
                direct access to Spotify for Artists...
              </p>

              <a data-aos="fade-up" href="#">MORE ABOUT DISTRIBUTION</a>
            </div>
            <!-- service -->
            <div class="ANS_service-card">
              <img
                data-aos="zoom-in"
                src="<?php echo get_template_directory_uri(); ?>/assets/icons/analytics.svg"
                alt="Service icon"
                class="service-icon"
              />
              <h4 data-aos="fade-up" class="fs-xl-lh-md">ANALYTICS</h4>
              <p data-aos="fade-up">
                Find out exactly where fans are streaming your tracks so you can
                increase marketing efforts and plan tours in those regions. Get
                direct access to Spotify for Artists, Apple...
              </p>

              <a data-aos="fade-up" href="#">MORE ABOUT ANALYTICS</a>
            </div>
            <!-- service -->
            <div class="ANS_service-card">
              <img
                data-aos="zoom-in"
                src="<?php echo get_template_directory_uri(); ?>/assets/icons/monitization.svg"
                alt="Service icon"
                class="service-icon"
              />
              <h4 data-aos="fade-up" class="fs-xl-lh-md">
                YOUTUBE CHANEL MONETIZATION
              </h4>
              <p data-aos="fade-up">
                Join our CMS and boost your revenue with 100% channel security
                from hacking. Protect your content from piracy with our advanced
                Youtube Content ID System...
              </p>

              <a data-aos="fade-up" href="#">MORE ABOUT MONETIZATION</a>
            </div>

            <!-- service -->
            <div class="ANS_service-card">
              <img
                data-aos="zoom-in"
                src="<?php echo get_template_directory_uri(); ?>/assets/icons/book-reader.svg"
                alt="Service icon"
                class="service-icon"
              />
              <h4 data-aos="fade-up" class="fs-xl-lh-md">
                PUBLISHING ADMINISTRATION
              </h4>
              <p data-aos="fade-up">
                Get credited and claim your earnings, with the help of our music
                publishing team! Our team works to get you earnings from the
                compositions you have been integral to creating...
              </p>

              <a data-aos="fade-up" href="#">MORE ABOUT ADMINISTRATION</a>
            </div>
          </div>
        </div>
      </section>


      <!-- new brad and artists section related ACF fields -->
       <?php
       $home_bread_and_artist_section_title = get_field('home_bread_and_artist_section_title');
       $trusted_by_new_breads_and_artists = get_field('trusted_by_new_breads_and_artists');
       $trusted_breads_images = [];
       if(!empty($trusted_by_new_breads_and_artists)){
         $trusted_breeds_and_artists = explode(',', $trusted_by_new_breads_and_artists);
         $trusted_breeds_and_artists = array_map('trim', $trusted_breeds_and_artists);

          // Duplicate the array elements 3 times
         for ($i = 0; $i < 3; $i++) {
          $trusted_breads_images = array_merge($trusted_breads_images, $trusted_breeds_and_artists);
        }
        }
       ?>
      <!-- new breads, artist and partners -->
      <section class="ANS_bread-and-artists ANS_partners-wrap">
        <div class="bread-and-artist-inner ANS_container">
          <h3 data-aos="zoom-in" class="fs-3xl">
            <?php echo!empty($home_bread_and_artist_section_title)? $home_bread_and_artist_section_title :'';?>
          </h3>
          <div class="ANS_marquee-slider-wrapper">
            <div class="ANS_flex flex_align_center ANS_marquee-slider">
            <?php
            foreach ($trusted_breads_images as $breed_img_link) {
              if (!empty($breed_img_link)) {
                printf('<img src="%s" alt="Brand icon" />', $breed_img_link); 
              }
            }
            ?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php
get_footer();
