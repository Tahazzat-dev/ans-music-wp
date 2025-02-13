<?php
/**
 * Template Name: About Us page
 *
 * @package ansmusic
 */

get_header();
?>

<?php
// about us page customization related ACF fields

$banner_large_background = get_field('about_us_banner_large_background');
$banner_small_background = get_field('about_us_banner_small_background');
$banner_title = get_field('about_us_banner_title');
$banner_subtitle = get_field('about_us_banner_subtitle');
?>
 <main class="ANS_main-wrapper">
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

<!-- company history, mission, vision related ACF fields -->
      <?php
      $company_history = get_field('company_history');
      $company_mission = get_field('company_mission');
      $company_vision = get_field('company_vision');
      ?>
       <!-- about ANS starts-->
 <section class="ANS_history-wrap">
    <div class="ANS_history-inner ANS_container ANS_flex flex_align_center">
      <div class="thum-container">
        <img
        data-aos="fade-down"
          src="<?php echo $company_history['image'] ?>"
          alt="section thumnail"
        />
      </div>
      <div class="history-content">
        <h3  data-aos="zoom-in-up" class="fs-2xl section_title">
        <?php echo $company_history['title'] ?>
        </h3>

        <p  data-aos="zoom-in-up">
        <?php echo $company_history['description'] ?>
        </p>
      </div>
    </div>
  </section>
<!-- about ANS ends-->

<!-- ANS history starts -->
<section class="ANS_history-wrap">
    <div class="ANS_history-inner ANS_container ANS_flex flex_align_center">
      <div class="history-content">
        <h3  data-aos="zoom-in-up" class="fs-2xl section_title"><?php echo $company_mission['title']; ?></h3>

        <p  data-aos="zoom-in-up">
        <?php echo $company_mission['description'] ?>
        </p>

        <!-- divider -->
        <div class="ANS_section-divider"></div>
        <h3  data-aos="zoom-in-up" class="fs-2xl section_title">  <?php echo $company_vision['title'] ?></h3>
        <p  data-aos="zoom-in-up">
        <?php echo $company_vision['description'] ?>
        </p>
      </div>
    </div>
  </section>
<!-- ANS history ends -->


<!-- total distributed analytics related ACF fields -->
 <?php
   $music_distributed = get_field('music_distributed');
      $video_distributed = get_field('video_distributed');
 ?>
  <!-- ANS analytics starts -->
  <section class="ANS_analytics-wrap">
    <div class="ANS_analytics-inner ANS_container">
      <div class="content ANS_flex">
        <div class="total-distributed-music">
          <h4  data-aos="zoom-in-up" class="fs-4xl"><?php echo $music_distributed['total_distributed_amount']; ?>+</h4>
          <p  data-aos="zoom-in-up"><?php echo $music_distributed['title']; ?></p>
        </div>

        <div class="total-distributed-video">
        <h4  data-aos="zoom-in-up" class="fs-4xl"><?php echo $video_distributed['total_distributed_amount']; ?>+</h4>
        <p  data-aos="zoom-in-up"><?php echo $video_distributed['title']; ?></p>
        </div>
      </div>
    </div>
  </section>
  <!-- ANS analytics ends -->

  <!-- Team info related ACF fields -->
 <?php
   $team_info_section_title = get_field('team_info_section_title');
 ?>
    <!-- our team -->
    <section class="ANS_team-wrap">
        <div class="ANS_team-inner ANS_container">
          <div class="top-text">
            <h2 class="section-title text-fill neon-stroke fs-6xl">
            <?php 
                if (!empty($team_info_section_title)) {
                    $words = explode(' ', strtoupper($team_info_section_title));
                    foreach ($words as $index => $word) {
                        echo '<span data-aos="zoom-in-up" data-text="' . esc_attr($word) . '">' . esc_html($word) . '</span>';
                        if ($index < count($words) - 1) {
                            echo '<br />';
                        }
                    }
                }
            ?>
            </h2>
            <h4  data-aos="zoom-in-up"  class="fs-2xl section-subtitle">
             <?php echo get_field('teaminfo_section_subtitle');?>
            </h4>
          </div>
   
          <div class="ANS_teams-container ANS_flex flex_column">
            <!-- team details box -->
            <div class="ANS_team-details ANS_flex flex_align_center">
              <div class="team-profile">
                <img  data-aos="fade-down" src="<?php echo get_template_directory_uri(); ?>/assets/img/ceo-and-founder.jpg" alt="Team member" />
              </div>
              <div class="role">
                <h5  data-aos="zoom-in-up" class="fs-2xl">CEO & Founder</h5>
              </div>
              <div class="content">
                <h5  data-aos="zoom-in-up" class="name">AKASH SARKER</h5>
    
                <p  data-aos="zoom-in-up" class="des">
                  Meet our head honcho, Josh, aka “The poor man’s Michael
                  Scott”. Outside of spending way too much time writing the
                  staff profiles for this page, talking about his doggo and
                  watching The Office the US version, I believe in being up
                  front and transparent in my approach and I wanted to take the
                  time to write to you about what we do, how we do it, and why
                  we do it.
                </p>
    
                <div class="team-social-links ANS_flex flex_align_center">
                  <a  data-aos="zoom-in-up" href="#" target="_blank"
                    ><img
                      data-aos="zoom-in"
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin-icon.webp"
                      alt="Linkedin icon"
                      class="aos-init aos-animate"
                  /></a>
                </div>
              </div>
            </div>
            <!-- team details box -->
            <div class="ANS_team-details ANS_flex flex_align_center">
              <div class="content">
                <h5  data-aos="zoom-in-up" class="name">JOSH WHITE</h5>
    
                <p  data-aos="zoom-in-up" class="des">
                  vision to be a world class digital agency, which he’s been
                  doing since its inception. His strategic and enthusiastic
                  approach to digital has enabled the team at Neon Treehouse to
                  deliver killer campaigns time after time. Whilst patriotically
                  born and raised in Adelaide, Josh spends his time currently
                  split between the Melbourne and Adelaide offices in his vision
                  to grow the business across Australia and beyond.
                </p>
    
                <div class="team-social-links ANS_flex flex_align_center">
                  <a  data-aos="zoom-in-up" href="#" target="_blank"
                    ><img
                      data-aos="zoom-in"
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin-icon.webp"
                      alt="Linkedin icon"
                      class="aos-init aos-animate"
                  /></a>
                </div>
              </div>
              <div class="role">
                <h5  data-aos="zoom-in-up" class="fs-2xl">OPERATIONS MANAGER</h5>
              </div>
              <div class="team-profile">
                <img data-aos="fade-down" src="<?php echo get_template_directory_uri(); ?>/assets/img/other-team-member.png" alt="Team member" />
              </div>
            </div>
            <!-- team details box -->
            <div class="ANS_team-details ANS_flex flex_align_center">
              <div class="team-profile">
                <img
                data-aos="fade-down"
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/other-team-member-5.png"
                  alt="Team member"
                />
              </div>
              <div class="role">
                <h5  data-aos="zoom-in-up" class="fs-2xl">FRONTEND WEB DEVELOPER</h5>
              </div>
              <div class="content">
                <h5  data-aos="zoom-in-up" class="name">Arianna Guiao</h5>
    
                <p  data-aos="zoom-in-up" class="des">
                  Meet Arianna, our Frontend Web Developer and the queen of
                  tackling anything that comes her way! Arianna is one of our
                  go-getters. Her remarkable ability to continuously explore new
                  challenges and consistently learn new methods to enhance her
                  skill set in web-related tasks is truly commendable. We deeply
                  appreciate her dedication and the expertise she has brought
                  into the Treehouse.
                </p>
    
                <div class="team-social-links ANS_flex flex_align_center">
                  <a  data-aos="zoom-in-up" href="#" target="_blank"
                    ><img
                      data-aos="zoom-in"
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin-icon.webp"
                      alt="Linkedin icon"
                      class="aos-init aos-animate"
                  /></a>
                </div>
              </div>
            </div>
            <!-- team details box -->
            <div class="ANS_team-details ANS_flex flex_align_center">
              <div class="content">
                <h5  data-aos="zoom-in-up" class="name">Michael Chiu</h5>
    
                <p  data-aos="zoom-in-up" class="des">
                  For the first few weeks, the top phrase used to describe
                  Michael was “the nicest guy ever!” This very quickly was
                  accompanied by terms like “what a gun”, “knows his shit”, and
                  “you can count on him”. After working on the Huawei account
                  with an international media agency in Hong Kong for a number
                  of years, Michael joined us in Adelaide bringing an
                  unparalleled depth of
                </p>
    
                <div class="team-social-links ANS_flex flex_align_center">
                  <a  data-aos="zoom-in-up" href="#" target="_blank"
                    ><img
                      data-aos="zoom-in"
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin-icon.webp"
                      alt="Linkedin icon"
                      class="aos-init aos-animate"
                  /></a>
                </div>
              </div>
              <div class="role">
                <h5  data-aos="zoom-in-up" class="fs-2xl">HEAD OF AD STRATEGY</h5>
              </div>
              <div class="team-profile">
                <img
                data-aos="fade-down"
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/other-team-member-2.png"
                  alt="Team member"
                />
              </div>
            </div>
            <!-- team details box -->
            <div class="ANS_team-details ANS_flex flex_align_center">
              <div class="team-profile">
                <img
                data-aos="fade-down"
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/other-team-member-4.png"
                  alt="Team member"
                />
              </div>
              <div class="role">
                <h5  data-aos="zoom-in-up" class="fs-2xl">HEAD OF CREATIVE</h5>
              </div>
              <div class="content">
                <h5  data-aos="zoom-in-up" class="name">Agnes Martins</h5>
    
                <p  data-aos="zoom-in-up" class="des">
                  Agnes is a woman of many talents! She is our superstar Head of
                  Creative at the Treehouse! If her amazing hair doesn’t impress
                  you enough, how about the fact that she has even written and
                  published a book!
                </p>
    
                <div class="team-social-links ANS_flex flex_align_center">
                  <a  data-aos="zoom-in-up" href="#" target="_blank"
                    ><img
                      data-aos="zoom-in"
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin-icon.webp"
                      alt="Linkedin icon"
                      class="aos-init aos-animate"
                  /></a>
                </div>
              </div>
            </div>
            <!-- team details box -->
          </div>
        </div>
      </section>

        <!-- our expertise -->
        <?php
   $our_expertise_section_title = get_field('about_us_our_experitse_section_title');
 ?>
  <section class="ANS_expertise-wrap">
    <div class="ANS_expertise-inner ANS_container">
        <div class="top-text">
            <h2 class="section-title text-fill neon-stroke fs-6xl">
            <?php 
                if (!empty($our_expertise_section_title)) {
                    $words = explode(' ', strtoupper($our_expertise_section_title));
                    foreach ($words as $index => $word) {
                        echo '<span data-aos="zoom-in-up" data-text="' . esc_attr($word) . '">' . esc_html($word) . '</span>';
                        if ($index < count($words) - 1) {
                            echo '<br />';
                        }
                    }
                }
            ?>
            </h2>
            <h4 class="fs-2xl section-subtitle">
              <?php echo get_field('about_us_our_experitse_section_subtitle');?>
            </h4>
          </div>

          <div class="ANS_expertise-container">

            <!-- expertise cards -->
            <a href="#" class="expertise-card" title="click for details" >
                    <img  data-aos="zoom-in" src="<?php echo get_template_directory_uri(); ?>/assets/icons/knowledge-icon.svg" alt="Expertise image">
                    <h5  data-aos="zoom-in-up" class="name">Music Industry Knowledge</h5>
            </a>
            <!-- expertise cards -->
            <a href="#" class="expertise-card" title="click for details" >
                    <img  data-aos="zoom-in" src="<?php echo get_template_directory_uri(); ?>/assets/icons/distribution-network.svg" alt="Expertise image">
                    <h5  data-aos="zoom-in-up" class="name">Digital & Physical Distribution Networks</h5>
            </a>
            <!-- expertise cards -->
            <a href="#" class="expertise-card" title="click for details" >
                    <img  data-aos="zoom-in" src="<?php echo get_template_directory_uri(); ?>/assets/icons/meta-data-management-and-right-administration.svg" alt="Expertise image">
                    <h5  data-aos="zoom-in-up" class="name">Metadata Management & Rights Administration</h5>
            </a>
            <!-- expertise cards -->
            <a href="#" class="expertise-card" title="click for details" >
                    <img  data-aos="zoom-in" src="<?php echo get_template_directory_uri(); ?>/assets/icons/marketing-and-distribution-icon.svg" alt="Expertise image">
                    <h5  data-aos="zoom-in-up" class="name">Marketing & Promotion Strategies</h5>
            </a>
            <!-- expertise cards -->
            <a href="#" class="expertise-card" title="click for details" >
                    <img  data-aos="zoom-in" src="<?php echo get_template_directory_uri(); ?>/assets/icons/technology-and-software-development.svg" alt="Expertise image">
                    <h5  data-aos="zoom-in-up" class="name">Technology & Software Development</h5>
            </a>
            <!-- expertise cards -->
            <a href="#" class="expertise-card" title="click for details" >
                    <img  data-aos="zoom-in" src="<?php echo get_template_directory_uri(); ?>/assets/icons/legal-and-licencing-icon.svg" alt="Expertise image">
                    <h5  data-aos="zoom-in-up" class="name">Legal & Licensing Expertise</h5>
            </a>
            <!-- expertise cards -->
          </div>
    </div>
  </section>

  <!-- company location -->
  <div class="ANS_company-location-wrap">
    <div class="ANS_company-location-inner">
        <img  data-aos="fade-down" src="<?php echo get_field('company_location_map_large_image'); ?>" alt="Company location">
    </div>
   </div>
     
    </main>

<?php
get_footer();
