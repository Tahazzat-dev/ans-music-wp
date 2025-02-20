<?php
/**
 * Template Name: Terms and Conditions Template
 *
 * @package ansmusic
 */

get_header();
?>

<?php
// about us page customization related ACF fields

$banner_large_background = get_field('terms_and_conditions_banner_large_background');
$banner_small_background = get_field('terms_and_conditions_banner_small_background');
$banner_title = get_field('terms_and_conditions_banner_title');
$banner_subtitle = get_field('terms_and_conditions_banner_subtitle');
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
            <h2 class="text-fill neon-stroke fs-5xl">
              <span data-aos="zoom-in" data-text="<?php echo strtoupper($banner_title); ?>"><?php echo strtoupper($banner_title); ?></span>
            </h2>
            <h3 data-aos="zoom-in" class="fs-3xl"><?php echo strtoupper($banner_subtitle); ?></h3>
          </div>
        </div>
      </section>

     <?php 
	 $short_description = get_field('terms-and-conditions-short_description');
	 $terms_and_conditions_lists = get_field('terms-and-conditions-lists');
	 ?>
      <section class="ANS_term-info-wrap ANS_blog-section-wrap">
      <div class="ANS_container">
		  <?php 
            if(!empty($terms_and_conditions_lists)):
		  		foreach($terms_and_conditions_lists as $terms):
		  			echo "<h3 style='padding-bottom:5px;' class='fs-2xl'>{$terms['title']}</h3>";
		  			echo "<p class='fs-base'>{$terms['description']}</p> <br /> <br />";
		  		endforeach;
		  endif;
		  ?>
        </div>
      </section>
	 <section class="ANS_blog-section-wrap">
<!-- 	Empty section to render bottom padding  -->
	 </section>
    </main>

<?php
get_footer();
