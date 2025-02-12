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

   <!-- footer starts -->
   <footer class="ANS_footer">
      <div class="footer-top ANS_container ANS_flex">
        <!-- site logo and description -->
        <div class="footer-des footer-col">
          <div class="footer-logo-wrap">
            <a href="#" class="site-footer-logo">
              <img
                data-aos="zoom-in"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/ans-footer-logo.jpg"
                alt="Site logo"
              />
            </a>
          </div>
          <p data-aos="fade-up" class="">
            ANS Music is a global digital music distributor and aggregator
            dedicated to empowering artists, labels, and rights holders. Founded
            in 2022, we provide comprehensive services, including digital music
            and video distribution, royalty collection, licensing, and
            marketing, ensuring creators receive maximum value and transparency.
          </p>
        </div>

        <!-- contact info -->
        <div class="footer-col footer-contact-info ANS_flex flex_column">
          <h5 data-aos="zoom-in" class="fs-md">OFFICES</h5>
          <address data-aos="fade-up">
            <!-- <span class="city">Sheridan, Wyoming</span> -->
            <span class="city-address">
              30 N Gould St Ste R Sheridan WY 82801 USA +1(307)2042560
            </span>
          </address>

          <address data-aos="fade-up">
            <!-- <span class="city">Melbourne</span> -->
            <span class="city-address">
              21/A New Eskaton Road, Dhaka – 1000, Bangladesh.
            </span>
          </address>

          <address data-aos="fade-up">
            <!-- <span class="city">Sydney</span> -->
            <span class="city-address">
              info@ansmusiclimited.com <br />
              +88 09611444739 <br />
              Mon-Fri 11am-5pm <br />
            </span>
          </address>
        </div>

        <!-- quick links -->
        <div class="footer-col ANS_contact-form-wrap">
          <h5 data-aos="zoom-in" class="fs-md">Start A Conversation</h5>
          <form class="ANS_contact-form ANS_flex flex_column" action="">
            <input
              data-aos="fade-up"
              name="name"
              id="name"
              type="text"
              placeholder="Name"
            />
            <input
              data-aos="fade-up"
              name="email"
              id="email"
              type="email"
              placeholder="Email"
            />
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
            <button
              data-aos="fade-up"
              type="submit"
              class="fs-base ANS_btn btn-b-yellow"
            >
              SEND
            </button>
          </form>
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
              src="<?php echo get_template_directory_uri(); ?>/assets/img/a2im-logo.png"
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
              src="<?php echo get_template_directory_uri(); ?>/assets/img/basis-logo-bd.png"
              alt="basis logo"
            />
          </a>

          <div data-aos="zoom-in" class="phone-wrap ANS_flex flex_align_center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.webp" alt="phone icon" />
            <span class="nowrap fs-md">+88 09611444739</span>
          </div>
        </div>
      </div>

      <!-- bottom footer -->
      <div
        class="footer-bottom ANS_container ANS_flex flex_align_center justify_center"
      >
        <div class="footer-social-links ANS_flex flex_align_center">
          <!-- socical links -->
          <a href="https://www.facebook.com/ansmusicdigital" target="_blank">
            <img
              data-aos="zoom-in"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-icon.webp"
              alt="Facebook icon"
            />
          </a>
          <a href="https://www.youtube.com/@ANSMusicLimited" target="_blank">
            <img
              data-aos="zoom-in"
              src="<?php echo get_template_directory_uri(); ?>/assets/icons/youtube-icon.png"
              alt="Twitter icon"
            />
          </a>
          <a href="https://www.linkedin.com/company/ansmusic" target="_blank">
            <img
              data-aos="zoom-in"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin-icon.webp"
              alt="Linkedin icon"
            />
          </a>
          <a href="https://www.instagram.com/ansmusic.digital/" target="_blank">
            <img
              data-aos="zoom-in"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/instragram-icon.webp"
              alt="Instragram icon"
            />
          </a>
        </div>

        <p data-aos="fade-up">
          &copy; Copyright 2024 | <a href="#">ANS Digital</a> | All right
          reserved | Powered by ANS Enterprise LLC
        </p>
      </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
