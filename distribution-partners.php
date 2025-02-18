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

$banner_large_background = get_field('distribution_partners_banner_large_background');
$banner_small_background = get_field('distribution_partners_banner_small_background');
$banner_title = get_field('distribution_partners_banner_title');
$banner_subtitle = get_field('distribution_partners_banner_subtitle');
?>
 <main class="ANS_main-wrapper">

 <!-- test banner -->
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
        <div class="ANS_about-banner-container ANS_flex flex_column">
          <div
            class="ANS_about-banner-content ANS_container ANS_flex flex_column flex_align_center justify_center"
          >
            <h2 class="text-center text-fill neon-stroke fs-6xl">
            <?php
          if (!empty($banner_title)) {
            $words = explode(' ', strtoupper($banner_title));
            foreach ($words as $index => $word) {
              echo '<span data-aos="zoom-in" data-text="' . esc_attr($word) . '">' . esc_html($word) . '</span>';
              if ($index < count($words) - 1) {
                echo '<br />';
              }
            }
          }
          ?>
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
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/amazon.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Amazon</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/anghami.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Anghami</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/audiomack.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Audiomack</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/awa.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">AWA</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/boomplay.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Boomplay</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/deezer.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Deezer</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/facebook.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Facebook</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/flo.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Flo</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/hungama.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Hungama</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/iheart.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">iHeartRadio</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/imusica.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">iMusica</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/itunes.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">iTunes</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/jaxsta.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Jaxta</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/joox.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">JOOX</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/kkbox.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">KKBOX</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/lickd.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">LICKD</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/mixcloud.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Mixcloud</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/napster.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Napster</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/netease.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">NetEase</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/nuuday.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Nuuday</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/pandora.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Pandora</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/peloton.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Peloton</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/pretzel.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Pretzel</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/saavn.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Jiosaavn</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/shazam.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Shazam</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/snap.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Snapchat</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/soundcloud.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Soundcloud</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/spotify.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Spotify</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/tencent.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Tencent</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/tidal.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Tidal</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/tiktok.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">TikTok</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/trebel.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Trebel</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/tune-global.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">Tune Global</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/youtube-music.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">YouTube Music</h3>
                </div>
                <!-- card -->
                <div class="card">
                      <div class="glow"></div>
                    <img src="<?php echo get_template_directory_uri(). '/assets/dsplogo/youtube.svg';?>" alt="partners icon">
                    <h3 class="fs-xl">YouTube</h3>
                </div>
                <!-- card -->
           </div>
           </div>

          
       </div>
   
    </main>

<?php
get_footer();
