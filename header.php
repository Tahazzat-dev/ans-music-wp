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
$ansmusic_phone_number_1 = get_theme_mod( 'ansmusic_phone_number_1', '');
$ansmusic_phone_number_2 = get_theme_mod( 'ansmusic_phone_number_2', '');
$ansmusic_social_instagram = get_theme_mod( 'ansmusic_social_instagram', '');
$ansmusic_social_facebook = get_theme_mod( 'ansmusic_social_facebook', '');
$ansmusic_social_linkedin = get_theme_mod( 'ansmusic_social_linkedin', '');
$ansmusic_social_youtube = get_theme_mod( 'ansmusic_social_youtube', '');


// get the current page slug to add active classes
$current_slug = get_post_field('post_name', get_post());
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
              <a class="<?php echo is_front_page() ? 'active':''; ?> fs-base" href="<?php echo home_url(); ?>">HOME</a>
            </li>
            <li data-aos="zoom-in-down">
              <a class="fs-base <?php echo $current_slug=="services" ? 'active':''; ?>" href="<?php echo home_url(); ?>/services">SERVICE</a>
            </li>
            <li data-aos="zoom-in-down">
              <div class="ANS_dropdown-container fs-base <?php echo $current_slug=="why-ans-music" ? 'active':''; ?>" href="#">WHY ANS MUSIC
              <ul class="dropdown-menu ANS_flex flex_column">
                <li> <a href="<?php echo esc_url(site_url('/features/analytics')) ?>">Analytics & Insights</a> </li>
                <li> <a href="<?php echo esc_url(site_url('/features/catalog-management')) ?>">Catalog Management</a> </li>
                <li> <a href="<?php echo esc_url(site_url('/features/rights-management')) ?>">Rights Management</a> </li>
                <li> <a href="<?php echo esc_url(site_url('/features/distribution-and-delivery')) ?>">Distribution & Delivery</a> </li>
                <li> <a href="<?php echo esc_url(site_url('/features/income-tracking')) ?>">Income Tracking</a> </li>
                <li> <a href="<?php echo esc_url(site_url('/features/royalty-account')) ?>">Royalty Accounting</a> </li>
                <li> <a href="<?php echo esc_url(site_url('/integrated-dsp')) ?>">Integrated DSP</a> </li>
                <li> <a href="<?php echo esc_url(site_url('/next-label-distribution')) ?>">Next Label Distribution</a> </li>
              </ul>
              </div>
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
              <a class="fs-base <?php echo $current_slug=="contact-us" ? 'active':''; ?>" href="<?php echo home_url(); ?>/contact-us">CONTACT</a>
            </li>
            <li data-aos="zoom-in-down" class="about-link">
              <a class="fs-base <?php echo $current_slug=="about-us" ? 'active':''; ?>" href="<?php echo home_url(); ?>/about-us">ABOUT</a>
            </li>
            <li data-aos="fade-in">
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
                echo "BLOG";
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
                  class="sidenav-link fill-fade-in fill-clr-white <?php echo is_front_page() ? 'active':''; ?>"
                  data-text="HOME"
                  href="<?php echo home_url(); ?>"
                  >HOME</a
                >
              </li>
              <li>
                <a
                  class="sidenav-link fill-fade-in fill-clr-white  <?php echo $current_slug=="services" ? 'active':''; ?>"
                  data-text="SERVICE"
                  href="<?php echo home_url(); ?>/services"
                  >SERVICE</a
                >
              </li>
              <!-- <li>
                <a
                  class="sidenav-link fill-fade-in fill-clr-white <?php echo $current_slug=="why-ans-music" ? 'active':''; ?>"
                  data-text="WHY ANS MUSIC"
                  href="#"
                  >WHY ANS MUSIC</a
                >
              </li> -->
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
                  class="sidenav-link fill-fade-in fill-clr-white <?php echo $current_slug=="contact-us" ? 'active':''; ?>"
                  data-text="CONTACT"
                  href="<?php echo home_url(); ?>/contact-us"
                  >CONTACT</a
                >
              </li>
              <li>
                <a
                  class="sidenav-link fill-fade-in fill-clr-white <?php echo $current_slug=="about-us" ? 'active':''; ?>"
                  data-text="ABOUT"
                  href="<?php echo home_url(); ?>/about-us"
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
          <div class="contact-col ANS_flex flex_column justify_center">
            <div class="ANS_flex contact-wrapper flex_align_center">
              <div class="ANS_contact-info ANS_flex flex_column">
                <h5 class="fs-md">OFFICES</h5>
                <address>
                  <span class="city-address">
                  <?php echo $ansmusic_office_address_1; ?>    
                  <?php echo $ansmusic_phone_number_1; ?>    
                </span>
                </address>

                <address>
                  <span class="city-address">
                  <?php echo $ansmusic_office_address_2; ?>    
                  </span>
                </address>

                <address>
                  <!-- <span class="city"></span> -->
                  <span class="city-address">
                    <?php echo $ansmusic_office_info_email; ?>
                    <br />
                    <?php echo $ansmusic_phone_number_2; ?>
                    <br /> 
                    <?php echo $ansmusic_office_opening_time; ?>
                  </span>
                </address>
              </div>

              <div class="ANS_contact-form-wrap">
                <!-- <h5 class="fs-md">Start A Conversation</h5> -->
                <?php // get_template_part('template-parts/contact', 'form'); ?>

                <div class="phone-wrap ANS_flex flex_align_center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.webp" alt="phone icon" />
                  <p class="nowrap fs-md"> <?php echo $ansmusic_phone_number_2; ?></p>
                </div>

                <!-- socical links -->
                <div class="social-links ANS_flex flex_align_center">
                  <a
                    href="<?php echo $ansmusic_social_facebook; ?>"
                    target="_blank"
                  >
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-icon.webp"
                      alt="Facebook icon"
                    />
                  </a>
                  <a
                    href="<?php echo $ansmusic_social_youtube; ?>"
                    target="_blank"
                  >
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/icons/youtube-icon.png"
                      alt="Twitter icon"
                    />
                  </a>
                  <a
                    href="<?php echo $ansmusic_social_linkedin; ?>"
                    target="_blank"
                  >
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin-icon.webp"
                      alt="Linkedin icon"
                    />
                  </a>
                  <a
                    href="<?php echo $ansmusic_social_instagram; ?>"
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
              <?php get_template_part('template-parts/content', 'partners'); ?>
            </div>
          </div>
        </div>
      >
    </aside>
    <!-- sidebar ends -->