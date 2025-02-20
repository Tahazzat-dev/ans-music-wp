<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ansmusic
 */

?>



<?php
$ansmusic_footer_logo = get_theme_mod( 'ansmusic_footer_logo', '');
$ansmusic_footer_description = get_theme_mod( 'ansmusic_footer_description', '');
$group_logo_first = get_theme_mod( 'group_logo_first', '');
$group_logo_second = get_theme_mod( 'group_logo_second', '');
$ansmusic_footer_copyright_text = get_theme_mod( 'ansmusic_footer_copyright_text', '');

$ansmusic_office_address_1 = get_theme_mod( 'ansmusic_office_address_1', '');
$ansmusic_phone_number_1 = get_theme_mod( 'ansmusic_phone_number_1', '');
$ansmusic_office_address_2 = get_theme_mod( 'ansmusic_office_address_2', '');
$ansmusic_office_info_email = get_theme_mod( 'ansmusic_office_info_email', '');
$ansmusic_office_support_email = get_theme_mod( 'ansmusic_office_support_email', '');
$ansmusic_office_contact_email = get_theme_mod( 'ansmusic_office_contact_email', '');
$ansmusic_office_opening_time = get_theme_mod( 'ansmusic_office_opening_time', '');
$ansmusic_footer_copyright_text = get_theme_mod( 'ansmusic_footer_copyright_text', '');

$ansmusic_phone_number_2 = get_theme_mod( 'ansmusic_phone_number_2', '');
$ansmusic_social_instagram = get_theme_mod( 'ansmusic_social_instagram', '');
$ansmusic_social_facebook = get_theme_mod( 'ansmusic_social_facebook', '');
$ansmusic_social_linkedin = get_theme_mod( 'ansmusic_social_linkedin', '');
$ansmusic_social_youtube = get_theme_mod( 'ansmusic_social_youtube', '');
?>
   <!-- footer starts -->
   <footer class="ANS_footer gradient-small-colorful-bg">
      <div class="footer-top ANS_container ANS_flex">
        <!-- site logo and description -->
        <div class="footer-des footer-col">
          <div class="footer-logo-wrap">
            <a href="<?php echo home_url(); ?>" class="site-footer-logo">
              <img
                data-aos="zoom-in"
                src="<?php echo $ansmusic_footer_logo; ?>"
                alt="Site logo"
              />
            </a>
          </div>
          <p data-aos="fade-up" class="">
            <?php echo $ansmusic_footer_description; ?>
          </p>
        </div>

        <!-- contact info -->
        <div class="footer-col footer-contact-info ANS_flex flex_column">
          <h5 data-aos="zoom-in" class="fs-md">OFFICES</h5>
          <address data-aos="fade-up">
            <!-- <span class="city">Sheridan, Wyoming</span> -->
            <span class="city-address">
            <?php echo $ansmusic_office_address_1; ?> 
            <?php echo $ansmusic_phone_number_1; ?> 
            </span>
          </address>

          <address data-aos="fade-up">
            <!-- <span class="city">Melbourne</span> -->
            <span class="city-address">
            <?php echo $ansmusic_office_address_2; ?>    
            </span>
          </address>

          <address data-aos="fade-up">
            <!-- <span class="city">Sydney</span> -->
            <span class="city-address">
            <?php echo $ansmusic_office_info_email; ?> <br />
            <?php echo $ansmusic_phone_number_2 ?> <br />
            <?php echo $ansmusic_office_opening_time; ?><br />
            </span>
          </address>
        </div>

        <!-- quick links -->
        <div class="footer-col ANS_quick-links-wrap">
        <h5 data-aos="zoom-in">QUICK LINKS</h5>

        <div class="ANS_quick-links-inner">
          <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) );?>
        </div>
        </div>

        <!-- basis membership logo -->
        <div class="footer-col membership-info">
          <h5 data-aos="zoom-in">PROUD MEMBERS OF</h5>

          <a
            target="_blank"
            href="https://membership.a2im.org/memberdirectory/Details/ans-music-distribution-3522680"
          >
            <img
              data-aos="zoom-in"
              class="a2im"
              src="<?php echo $group_logo_first ?>"
              alt="A2IM logo"
            />
          </a>

          <a
            target="_blank"
            href="https://basis.org.bd/company-profile/23-12-057"
          >
            <img
              data-aos="zoom-in"
              class="basis"
             src="<?php echo $group_logo_second ?>"
              alt="basis logo"
            />
          </a>

          <div data-aos="zoom-in" class="phone-wrap ANS_flex flex_align_center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.webp" alt="phone icon" />
            <span class="nowrap fs-md"><?php echo $ansmusic_phone_number_2; ?></span>
          </div>
        </div>
      </div>

      <!-- bottom footer -->
      <div
        class="footer-bottom ANS_container ANS_flex flex_align_center justify_center"
      >
        <div class="footer-social-links ANS_flex flex_align_center">
          <!-- socical links -->
          <a href="<?php echo  $ansmusic_social_facebook; ?>" target="_blank">
            <img
              data-aos="zoom-in"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-icon.webp"
              alt="Facebook icon"
            />
          </a>
          <a href="<?php echo  $ansmusic_social_youtube; ?>" target="_blank">
            <img
              data-aos="zoom-in"
              src="<?php echo get_template_directory_uri(); ?>/assets/icons/youtube-icon.png"
              alt="Twitter icon"
            />
          </a>
          <a href="<?php echo  $ansmusic_social_linkedin; ?>" target="_blank">
            <img
              data-aos="zoom-in"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin-icon.webp"
              alt="Linkedin icon"
            />
          </a>
          <a href="<?php echo  $ansmusic_social_instagram; ?>" target="_blank">
            <img
              data-aos="zoom-in"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/instragram-icon.webp"
              alt="Instragram icon"
            />
          </a>
        </div>

        <p data-aos="fade-up">
          &copy; <?php echo  $ansmusic_footer_copyright_text; ?>
        </p>
      </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
