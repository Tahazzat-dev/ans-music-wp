<?php
/**
 * Template Name: Contact Us page
 *
 * @package ansmusic
 */

get_header();
?>

<!-- Banner necessary ACF fields -->
<?php 
$ansmusic_office_address_1 = get_theme_mod( 'ansmusic_office_address_1', '');
$ansmusic_office_address_2 = get_theme_mod( 'ansmusic_office_address_2', '');
$ansmusic_phone_number_1 = get_theme_mod( 'ansmusic_phone_number_1', '');
$ansmusic_phone_number_2 = get_theme_mod( 'ansmusic_phone_number_2', '');
$ansmusic_office_info_email = get_theme_mod( 'ansmusic_office_info_email', '');
$ansmusic_office_support_email = get_theme_mod( 'ansmusic_office_support_email', '');
$ansmusic_office_contact_email = get_theme_mod( 'ansmusic_office_contact_email', '');
$ansmusic_office_opening_time = get_theme_mod( 'ansmusic_office_opening_time', '');
$ansmusic_footer_copyright_text = get_theme_mod( 'ansmusic_footer_copyright_text', '');

// banner background image
$large_banner = get_field( 'contact_us_banner_background_image_large_devices', '');
$small_banner = get_field( 'contact_us_banner_background_image_small_devices', '');
?>
   <main class="ANS_main-wrapper">
      <section class="ANS_contact-banner-wrapper">
        <!-- banner content -->
        <div
          class="ANS_contact-banner-bg"
        >
        <picture>
            <source media="(min-width: 768px)" srcset="<?php echo $large_banner; ?>">
            <source media="(max-width: 767px)" srcset="<?php echo $small_banner;?>">
            <img src="<?php echo $large_banner; ?>" alt="Banner image">
        </picture>


        <div class="banner-overlay"></div>
        </div>

        <!-- banner content -->
          <div class="ANS_contact-banner-container ANS_flex flex_column">
            <div class="ANS_contact-banner-content ANS_container ANS_flex">
                <div class="ANS_office-address ANS_flex flex_column">
                    <!-- contact info card -->
                    <div class="contact-info-card">
                        <h4 data-aos="fade-up"  class="fs-md icon-box location-mark">Office addresses</h4>
                        <p data-aos="fade-up" class="icon-box arrow-location"> <?php echo $ansmusic_office_address_1; ?> </p>
                        <p data-aos="fade-up" class="icon-box phone"><?php echo $ansmusic_phone_number_1; ?> </p>
                    </div>

                    <div class="contact-info-card">
                        <h4 data-aos="fade-up" class="fs-md icon-box location-mark">Office addresses</h4>
                        <p data-aos="fade-up" class="icon-box arrow-location"><?php echo $ansmusic_office_address_2; ?>    </p>
                        <p data-aos="fade-up" class="icon-box phone"><?php echo $ansmusic_phone_number_2 ?></p>
                        <p data-aos="fade-up" class="icon-box time-glass"><?php echo $ansmusic_office_opening_time; ?></p>
                    </div>
                    <!-- contact info card -->
                    <div class="contact-info-card">
                      <h4 data-aos="fade-up" class="fs-md icon-box group-arrow">Our Emails</h4>
                      <p data-aos="fade-up" class="icon-box email"><?php echo $ansmusic_office_info_email; ?></p>
                      <p data-aos="fade-up" class="icon-box email"><?php echo $ansmusic_office_support_email; ?></p>
                      <p data-aos="fade-up" class="icon-box email"><?php echo $ansmusic_office_contact_email; ?></p>
                    </div>
                    <!-- contact info card -->
                </div>

                <!-- contact form -->
                <div class="form-container">
                    <h2  data-aos="fade-up" class="fs-4xl">Contact Us</h2>
                    <form class="ANS_contact-form ANS_flex flex_column" action="">
                        <input data-aos="fade-up" name="name" id="name" type="text" placeholder="Name" />
                        <input data-aos="fade-up" name="email" id="email" type="email" placeholder="Email" />
                        <textarea
                        data-aos="fade-up"
                          rows="1"
                          name="message"
                          id="message"
                          type="text"
                          placeholder="Message"
                        ></textarea>
                        <input
                        data-aos="fade-up"
                          name="verifyNnonce"
                          id="verifyNnonce"
                          placeholder="What is 1+2=?"
                          type="text"
                        />
                        <button data-aos="fade-up" type="submit" class="fs-base ANS_btn btn-b-yellow">
                          SEND
                        </button>
                      </form>
                </div>
                <!-- contact form -->
            </div>
          </div>
      </section>
    </main>

<?php
get_footer();
