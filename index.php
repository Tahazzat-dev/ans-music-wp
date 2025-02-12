<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ansmusic
 */

get_header();
?>


<main class="ANS_main-wrapper">
      <section class="ANS_home-banner-wrapper">
 
        <div class="ANS_home-banner-bg">
          <video autoplay muted loop playsinline>
            <source src="<?php echo get_template_directory_uri(); ?>/assets/img/home-banner-gif.mp4" type="video/mp4">
            Your browser does not support the video tag.
            </video>
            <div class="video-overlay"></div>
        </div>
        <!-- banner content -->
          <div class="ANS_home-banner-container ANS_flex flex_column">
            <div class="ANS_home-banner-content ANS_container">
              <h4 data-aos="zoom-in-right" class="fs-2xl">
                Release Your Music
              </h4>
              <h1 data-aos="zoom-in-right" class="fs-5xl">
                We usually deliver your releases within hours
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
                href="https://ansbackstage.com/auth/register"
                class="ANS_btn btn-b-yellow fs-md"
              >
                Start Distributing Now
              </a>
            </div>
          </div>
      </section>

      <!-- how it works section -->
      <section class="ANS_how-it-works-wrapper">
        <div class="ANS_how-it-works ANS_container ANS_flex flex_column">
          <!-- <div class="top-text">
            <h2 class="text-fill neon-stroke fs-huge"><span data-text="HOW IT">HOW IT</span> <br /> <span data-text="WORKS">WORKS</span></h2>
          </div> -->

          <!-- how it works steps -->
          <div class="ANS_how-it-works-steps ANS_flex flex_column">
            <!-- step -->
            <div class="step-col ANS_flex">
              <div class="icon-box ANS_flex flex_column">
                <div data-aos="fade-up-right" class="icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/upload-music.svg" alt="Steps icon" />
                </div>
                <span data-aos="fade-up" class="steps-line"></span>
              </div>
              <div class="content-box">
                <h3 data-aos="fade-up" class="fs-2xl">Upload Your Music</h3>
                <p data-aos="fade-up">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Vero, nostrum. consectetur adipisicing elit. Vero, nostrum.
                  Lorem ipsum dolor sit, amet Lorem ipsum dolor sit, amet
                  consectetur adipisicing elit. Vero, nostrum.
                </p>
              </div>
            </div>
            <!-- step -->

            <div class="step-col ANS_flex">
              <div class="icon-box ANS_flex flex_column">
                <div data-aos="fade-up-right" class="icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/release-music.svg" alt="Steps icon" />
                </div>
                <span data-aos="fade-up" class="steps-line"></span>
              </div>
              <div class="content-box">
                <h3 data-aos="fade-up" class="fs-2xl">
                  We Release Your Music to Stores
                </h3>
                <p data-aos="fade-up">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Vero, nostrum. Lorem ipsum dolor sit, amet consectetur
                  adipisicing elit. Vero, nostrum. Lorem ipsum dolor sit, amet
                  consectetur adipisicing elit. Vero, nostrum.
                </p>
              </div>
            </div>
            <!-- step -->

            <div class="step-col ANS_flex">
              <div class="icon-box ANS_flex flex_column">
                <div data-aos="fade-up-right" class="icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/get-paid-svg.svg" alt="Steps icon" />
                </div>
                <span data-aos="fade-up" class="steps-line"></span>
              </div>
              <div class="content-box">
                <h3 data-aos="fade-up" class="fs-2xl">Get Paid</h3>
                <p data-aos="fade-up">
                  Vero, nostrum. Lorem ipsum dolor sit, Vero, nostrum. amet
                  consectetur adipisicing elit. Lorem ipsum dolor sit, amet
                  consectetur adipisicing elit. Vero, nostrum. Vero, nostrum.
                  amet consectetur adipisicing elit. Lorem ipsum dolor sit, amet
                  consectetur adipisicing elit.
                </p>
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
              <span data-aos="zoom-in" data-text="OUR">OUR</span> <br />
              <span data-aos="zoom-in" data-text="SERVICES">SERVICES</span>
            </h2>
          </div>

          <div class="service-info ANS_flex justify_between">
            <div class="left">
              <h5 data-aos="zoom-in-up" class="fs-sm">
                DIGITAL MARKETING SERVICES
              </h5>
              <h4 data-aos="zoom-in-up" class="fs-lg-lh-normal">
                A team of bright digital marketers with imaginative solutions.
                We help brave, curious & committed brands who want to add a new
                dimension to their digital.
              </h4>
              <p data-aos="zoom-in-up">
                By understanding further about the current position of your
                brand and its digital assets, we can develop a strategy that
                provides clear direction and deliverables. From here, we can
                build, deploy and scale your strategy through best practice ad
                campaign management. Learn, walk, run.
              </p>
            </div>
            <div class="right">
              <h2 data-aos="zoom-in" class="fs-4xl">
                Full-service digital capabilities from end to end.
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

      <!-- new breads, artist and partners -->
      <section class="ANS_bread-and-artists ANS_partners-wrap">
        <div class="bread-and-artist-inner ANS_container">
          <h3 data-aos="zoom-in" class="fs-3xl">
            Trusted by a new breed of artists, labels and music businesses
          </h3>
          <div class="ANS_marquee-slider-wrapper">
            <div class="ANS_flex flex_align_center ANS_marquee-slider">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tmc.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/torongo.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/entertainment.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mb-gallery.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/u-music.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/digital.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Rongon-Music.png" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arh-music.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dream-studio.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/and-many-more.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tmc.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/torongo.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/entertainment.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mb-gallery.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/u-music.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/digital.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Rongon-Music.png" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arh-music.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dream-studio.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/and-many-more.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tmc.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/torongo.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/entertainment.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mb-gallery.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/u-music.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/digital.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Rongon-Music.png" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arh-music.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dream-studio.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/and-many-more.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tmc.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/torongo.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/entertainment.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mb-gallery.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/u-music.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/digital.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Rongon-Music.png" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arh-music.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dream-studio.jpg" alt="Brand icon" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/and-many-more.jpg" alt="Brand icon" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php
get_footer();
