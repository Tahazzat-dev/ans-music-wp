<?php
/**
 * Template Name: Support Template
 *
 * @package ansmusic
 */

get_header();
?>

<?php
// about us page customization related ACF fields

$banner_large_background = get_field('support_banner_large_background');
$banner_small_background = get_field('support_banner_small_background');
$banner_title = get_field('support_banner_title');
$banner_subtitle = get_field('support_banner_subtitle');
?>
<main class="ANS_main-wrapper">
    <section class="ANS_about-banner-wrapper">
        <!-- banner content -->
        <div class="ANS_about-banner-bg">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo $banner_large_background; ?>" />
                <source media="(max-width: 767px)" srcset="<?php echo $banner_small_background; ?>" />
                <img data-aos="fade-down" src="<?php echo $banner_large_background; ?>" alt="Banner image" />
            </picture>

            <div class="banner-overlay"></div>
        </div>

        <!-- banner content -->
        <div class="ANS_about-banner-container ANS_flex flex_column">
            <div class="ANS_about-banner-content ANS_container ANS_flex flex_column flex_align_center justify_center">
                <h2 class="text-fill neon-stroke fs-5xl">
                    <span data-aos="zoom-in"
                        data-text="<?php echo strtoupper($banner_title); ?>"><?php echo strtoupper($banner_title); ?></span>
                </h2>
                <h3 data-aos="zoom-in" class="fs-3xl"><?php echo strtoupper($banner_subtitle); ?></h3>
            </div>
        </div>
    </section>

    <?php

    $support_partners_section_title = get_field('support_partners_section_title');
    $support_partners_section_description = get_field('support_partners_section_description');
    $support_content_lists = get_field('support_content_lists');

    ?>
       <!-- distribution partners -->
       <div class="ANS_distribution-partners-wrap">
           <div class="ANS_distribution-partners-inner ANS_container">
                <h2 class="fs-6xl text-fill neon-stroke"  >
                    <span data-text="<?php echo strtoupper($support_partners_section_title); ?>"><?php echo strtoupper($support_partners_section_title); ?></span>
                </h2>
                <p class="fs-md"><?php echo $support_partners_section_description; ?></p>

                <div class="distribution-partners">
                <?php
                if (!empty($support_content_lists)):
                    foreach ($support_content_lists as $item):
                        ?>
                        <!-- card -->
                        <a href="<?php echo $item['url'] ?>" class="card">
                            <div class="glow"></div>
                            <img src="<?php echo $item['icon'] ?>"
                                alt="partners icon">
                            <h3 class="fs-xl"><?php echo $item['title'] ?></h3>
                        </a>
                    <?php
                    endforeach;
                endif;
                ?>
           </div>
           </div>

          
       </div>

       <div class="ANS_how-it-works-wrapper">
      <!-- our partners -->
      <div
              class="ANS_container our-partners-wrapper marquee-container ANS_flex flex_column"
            >
              <?php get_template_part('template-parts/content', 'partners'); ?>
            </div>
  </div>
    <section class="ANS_blog-section-wrap">
        <!-- 	Empty section to render bottom padding  -->
    </section>
</main>

<?php
get_footer();
