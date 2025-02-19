<?php
/**
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
$banner_description = get_field('distribution_partners_banner_description');
$start_now_btn_link = get_field('distribution_partner_banner_start_now_btn_link');
?>

<main class="ANS_main-wrapper ">
    <section class="ANS_about-banner-wrapper ANS_distribution_partners_wrap">
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
            <div style="max-width:1000px; overflow: hidden;"
                class="ANS_about-banner-content ANS_container ANS_flex flex_column flex_align_center justify_center">
                <h2 class="fs-4xl">
                    <?php echo $banner_title; ?>
                </h2>
                <p class="fs-xl-lh-normal"><?php echo $banner_description; ?></p>
                <a href="<?php echo $start_now_btn_link; ?>" class="ANS_btn btn-b-yellow">START NOW</a>
            </div>
        </div>
    </section>


    <!-- process to upload music in online plartform -->
    <?php
    $upload_music_process_section_title = get_field('upload_music_process_section_title');
    $upload_music_section_des = get_field('upload_music_section_des');
    $upload_steps_in_online_plartform = get_field('upload_steps_in_online_plartform');
    ?>
    <section class="ANS_applying-process-wrap">
        <div class="ANS_container ANS_applying-process">
                <div class="top-text">
                        <h3 class="fs-5xl title"><?php echo $upload_music_process_section_title ?></h3>
                        <p class="fs-xl-lh-normal"><?php echo $upload_music_section_des ?></p>
                </div>
            <div class="ANS_applying-process-cards">
                <!-- card -->
                <div class="applying-process-card ANS_flex">
                    <div class="circle"></div>
                    <div class="index-mark ANS_flex flex_align_center justify_center">
                    <span>1</span>
                    </div>

                    <div class="card-content">
                        <div class="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/create-music-icon.svg"
                                alt="card icon">
                            <h3 class="fs-md"><?php echo $upload_steps_in_online_plartform[0]['title'] ?></h3>
                            <p><?php echo $upload_steps_in_online_plartform[0]['des'] ?></p>
                        </div>
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="applying-process-card ANS_flex">
                    <div class="circle"></div>
                    <div class="index-mark ANS_flex flex_align_center justify_center">
                    <span>2</span>
                    </div>

                    <div class="card-content">
                        <div class="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/approve-music-icon.svg"
                                alt="card icon">
                                <h3 class="fs-md"><?php echo $upload_steps_in_online_plartform[1]['title'] ?></h3>
                                <p><?php echo $upload_steps_in_online_plartform[1]['des'] ?></p>
                        </div>
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="applying-process-card ANS_flex">
                    <div class="circle"></div>
                    <div class="index-mark ANS_flex flex_align_center justify_center">
                    <span>3</span>
                    </div>

                    <div class="card-content">
                        <div class="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/relase-music-icon.svg"
                                alt="card icon">
                                <h3 class="fs-md"><?php echo $upload_steps_in_online_plartform[2]['title'] ?></h3>
                                <p><?php echo $upload_steps_in_online_plartform[2]['des'] ?></p>
                        </div>
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="applying-process-card ANS_flex">
                    <div class="circle"></div>
                    <div class="index-mark ANS_flex flex_align_center justify_center">
                    <span>4</span>
                    </div>
                    <div class="card-content">
                        <div class="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dollar-icon.svg"
                                alt="card icon">
                                <h3 class="fs-md"><?php echo $upload_steps_in_online_plartform[3]['title'] ?></h3>
                                <p><?php echo $upload_steps_in_online_plartform[3]['des'] ?></p>
                        </div>
                    </div>
                </div>
                <!-- card -->
            </div>

            <div class="cta-btn ANS_flex justify_center">
                <a href="#" class="ANS_btn btn-b-yellow">APPLY NOW</a>
            </div>

        </div>
    </section>

    <!-- why upload/launch your music -->
<?php
$why_launch_your_music_thum = get_field('why_launch_your_music_in_online_plartform_section_thum');
$why_launch_content = get_field('why_launch_your_music_in_online_plartform_section_content');
?>
    <section class="why-upload-music-wrap">
        <div class="ANS_container why-upload-music-inner ANS_flex flex_align_center justify_between">
            <div class="section-thum">
                <img src="<?php echo $why_launch_your_music_thum; ?>" alt="Section thumnail">
            </div>

            <div class="content">
                <h2 class="fs-4xl"><?php echo $why_launch_content['title'] ?> <span class="clr-txt"><?php echo $why_launch_content['color_text'] ?></span></h2>
                <p class="fs-xl-lh-md"><?php echo $why_launch_content['description'] ?></p>
                <ul class="ANS_flex flex_column">
                    <?php
                    foreach($why_launch_content['key_points'] as $item):
                        echo "<li>{$item['key_point']}</li>";
                        endforeach;?>
                </ul>
                <p><?php echo $why_launch_content['bottom_description'] ?></p>
            </div>
        </div>
    </section>

      <!-- our partners -->
  <section class="ANS_partners-wrap">
    <?php get_template_part('template-parts/content', 'partners'); ?>
  </section>
</main>
<?php
get_footer();
