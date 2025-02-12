<?php
/**
 * Template Name: Services page
 *
 * @package ansmusic
 */

get_header();
?>
   
   <main class="ANS_main-wrapper">
      <!-- banner -->
      <section class="ANS_service-banner-wrapper">
        <!-- banner content -->
        <div class="ANS_service-banner-bg">
          <picture>
            <source
              media="(min-width: 768px)"
              srcset="assets/img/about-us-banner-bg.jpg"
            />
            <source
              media="(max-width: 767px)"
              srcset="assets/img/about-us-banner-bg.jpg"
            />
            <img src="assets/img/about-us-banner-bg.jpg" alt="Banner image" />
          </picture>

          <div class="banner-overlay"></div>
        </div>

        <!-- banner content -->
        <div class="ANS_service-banner-container ANS_flex flex_column">
          <div
            class="ANS_service-banner-content ANS_container ANS_flex flex_column flex_align_center justify_center"
          >
            <h2 class="text-fill neon-stroke fs-6xl">
              <span data-aos="zoom-in" data-text="OUR SERVICE">OUR SERVICE</span>
            </h2>
            <h3 data-aos="fade-up" class="fs-3xl">From Studio to Streaming, We Make It Happen</h3>
          </div>
        </div>
      </section>

      <!-- music distribution guide -->
      <section class="ANS_distribution-plartform-wrap">
        <div class="ANS_distribution-plartform-inner ANS_container">
          <div class="top-text">
            <h2 class="fs-5xl">
              <span data-aos="fade-up" data-text="GET READY">GET READY</span><br /><span
              data-aos="fade-up"
                data-text="TO SELL YOUR MUSIC"
                >TO SELL YOUR MUSIC</span
              >
            </h2>
            <!-- <h2 class="fs-5xl text-fill neon-stroke"><span data-text="GET READY">GET READY</span><br /><span data-text="TO SELL YOUR MUSIC">TO SELL YOUR MUSIC</span></h2> -->
            <h3 data-aos="fade-up" class="fs-md">
              Distribute your music, maximize your reach and earn more. No
              matter what stage you’re at in your career, ANS Music’s got your
              back.
            </h3>
          </div>
          <div class="ANS_global-plartforms ANS_flex">
            <div class="card-box">
              <img
              data-aos="zoom-in"
                src="assets/img/you-tube-plartform.webp"
                alt="Global plartform"
              />
              <h4 data-aos="fade-up" class="fs-xl">YouTube</h4>
              <p data-aos="fade-up">
                Collect money every time someone uses your music on YouTube.
              </p>
            </div>
            <!-- divider -->
            <div class="divider"></div>
            <!-- divider -->
            <div class="card-box">
              <img
              data-aos="zoom-in"
              src="assets/img/meta-plartform.png" alt="Global plartform" />
              <h4 data-aos="fade-up" class="fs-xl">Facebook</h4>
              <p data-aos="fade-up">
                Get paid for allowing Facebook to use your music across their
                platforms.
              </p>
            </div>
            <!-- divider -->
            <div class="divider"></div>
            <!-- divider -->
            <div class="card-box">
              <img
              data-aos="zoom-in"
                src="assets/img/tiktok-plartform.png"
                alt="Global plartform"
              />
              <h4 data-aos="fade-up" class="fs-xl">TikTok</h4>
              <p data-aos="fade-up">
                Get paid for allowing TikTok to use your music across their
                platforms.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ANS_services -->
      <section class="ANS_service-wrapper ANS_flex flex_column">
        <!-- ANS_services -->
        <div
          class="ANS_service-container ANS_container ANS_flex flex_align_center justify_between"
        >
          <div class="content ANS_flex flex_column">
            <h3 data-aos="fade-up" class="fs-4xl">Global Music Distribution</h3>
            <p data-aos="fade-up" class="check-list">
              We’re partnered with hundreds of global music distribution
              companies to share your music in 200+ countries.
            </p>
            <p data-aos="fade-up" class="check-list">
              You release awesome music, and we distribute it everywhere —
              simple.
            </p>

            <a data-aos="fade-up" href="#" class="ANS_btn btn-b-yellow">Learn More</a>
          </div>
          <div class="section-thum">
            <img
            data-aos="fade-down"
              src="assets/img/global-distribution.webp"
              alt="Music plartform image"
            />
          </div>
        </div>
        <!-- ANS_services -->
        <div
          class="ANS_service-container ANS_container ANS_flex flex_align_center justify_between"
        >
          <div class="section-thum">
            <img
            data-aos="fade-down"
              src="assets/img/top-tier-royalties.png"
              alt="Music plartform image"
            />
          </div>
          <div class="content ANS_flex flex_column">
            <h3 data-aos="fade-up" class="fs-4xl">Top-Tier Royalties</h3>
            <p data-aos="fade-up" class="check-list">
              We’re partnered with hundreds of global music distribution
              companies to share your music in 200+ countries.
            </p>
            <p data-aos="fade-up" class="check-list">
              You release awesome music, and we distribute it everywhere —
              simple.
            </p>

            <a data-aos="fade-up" href="#" class="ANS_btn btn-b-yellow">Learn More</a>
          </div>
        </div>
        <!-- ANS_services -->
        <div
          class="ANS_service-container ANS_container ANS_flex flex_align_center justify_between"
        >
          <div class="content ANS_flex flex_column">
            <h3 data-aos="fade-up" class="fs-4xl">Caller Tune Integration</h3>
            <p data-aos="fade-up" class="check-list">
              We’re partnered with hundreds of global music distribution
              companies to share your music in 200+ countries.
            </p>
            <p data-aos="fade-up" class="check-list">
              You release awesome music, and we distribute it everywhere —
              simple.
            </p>

            <a data-aos="fade-up" href="#" class="ANS_btn btn-b-yellow">Learn More</a>
          </div>
          <div class="section-thum">
            <img
            data-aos="fade-down"
              src="assets/img/caller-tune-integration.png"
              alt="Music plartform image"
            />
          </div>
        </div>
        <!-- ANS_services -->
        <div
          class="ANS_service-container ANS_container ANS_flex flex_align_center justify_between"
        >
          <div class="section-thum">
            <img
            data-aos="fade-down"
              src="assets/img/you-tube-monitization.png"
              alt="Music plartform image"
            />
          </div>
          <div class="content ANS_flex flex_column">
            <h3 data-aos="fade-up" class="fs-4xl">YouTube Monetization</h3>
            <p  data-aos="fade-up" class="check-list">
              We’re partnered with hundreds of global music distribution
              companies to share your music in 200+ countries.
            </p>
            <p data-aos="fade-up" class="check-list">
              You release awesome music, and we distribute it everywhere —
              simple.
            </p>

            <a data-aos="fade-up" href="#" class="ANS_btn btn-b-yellow">Learn More</a>
          </div>
        </div>
        <!-- ANS_services -->
        <div
          class="ANS_service-container ANS_container ANS_flex flex_align_center justify_between"
        >
          <div class="content ANS_flex flex_column">
            <h3 data-aos="fade-up" class="fs-4xl">AI Mastering</h3>
            <p data-aos="fade-up" class="check-list">
              We’re partnered with hundreds of global music distribution
              companies to share your music in 200+ countries.
            </p>
            <p data-aos="fade-up" class="check-list">
              You release awesome music, and we distribute it everywhere —
              simple.
            </p>

            <a data-aos="fade-up" href="#" class="ANS_btn btn-b-yellow">Learn More</a>
          </div>
          <div class="section-thum">
            <img
            data-aos="fade-down"              
            src="assets/img/ai-mastering.png"
              alt="Music plartform image"
            />
          </div>
        </div>
        <!-- ANS_services -->
        <div
          class="ANS_service-container ANS_container ANS_flex flex_align_center justify_between"
        >
          <div class="section-thum">
            <img
            data-aos="fade-down"              
              src="assets/img/technology-music-distribution.png"
              alt="Music plartform image"
            />
          </div>
          <div class="content ANS_flex flex_column">
            <h3 data-aos="fade-up" class="fs-4xl">Technology</h3>
            <p data-aos="fade-up" class="check-list">
              We’re partnered with hundreds of global music distribution
              companies to share your music in 200+ countries.
            </p>
            <p data-aos="fade-up" class="check-list">
              You release awesome music, and we distribute it everywhere —
              simple.
            </p>

            <a data-aos="fade-up" href="#" class="ANS_btn btn-b-yellow">Learn More</a>
          </div>
        </div>
        <!-- ANS_services -->
        <div
          class="ANS_service-container ANS_container ANS_flex flex_align_center justify_between"
        >
          <div class="content ANS_flex flex_column">
            <h3 data-aos="fade-up" class="fs-4xl">Analytics</h3>
            <p data-aos="fade-up" class="check-list">
              We’re partnered with hundreds of global music distribution
              companies to share your music in 200+ countries.
            </p>
            <p data-aos="fade-up" class="check-list">
              You release awesome music, and we distribute it everywhere —
              simple.
            </p>

            <a data-aos="fade-up" href="#" class="ANS_btn btn-b-yellow">Learn More</a>
          </div>
          <div class="section-thum">
            <img
            data-aos="fade-down"              
              src="assets/img/music-analytics.png"
              alt="Music plartform image"
            />
          </div>
        </div>

        <!-- ANS_services -->
        <div
          class="ANS_service-container ANS_container ANS_flex flex_align_center justify_between"
        >
          <div class="section-thum">
            <img
            data-aos="fade-down"              
              src="assets/img/integrated-dsp.png"
              alt="Music plartform image"
            />
          </div>
          <div class="content ANS_flex flex_column">
            <h3 data-aos="fade-up" class="fs-4xl">Integrated DSPs</h3>
            <p data-aos="fade-up" class="check-list">
              We’re partnered with hundreds of global music distribution
              companies to share your music in 200+ countries.
            </p>
            <p data-aos="fade-up" class="check-list">
              You release awesome music, and we distribute it everywhere —
              simple.
            </p>

            <a data-aos="fade-up" href="#" class="ANS_btn btn-b-yellow">Learn More</a>
          </div>
        </div>

        <!-- ANS_services -->
        <div
          class="ANS_service-container ANS_container ANS_flex flex_align_center justify_between"
        >
          <div class="content ANS_flex flex_column">
            <h3 data-aos="fade-up" class="fs-4xl">ANS Publishing</h3>
            <p data-aos="fade-up" class="check-list">
              We’re partnered with hundreds of global music distribution
              companies to share your music in 200+ countries.
            </p>
            <p data-aos="fade-up" class="check-list">
              You release awesome music, and we distribute it everywhere —
              simple.
            </p>

            <a data-aos="fade-up" href="#" class="ANS_btn btn-b-yellow">Learn More</a>
          </div>
          <div class="section-thum">
            <img
            data-aos="fade-down"              
              src="assets/img/ans-publishing.png"
              alt="Music plartform image"
            />
          </div>
        </div>

        <!-- ANS_services -->
        <div
          class="ANS_service-container ANS_container ANS_flex flex_align_center justify_between"
        >
          <div class="section-thum">
            <img
            data-aos="fade-down"              
              src="assets/img/video-distributing.png"
              alt="Music plartform image"
            />
          </div>
          <div class="content ANS_flex flex_column">
            <h3 data-aos="fade-up" class="fs-4xl">Video Distribution</h3>
            <p data-aos="fade-up" class="check-list">
              We’re partnered with hundreds of global music distribution
              companies to share your music in 200+ countries.
            </p>
            <p data-aos="fade-up" class="check-list">
              You release awesome music, and we distribute it everywhere —
              simple.
            </p>

            <a data-aos="fade-up" href="#" class="ANS_btn btn-b-yellow">Learn More</a>
          </div>
        </div>

        <!-- ANS_services -->
        <div
          class="ANS_service-container ANS_container ANS_flex flex_align_center justify_between"
        >
          <div class="content ANS_flex flex_column">
            <h3 data-aos="fade-up" class="fs-4xl">VEVO Distribution</h3>
            <p data-aos="fade-up" class="check-list">
              We’re partnered with hundreds of global music distribution
              companies to share your music in 200+ countries.
            </p>
            <p data-aos="fade-up" class="check-list">
              You release awesome music, and we distribute it everywhere —
              simple.
            </p>

            <a data-aos="fade-up" href="#" class="ANS_btn btn-b-yellow">Learn More</a>
          </div>
          <div class="section-thum">
            <img
            data-aos="fade-down"              
              src="assets/img/vevo-distribution.png"
              alt="Music plartform image"
            />
          </div>
        </div>
      </section>
      <!-- ANS_services -->

      <!-- different stores -->
      <section class="ANS_different-stores-wrap">
        <div class="ANS_different-stores-inner ANS_container">
          <div class="top-text">
            <h3 data-aos="fade-up" class="fs-4xl">100+ Different Digital Stores</h3>
            <p data-aos="fade-up" class="">
              ANS Music is partnered with 100+ digital music services and
              counting, available across 50 countries and territories globally.
              Sell your music on every major digital store, like iTunes,
              Spotify, Apple Music, Deezer, Amazon, and more.
            </p   >
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
