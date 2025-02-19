<?php
/**
 *
 * @package ansmusic
 */

get_header();
?>

<main class="ANS_main-wrapper ">
    <section class="ANS_about-banner-wrapper ANS_distribution_partners_wrap">
        <!-- banner content -->
        <div class="ANS_about-banner-bg">
            <picture>
                <source media="(min-width: 768px)"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about-us-banner-bg.jpg" />
                <source media="(max-width: 767px)"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about-us-banner-bg.jpg" />
                <img data-aos="fade-down"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/about-us-banner-bg.jpg"
                    alt="Banner image" />
            </picture>

            <div class="banner-overlay"></div>
        </div>

        <!-- banner content -->
        <div class="ANS_about-banner-container ANS_flex flex_column">
            <div style="max-width:1000px; overflow: hidden;"
                class="ANS_about-banner-content ANS_container ANS_flex flex_column flex_align_center justify_center">
                <h2 class="fs-4xl">
                    <?php the_title(); ?>
                </h2>
                <p class="fs-xl-lh-normal">some description</p>
                <a href="#" class="ANS_btn btn-b-yellow">START NOW</a>
            </div>
        </div>
    </section>

    <section class="ANS_applying-process-wrap">
        <div class="ANS_container ANS_applying-process">
                <div class="top-text">
                        <h3 class="fs-5xl title">How to get your music on facebook</h3>
                        <p class="fs-xl-lh-normal">Follow these steps to distribute your music to Facebook -</p>
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
                            <h3 class="fs-md">Create</h3>
                            <p>Signup for a free GalleryVision account. Upload your music, art work, and track info to
                                get your songs on Spotify.</p>
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
                            <h3 class="fs-md">Approval</h3>
                            <p>Get a free music review of your assets from our team. Once approved, your music is ready to go on spotify</p>
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
                            <h3 class="fs-md">Release</h3>
                            <p>GalleryVision will release your music on spotify and all streaming platforms worldwide.</p>
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
                            <h3 class="fs-md">Get Paid</h3>
                            <p>When your music is live in stores, you will start earning your money. You keep 100% of your earnings.</p>
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


    <section class="why-upload-music-wrap">
        <div class="ANS_container why-upload-music-inner ANS_flex flex_align_center justify_between">
            <div class="section-thum">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partner-thumnail.png" alt="Section thumnail">
            </div>

            <div class="content">
                <h2 class="fs-4xl">Why Launch your music on <span class="clr-txt">facebook</span></h2>
                <p class="fs-xl-lh-md">some description</p>
                <ul class="ANS_flex flex_column">
                    <li>key points 1</li>
                    <li>key points 2</li>
                    <li>key points 3</li>
                    <li>key points 4</li>
                    <li>key points 5</li>
                </ul>
                <p>Extra info short text</p>
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
