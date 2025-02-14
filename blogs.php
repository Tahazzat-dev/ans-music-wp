<?php
/**
 * Template Name: Blogs page
 *
 * @package ansmusic
 */

get_header();
?>

<main class="ANS_main-wrapper">


<?php
// Blogs page customization related ACF fields

$banner_large_background = get_field('blogs_banner_large_background');
$banner_small_background = get_field('blogs_banner_small_background');
$banner_title = get_field('blogs_banner_title');
$banner_subtitle = get_field('blogs_banner_subtitle');
?>
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
      
      
      <!-- industry insights -->
      <?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 6,
    'category_name' => 'industry-insights',
    'orderby' => 'date',
    'order' => 'ASC',
  );

  $industry_insights = new WP_Query($args);
  echo "<pre>";
  print_r($industry_insights);
  echo "</pre>";
  ?>
       <section class="ANS_blog-section-wrap">
        <div class="ANS_blog-section-inner ANS_container">
            <div class="top-text ANS_flex flex_align_center justify_between">
                <h3 class="fs-4xl">Industry insights</h3> <a class="ANS_btn btn-b-yellow nowrap" href="#">View All</a>
            </div>

            <div class="ANS_blogs">
                <!-- blog -->
                <div class="blog">
                    <div class="blog-thum">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                    </div>
                    <div class="content">
                        <h4 class="fs-xl">How to Get Your First 1,000 Streams on Spotify</h4>
                    <p>Jan 16, 2025</p>
                    <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                    </div>
                </div>
                <!-- blog -->
                <div class="blog">
                    <div class="blog-thum">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                    </div>
                    <div class="content">
                        <h4 class="fs-xl">4 Steps for Artists and Labels to Prepare for the U.S. TikTok Ban</h4>
                    <p>Jan 16, 2025</p>
                    <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                    </div>
                </div>
                <!-- blog -->
                <div class="blog">
                    <div class="blog-thum">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                    </div>
                    <div class="content">
                        <h4 class="fs-xl">4 Steps for Artists and Labels to Prepare for the U.S. TikTok Ban</h4>
                    <p>Jan 16, 2025</p>
                    <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                    </div>
                </div>
                <!-- blog -->
                <div class="blog">
                    <div class="blog-thum">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                    </div>
                    <div class="content">
                        <h4 class="fs-xl">4 Steps for Artists and Labels to Prepare for the U.S. TikTok Ban</h4>
                    <p>Jan 16, 2025</p>
                    <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                    </div>
                </div>
                <!-- blog -->
                <div class="blog">
                    <div class="blog-thum">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                    </div>
                    <div class="content">
                        <h4 class="fs-xl">4 Steps for Artists and Labels to Prepare for the U.S. TikTok Ban</h4>
                    <p>Jan 16, 2025</p>
                    <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                    </div>
                </div>
                <!-- blog -->
                <div class="blog">
                    <div class="blog-thum">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                    </div>
                    <div class="content">
                        <h4 class="fs-xl">4 Steps for Artists and Labels to Prepare for the U.S. TikTok Ban</h4>
                    <p>Jan 16, 2025</p>
                    <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                    </div>
                </div>
                <!-- blog -->
            </div>
        </div>
       </section>
           <!-- ANS Music updates -->
           <section class="ANS_blog-section-wrap">
            <div class="ANS_blog-section-inner ANS_container">
                <div class="top-text ANS_flex flex_align_center justify_between">
                    <h3 class="fs-4xl">ANS Music updates</h3> <a class="ANS_btn btn-b-yellow nowrap" href="#">View All</a>
                </div>
    
                <div class="ANS_blogs">
                    <!-- blog -->
                    <div class="blog">
                        <div class="blog-thum">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                        </div>
                        <div class="content">
                            <h4 class="fs-xl">4 Steps for Artists and Labels to Prepare for the U.S. TikTok Ban</h4>
                        <p>Jan 16, 2025</p>
                        <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                        </div>
                    </div>
                    <!-- blog -->
                    <div class="blog">
                        <div class="blog-thum">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                        </div>
                        <div class="content">
                            <h4 class="fs-xl">4 Steps for Artists and Labels to Prepare for the U.S. TikTok Ban</h4>
                        <p>Jan 16, 2025</p>
                        <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                        </div>
                    </div>
                    <!-- blog -->
                    <div class="blog">
                        <div class="blog-thum">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                        </div>
                        <div class="content">
                            <h4 class="fs-xl">4 Steps for Artists and Labels to Prepare for the U.S. TikTok Ban</h4>
                        <p>Jan 16, 2025</p>
                        <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                        </div>
                    </div>
                    <!-- blog -->
                    <div class="blog">
                        <div class="blog-thum">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                        </div>
                        <div class="content">
                            <h4 class="fs-xl">4 Steps for Artists and Labels to Prepare for the U.S. TikTok Ban</h4>
                        <p>Jan 16, 2025</p>
                        <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                        </div>
                    </div>
                    <!-- blog -->
                    <div class="blog">
                        <div class="blog-thum">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                        </div>
                        <div class="content">
                            <h4 class="fs-xl">4 Steps for Artists and Labels to Prepare for the U.S. TikTok Ban</h4>
                        <p>Jan 16, 2025</p>
                        <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                        </div>
                    </div>
                    <!-- blog -->
                    <div class="blog">
                        <div class="blog-thum">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                        </div>
                        <div class="content">
                            <h4 class="fs-xl">4 Steps for Artists and Labels to Prepare for the U.S. TikTok Ban</h4>
                        <p>Jan 16, 2025</p>
                        <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                        </div>
                    </div>   
                    <!-- blog -->
                </div>
            </div>
           </section>

             <!-- ANS Music updates -->
             <section class="ANS_blog-section-wrap">
                <div class="ANS_blog-section-inner ANS_container">
                    <div class="top-text ANS_flex flex_align_center justify_between">
                        <h3 class="fs-4xl">Featured artists & success stories</h3> <a class="ANS_btn btn-b-yellow nowrap" href="#">View All</a>
                    </div>
        
                    <div class="ANS_blogs">
                        <!-- blog -->
                        <div class="blog">
                            <div class="blog-thum">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                            </div>
                            <div class="content">
                                <h4 class="fs-xl">4 Steps for Artists and Labels to Prepare for the U.S. TikTok Ban</h4>
                            <p>Jan 16, 2025</p>
                            <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                            </div>
                        </div>
                        <!-- blog -->
                        <div class="blog">
                            <div class="blog-thum">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                            </div>
                            <div class="content">
                                <h4 class="fs-xl">4 Steps for Artists and Labels to Prepare for the U.S. TikTok Ban</h4>
                            <p>Jan 16, 2025</p>
                            <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                            </div>
                        </div>
                        <!-- blog -->
                        <div class="blog">
                            <div class="blog-thum">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                            </div>
                            <div class="content">
                                <h4 class="fs-xl">4 Steps for Artists and Labels to Prepare for the U.S. TikTok Ban</h4>
                            <p>Jan 16, 2025</p>
                            <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                            </div>
                        </div>
                        <!-- blog -->
                        <div class="blog">
                            <div class="blog-thum">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                            </div>
                            <div class="content">
                                <h4 class="fs-xl">4 Steps for Artists and Labels to Prepare for the U.S. TikTok Ban</h4>
                            <p>Jan 16, 2025</p>
                            <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                            </div>
                        </div>
                        <!-- blog -->
                        <div class="blog">
                            <div class="blog-thum">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                            </div>
                            <div class="content">
                                <h4 class="fs-xl">4 Steps for Artists and Labels to Prepare for the U.S. TikTok Ban</h4>
                            <p>Jan 16, 2025</p>
                            <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                            </div>
                        </div>
                        <!-- blog -->
                        <div class="blog">
                            <div class="blog-thum">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decentralize-the-music-industry.avif" alt="Blog thumnail">
                            </div>
                            <div class="content">
                                <h4 class="fs-xl">4 Steps for Artists and Labels to Prepare for the U.S. TikTok Ban</h4>
                            <p>Jan 16, 2025</p>
                            <a class="ANS_btn btn-b-yellow" href="#">Read More</a>
                            </div>
                        </div>
                        <!-- blog -->
                    </div>
                </div>
               </section>

                 <!-- different stores -->
      <section class="ANS_different-stores-wrap">
        <div class="ANS_different-stores-inner ANS_container">
            <div class="top-text">
                <h3 class="fs-4xl">100+ Different Digital Stores</h3>
              <p class="">
                ANS Music is partnered with 100+ digital music services and counting, available across 50 countries and territories globally. Sell your music on every major digital store, like iTunes, Spotify, Apple Music, Deezer, Amazon, and more.
              </p>
            </div>

            <div class="slider_wrap">
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
            </div>
        </div>
       </section>
    </main>
<?php
get_footer();
