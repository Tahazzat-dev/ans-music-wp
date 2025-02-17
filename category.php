<?php
/**
 *
 * @package ansmusic
 */

get_header();
?>

<main class="ANS_main-wrapper">


    <?php
    // Blogs page customization related ACF fields
    $category = get_queried_object();
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 20,
        'category_name' => $category->slug,
        'orderby' => 'date',
        'order' => 'ASC',
        'paged' => $paged,
    );

    $posts = new WP_Query($args);
    //   $category_id = $category->term_id;
    ?>
    <section class="ANS_about-banner-wrapper">
        <!-- banner content -->
        <div class="ANS_about-banner-bg">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri();?>/assets/img/about-us-banner-bg.jpg" />
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri();?>/assets/img/about-us-banner-bg.jpg" />
                <img data-aos="fade-down" src="<?php echo get_template_directory_uri();?>/assets/img/about-us-banner-bg.jpg" alt="Banner image" />
            </picture>

            <div class="banner-overlay"></div>
        </div>

        <!-- banner content -->
        <div class="ANS_about-banner-container ANS_flex flex_column">
            <div class="ANS_about-banner-content ANS_container ANS_flex flex_column flex_align_center justify_center">
                <h2 class="fade-up  fs-4xl">
                        CATEGORY: <?php echo strtoupper($category->name); ?>
                </h2>
                <!-- <h3 data-aos="zoom-in" class="fs-3xl"><?php // echo strtoupper($banner_subtitle); ?></h3> -->
            </div>
        </div>
    </section>

    <!-- industry insights -->
  
    <section class="ANS_blog-section-wrap">
        <div class="ANS_blog-section-inner ANS_container">
            <!-- <div class="top-text ANS_flex flex_align_center justify_between">
                <h3 class="fs-4xl"><?php // echo $category->name; ?></h3>
            </div> -->
            <?php
            if ($posts->have_posts()) {
                echo '<div class="ANS_blogs">';
                while ($posts->have_posts()) {
                    $posts->the_post();
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
                echo '</div>';
                echo '<div class="ANS_blogs-pagination">';

                // Pagination
                echo paginate_links(array(
                    'total' => $posts->max_num_pages,
                ));
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
    <section class="ANS_blog-section-wrap">
    </section>
</main>
<?php
get_footer();
