<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ansmusic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>



<?php
/*theme mode variables for dynamic elements*/
$ansmusic_header_logo = get_theme_mod( 'ansmusic_header_logo', '');
$ansmusic_sidebar_logo = get_theme_mod( 'ansmusic_sidebar_logo', '');
$ansmusic_office_address_1 = get_theme_mod( 'ansmusic_office_address_1', '');
$ansmusic_office_address_2 = get_theme_mod( 'ansmusic_office_address_2', '');
$ansmusic_office_info_email = get_theme_mod( 'ansmusic_office_info_email', '');
$ansmusic_office_support_email = get_theme_mod( 'ansmusic_office_support_email', '');
$ansmusic_office_contact_email = get_theme_mod( 'ansmusic_office_contact_email', '');
$ansmusic_office_opening_time = get_theme_mod( 'ansmusic_office_opening_time', '');
$ansmusic_phone_number = get_theme_mod( 'ansmusic_phone_number', '');
$ansmusic_social_instagram = get_theme_mod( 'ansmusic_social_instagram', '');
$ansmusic_social_linkedin = get_theme_mod( 'ansmusic_social_linkedin', '');
$ansmusic_social_youtube = get_theme_mod( 'ansmusic_social_youtube', '');
?>
<header class="ANS_header">
      <div class="ANS_header-inner ANS_flex flex_align_center justify_between">
        <div class="nav-logo-wrap">
          <a href="<?php echo home_url(); ?>" class="site-nav-logo">
            <img src="<?php echo $ansmusic_header_logo; ?>" alt="Site logo" />
          </a>
        </div>


        <!-- desktop navbar -->
        <nav class="ANS_nav">
          <ul class="ANS_flex flex_align_center">
            <li data-aos="zoom-in-down" class="home-link">
              <a class="active fs-base" href="<?php echo home_url(); ?>">HOME</a>
            </li>
            <li data-aos="zoom-in-down">
              <a class="fs-base" href="<?php echo home_url(); ?>/services.html">SERVICE</a>
            </li>
            <li data-aos="zoom-in-down">
              <a class="fs-base" href="#">WHY ANS MUSIC</a>
            </li>
            <li data-aos="zoom-in-down">
              <a
                class="fs-base"
                target="_blank"
                href="https://ansbackstage.com/auth/register"
                >DISTRIBUTION SIGNUP</a
              >
            </li>
            <li data-aos="zoom-in-down" class="contact-link">
              <a class="fs-base" href="<?php echo home_url(); ?>/contact-us.html">CONTACT</a>
            </li>
            <li data-aos="zoom-in-down" class="about-link">
              <a class="fs-base" href="<?php echo home_url(); ?>/about-us.html">ABOUT</a>
            </li>
            <li data-aos="fade-left">
              <a
                class="fs-base ANS_btn btn-b-yellow"
                target="_blank"
                href="https://auth.ansmusiclimited.com/oauth2/authorize?client_id=85a1ac4c-dce9-4f0c-9543-b99d375c707c&response_type=code&redirect_uri=https://backstage.ansmusiclimited.com/sign-in&env=prod&locale=en&from=https://backstage.ansmusiclimited.com"
                >CLIENT LOGIN</a
              >
            </li>
          </ul>
        </nav>

        <!-- mobile hamberger menu -->
        <button class="ANS_hamburger-menu mobi open">
          <div class="bar-1"></div>
          <div class="bar-2"></div>
          <div class="bar-3"></div>
        </button>
      </div>
    </header>

    <!-- sidebar starts -->
    <aside class="ANS_sidebar">
      <div class="sidebar-toggle-container ANS_flex flex_column">
        <div class="ANS_sidebar-logo-wrap small hide">
          <a href="<?php echo home_url(); ?>/" id="sidebar-small-logo" class="top-small-logo">
            <img src="<?php echo $ansmusic_sidebar_logo; ?>" alt="site logo" />
          </a>
        </div>
        <button class="sidebar-toggler-btn">
          <span></span> <span></span> <span></span> <span></span>
        </button>

        <div class="active-page-info">
          <span class="info">
          <?php
            if (is_front_page()) {
                echo 'Home'; 
            } elseif (is_page()) {
                echo get_the_title();
            } elseif (is_single()) {
                echo get_the_title();
            } else {
                echo 'INTRO'; 
            }
        ?>
          </span>
        </div>
      </div>



      <!-- sidbar drawer -->
      <div class="sidebar-drawer-wrap">
        <div class="sidebar-inner ANS_flex">
          <!-- menu column -->
          <div class="menu-col ANS_flex flex_column justify_center">
            <div class="sidebar-nav-logo-wrap">
              <a class="site-nav-logo">
                <img src="<?php echo $ansmusic_header_logo; ?>" alt="Site logo" />
              </a>
            </div>
            <ul class="ANS_menu ANS_flex flex_column">
              <li>
                <a
                  class="sidenav-link active fill-fade-in fill-clr-white"
                  data-text="HOME"
                  href="#"
                  >HOME</a
                >
              </li>
              <li>
                <a
                  class="sidenav-link fill-fade-in fill-clr-white"
                  data-text="SERVICE"
                  href="<?php echo home_url(); ?>/services.html"
                  >SERVICE</a
                >
              </li>
              <li>
                <a
                  class="sidenav-link fill-fade-in fill-clr-white"
                  data-text="WHY ANS MUSIC"
                  href="#"
                  >WHY ANS MUSIC</a
                >
              </li>
              <li>
                <a
                  class="sidenav-link fill-fade-in fill-clr-white"
                  data-text="DISTRIBUTION SIGNUP"
                  href="https://ansbackstage.com/auth/register"
                  >DISTRIBUTION SIGNUP</a
                >
              </li>
              <li>
                <a
                  class="sidenav-link fill-fade-in fill-clr-white"
                  data-text="CONTACT"
                  href="<?php echo home_url(); ?>/contact-us.html"
                  >CONTACT</a
                >
              </li>
              <li>
                <a
                  class="sidenav-link fill-fade-in fill-clr-white"
                  data-text="ABOUT"
                  href="<?php echo home_url(); ?>/about-us.html"
                  >ABOUT</a
                >
              </li>
              <li>
                <a
                  class="sidenav-link fill-fade-in fill-clr-white"
                  data-text="CLIENT LOGIN"
                  href="https://auth.ansmusiclimited.com/oauth2/authorize?client_id=85a1ac4c-dce9-4f0c-9543-b99d375c707c&response_type=code&redirect_uri=https://backstage.ansmusiclimited.com/sign-in&env=prod&locale=en&from=https://backstage.ansmusiclimited.com"
                  >CLIENT LOGIN</a
                >
              </li>
            </ul>
          </div>

          <!-- contact column -->
          <div class="contact-col ANS_flex flex_column">
            <div class="ANS_flex contact-wrapper">
              <div class="ANS_contact-info ANS_flex flex_column">
                <h5 class="fs-md">OFFICES</h5>
                <address>
                  <span class="city">Sheridan, Wyoming</span>
                  <span class="city-address">
                    30 N Gould St Ste R Sheridan WY 82801 USA
                  </span>
                  <span> +1(307)2042560 </span>
                </address>

                <address>
                  <span class="city">Dhaka</span>
                  <span class="city-address">
                    21/A New Eskaton Road, Dhaka – 1000, Bangladesh.
                  </span>
                </address>

                <address>
                  <!-- <span class="city"></span> -->
                  <span class="city-address">
                    info@ansmusiclimited.com
                    <br />
                    +88 09611444739 <br />
                    Mon-Fri 11am-5pm
                  </span>
                </address>
              </div>

              <div class="ANS_contact-form-wrap">
                <h5 class="fs-md">Start A Conversation</h5>
                <form class="ANS_contact-form ANS_flex flex_column" action="">
                  <input name="name" id="name" type="text" placeholder="Name" />
                  <input
                    name="email"
                    id="email"
                    type="email"
                    placeholder="Email"
                  />
                  <textarea
                    rows="1"
                    name="message"
                    id="message"
                    type="text"
                    placeholder="Message"
                  ></textarea>
                  <input
                    name="verifyNnonce"
                    id="verifyNnonce"
                    placeholder="What is 1+2=?"
                    type="text"
                  />
                  <button type="submit" class="fs-base ANS_btn btn-b-yellow">
                    SEND
                  </button>
                </form>

                <div class="phone-wrap ANS_flex flex_align_center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.webp" alt="phone icon" />
                  <p class="nowrap fs-md">+88 09611444739</p>
                </div>

                <!-- socical links -->
                <div class="social-links ANS_flex flex_align_center">
                  <a
                    href="https://www.facebook.com/ansmusicdigital"
                    target="_blank"
                  >
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-icon.webp"
                      alt="Facebook icon"
                    />
                  </a>
                  <a
                    href="https://www.youtube.com/@ANSMusicLimited"
                    target="_blank"
                  >
                    <img
                      src="assets/icons/youtube-icon.png"
                      alt="Twitter icon"
                    />
                  </a>
                  <a
                    href="https://www.linkedin.com/company/ansmusic"
                    target="_blank"
                  >
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin-icon.webp"
                      alt="Linkedin icon"
                    />
                  </a>
                  <a
                    href="https://www.instagram.com/ansmusic.digital/"
                    target="_blank"
                  >
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/instragram-icon.webp"
                      alt="Instragram icon"
                    />
                  </a>
                </div>
              </div>
            </div>

            <!-- our partners -->
            <div
              class="our-partners-wrapper marquee-container ANS_flex flex_column"
            >
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
        </div>
      >
    </aside>
    <!-- sidebar ends -->