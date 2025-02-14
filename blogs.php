<?php
/**
 * Template Name: Blogs page
 *
 * @package ansmusic
 */

get_header();
?>

<main class="ANS_main-wrapper">


<?php
// Blogs page customization related ACF fields

$banner_large_background = get_field('blogs_banner_large_background');
$banner_small_background = get_field('blogs_banner_small_background');
$banner_title = get_field('blogs_banner_title');
$banner_subtitle = get_field('blogs_banner_subtitle');
?>
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
      
      
      <!-- industry insights -->
      <?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 6,
    'category_name' => 'industry-insights',
    'orderby' => 'date',
    'order' => 'ASC',
  );

  $industry_insights = new WP_Query($args);
  ?>
       <section class="ANS_blog-section-wrap">
        <div class="ANS_blog-section-inner ANS_container">
            <div class="top-text ANS_flex flex_align_center justify_between">
                <h3 class="fs-4xl">Industry insights</h3> <a class="ANS_btn btn-b-yellow nowrap" href="<?php echo site_url("/category"."/industry-insights") ?>">View All</a>
            </div>
            <div class="ANS_blogs">
            <?php
            if ($industry_insights->have_posts()) {
                while ($industry_insights->have_posts()) {
                    $industry_insights->the_post();
                    ?>
                    <!-- blog -->
                    <div class="blog">
                        <div class="blog-thum">
                            <!-- <img src="echo get_the_post_thumbnail();" alt="Blog thumnail"> -->
                            <?php the_post_thumbnail();?>
                        </div>
                        <div class="content">
                            <h4 class="fs-xl"><?php
                            $blog_title = get_the_title();
                            $max_length = 65;
                            if (strlen($blog_title) > $max_length) {
                                echo substr($blog_title, 0, $max_length) . '...';
                            } else {
                                the_title();
                            }
                            ?></h4>
                            <p><?php echo get_the_date('M j, Y'); ?></p>
                            <a class="ANS_btn btn-b-yellow" href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                    </div>
                    <!-- blog -->
                    <?php
                }
                ?>
            </div>
            <?php
            } else {
                echo "<p>No blog found in this category.</p>";
            }
            wp_reset_postdata();
            ?>
        </div>
       </section>


        <!-- ANS Music Updates -->
      <?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 6,
    'category_name' => 'ans-music-updates',
    'orderby' => 'date',
    'order' => 'ASC',
  );

  $ans_music_updates = new WP_Query($args);
  ?>
       <section class="ANS_blog-section-wrap">
        <div class="ANS_blog-section-inner ANS_container">
            <div class="top-text ANS_flex flex_align_center justify_between">
                <h3 class="fs-4xl">ANS Music updates</h3> <a class="ANS_btn btn-b-yellow nowrap" href="<?php echo site_url("/category"."/ans-music-updates") ?>">View All</a>
            </div>
            <div class="ANS_blogs">
            <?php
            if ($ans_music_updates->have_posts()) {
                while ($ans_music_updates->have_posts()) {
                    $ans_music_updates->the_post();
                    ?>
                    <!-- blog -->
                    <div class="blog">
                        <div class="blog-thum">
                            <!-- <img src="echo get_the_post_thumbnail();" alt="Blog thumnail"> -->
                            <?php the_post_thumbnail();?>
                        </div>
                        <div class="content">
                            <h4 class="fs-xl"><?php
                            $blog_title = get_the_title();
                            $max_length = 65;
                            if (strlen($blog_title) > $max_length) {
                                echo substr($blog_title, 0, $max_length) . '...';
                            } else {
                                the_title();
                            }
                            ?></h4>
                            <p><?php echo get_the_date('M j, Y'); ?></p>
                            <a class="ANS_btn btn-b-yellow" href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                    </div>
                    <!-- blog -->
                    <?php
                }
                ?>
            </div>
            <?php
            } else {
                echo "<p>No blog found in this category.</p>";
            }
            wp_reset_postdata();
            ?>
        </div>
       </section>


         <!-- ANS Music Updates -->
<?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 6,
    'category_name' => 'featured-artists-and-success-stories',
    'orderby' => 'date',
    'order' => 'ASC',
  );

  $featured_artists_and_success_stories = new WP_Query($args);
  ?>
       <section class="ANS_blog-section-wrap">
        <div class="ANS_blog-section-inner ANS_container">
            <div class="top-text ANS_flex flex_align_center justify_between">
                <h3 class="fs-4xl">Featured artists & success stories</h3> <a class="ANS_btn btn-b-yellow nowrap" href="<?php echo site_url("/category"."/featured-artists-and-success-stories") ?>">View All</a>
            </div>
            <div class="ANS_blogs">
            <?php
            if ($featured_artists_and_success_stories->have_posts()) {
                while ($featured_artists_and_success_stories->have_posts()) {
                    $featured_artists_and_success_stories->the_post();
                    ?>
                    <!-- blog -->
                    <div class="blog">
                        <div class="blog-thum">
                            <!-- <img src="echo get_the_post_thumbnail();" alt="Blog thumnail"> -->
                            <?php the_post_thumbnail();?>
                        </div>
                        <div class="content">
                            <h4 class="fs-xl"><?php
                            $blog_title = get_the_title();
                            $max_length = 65;
                            if (strlen($blog_title) > $max_length) {
                                echo substr($blog_title, 0, $max_length) . '...';
                            } else {
                                the_title();
                            }
                            ?></h4>
                            <p><?php echo get_the_date('M j, Y'); ?></p>
                            <a class="ANS_btn btn-b-yellow" href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                    </div>
                    <!-- blog -->
                    <?php
                }
                ?>
            </div>
            <?php
            } else {
                echo "<p>No blog found in this category.</p>";
            }
            wp_reset_postdata();
            ?>
        </div>
       </section>


                 <!-- different stores -->
      <section class="ANS_different-stores-wrap">
        <div class="ANS_different-stores-inner ANS_container">
            <div class="top-text">
                <h3 class="fs-4xl">100+ Different Digital Stores</h3>
              <p class="">
                ANS Music is partnered with 100+ digital music services and counting, available across 50 countries and territories globally. Sell your music on every major digital store, like iTunes, Spotify, Apple Music, Deezer, Amazon, and more.
              </p>
            </div>

            <div class="slider_wrap">
              <?php get_template_part('template-parts/content', 'partners'); ?>
            </div>
        </div>
       </section>
    </main>
<?php
get_footer();
