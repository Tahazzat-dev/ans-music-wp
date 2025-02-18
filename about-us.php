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

 <!-- test banner -->
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
            <?php $team_data = get_post_meta(get_the_ID(),'ans_team_details', true ); ?>
          <div class="ANS_teams-container ANS_flex flex_column">

          <?php
          if(!empty($team_data)){
            foreach($team_data as $team){
              ?>

                   <!-- team details box -->
            <div class="ANS_team-details ANS_flex flex_align_center">
              <div class="team-profile">
                <img  data-aos="fade-down" src="<?php echo $team['profile'] ?>" alt="Team member" />
              </div>
              <div class="role">
                <h5  data-aos="zoom-in-up" class="fs-2xl"><?php echo $team['role'] ?></h5>
              </div>
              <div class="content">
                <h5  data-aos="zoom-in-up" class="name"><?php echo $team['name'] ?></h5>
    
                <p  data-aos="zoom-in-up" class="des"><?php echo $team['des'] ?></p>
    
                <div class="team-social-links ANS_flex flex_align_center">
                  <a  data-aos="zoom-in-up" href="<?php echo $team['linked_in_url'] ?>" target="_blank"
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

<?php
            }
          }
          ?>
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


          <?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'category_name' => 'our-expertise',
    'orderby' => 'date',
    'order' => 'ASC',
  );

  $expertise_query = new WP_Query($args);

  ?>
          <div class="ANS_expertise-container">

<?php
          if ($expertise_query->have_posts()):
      while ($expertise_query->have_posts()):
        $expertise_query->the_post();

        $expertise_icon = get_field('our-expertise-icon', get_the_ID());
        ?>
   <!-- expertise cards -->
   <a href="#" class="expertise-card" title="click for details" >
                    <img  data-aos="zoom-in" src="<?php echo $expertise_icon; ?>" alt="Expertise image">
                    <h5  data-aos="zoom-in-up" class="name"><?php the_title(); ?></h5>
            </a>
            <!-- expertise cards -->
<?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
          </div>
    </div>
  </section>    
    </main>

<?php
get_footer();
