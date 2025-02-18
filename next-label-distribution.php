<?php
/**
 * Template Name: Next label distribution page
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


      <!-- services -->

      <div class="ANS_next-label-distribution-wrap">
          <div class="ANS_next-label-distribution-inner ANS_flex ANS_container flex_column">


          <!-- distribution info -->
           <div class="distribution-container">
             <h3 class="fs-4xl">Catalog Management</h3>
             <p class="fs-base">
             Don’t just manage your catalog—own it. Revelator Pro gives you full control, centralizing your digital assets so you can focus on developing your artists, boosting revenue, and scaling your label. Optimize metadata for global reach and unlock new monetization opportunities across platforms. Distribute seamlessly, monetize effortlessly, and stay ahead with tools like DSP integration and Dolby Atmos support. Keep your label agile, your vision clear, and your business thriving in an ever-evolving market.
             </p>

             <div class="section-thum">
                 <img src="https://www.datocms-assets.com/116987/1727946997-catalog-management-solutions.png?auto=format" alt="section thumnail">
             </div>

              <div class="key-features">
                <h4 class="fs-3xl feature-title">Key Features</h4>

                <div class="features">
                    <!-- feature card -->
                    <div class="feature-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32" fill="none" data-v-5ebbf696=""><path d="M16 0L20.3215 11.6785L32 16L20.3215 20.3215L16 32L11.6785 20.3215L0 16L11.6785 11.6785L16 0Z" fill="#EBD510" data-v-5ebbf696=""></path></svg>
                    <h4 class="fs-xl">Centralized Asset Control</h4>
                    <p>Manage all assets from one platform.</p>
                    </div>
                    <!-- feature card -->
                    <div class="feature-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32" fill="none" data-v-5ebbf696=""><path d="M16 0L20.3215 11.6785L32 16L20.3215 20.3215L16 32L11.6785 20.3215L0 16L11.6785 11.6785L16 0Z" fill="#EBD510" data-v-5ebbf696=""></path></svg>
                    <h4 class="fs-xl">Centralized Asset Control</h4>
                    <p>Manage all assets from one platform.</p>
                    </div>
                    <!-- feature card -->
                    <div class="feature-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32" fill="none" data-v-5ebbf696=""><path d="M16 0L20.3215 11.6785L32 16L20.3215 20.3215L16 32L11.6785 20.3215L0 16L11.6785 11.6785L16 0Z" fill="#EBD510" data-v-5ebbf696=""></path></svg>
                    <h4 class="fs-xl">Centralized Asset Control</h4>
                    <p>Manage all assets from one platform.</p>
                    </div>
                    <!-- feature card -->
                    <div class="feature-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32" fill="none" data-v-5ebbf696=""><path d="M16 0L20.3215 11.6785L32 16L20.3215 20.3215L16 32L11.6785 20.3215L0 16L11.6785 11.6785L16 0Z" fill="#EBD510" data-v-5ebbf696=""></path></svg>
                    <h4 class="fs-xl">Centralized Asset Control</h4>
                    <p>Manage all assets from one platform.</p>
                    </div>
                    <!-- feature card -->
                    <div class="feature-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32" fill="none" data-v-5ebbf696=""><path d="M16 0L20.3215 11.6785L32 16L20.3215 20.3215L16 32L11.6785 20.3215L0 16L11.6785 11.6785L16 0Z" fill="#EBD510" data-v-5ebbf696=""></path></svg>
                    <h4 class="fs-xl">Centralized Asset Control</h4>
                    <p>Manage all assets from one platform.</p>
                    </div>
                </div> 
              </div>
           </div>
          <!-- distribution info -->
           <div class="distribution-container">
             <h3 class="fs-4xl">Catalog Management</h3>
             <p class="fs-base">
             Don’t just manage your catalog—own it. Revelator Pro gives you full control, centralizing your digital assets so you can focus on developing your artists, boosting revenue, and scaling your label. Optimize metadata for global reach and unlock new monetization opportunities across platforms. Distribute seamlessly, monetize effortlessly, and stay ahead with tools like DSP integration and Dolby Atmos support. Keep your label agile, your vision clear, and your business thriving in an ever-evolving market.
             </p>

             <div class="section-thum">
                 <img src="https://www.datocms-assets.com/116987/1727946997-catalog-management-solutions.png?auto=format" alt="section thumnail">
             </div>

              <div class="key-features">
                <h4 class="fs-3xl feature-title">Key Features</h4>

                <div class="features">
                    <!-- feature card -->
                    <div class="feature-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32" fill="none" data-v-5ebbf696=""><path d="M16 0L20.3215 11.6785L32 16L20.3215 20.3215L16 32L11.6785 20.3215L0 16L11.6785 11.6785L16 0Z" fill="#EBD510" data-v-5ebbf696=""></path></svg>
                    <h4 class="fs-xl">Centralized Asset Control</h4>
                    <p>Manage all assets from one platform.</p>
                    </div>
                    <!-- feature card -->
                    <div class="feature-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32" fill="none" data-v-5ebbf696=""><path d="M16 0L20.3215 11.6785L32 16L20.3215 20.3215L16 32L11.6785 20.3215L0 16L11.6785 11.6785L16 0Z" fill="#EBD510" data-v-5ebbf696=""></path></svg>
                    <h4 class="fs-xl">Centralized Asset Control</h4>
                    <p>Manage all assets from one platform.</p>
                    </div>
                    <!-- feature card -->
                    <div class="feature-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32" fill="none" data-v-5ebbf696=""><path d="M16 0L20.3215 11.6785L32 16L20.3215 20.3215L16 32L11.6785 20.3215L0 16L11.6785 11.6785L16 0Z" fill="#EBD510" data-v-5ebbf696=""></path></svg>
                    <h4 class="fs-xl">Centralized Asset Control</h4>
                    <p>Manage all assets from one platform.</p>
                    </div>
                    <!-- feature card -->
                    <div class="feature-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32" fill="none" data-v-5ebbf696=""><path d="M16 0L20.3215 11.6785L32 16L20.3215 20.3215L16 32L11.6785 20.3215L0 16L11.6785 11.6785L16 0Z" fill="#EBD510" data-v-5ebbf696=""></path></svg>
                    <h4 class="fs-xl">Centralized Asset Control</h4>
                    <p>Manage all assets from one platform.</p>
                    </div>
                    <!-- feature card -->
                    <div class="feature-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32" fill="none" data-v-5ebbf696=""><path d="M16 0L20.3215 11.6785L32 16L20.3215 20.3215L16 32L11.6785 20.3215L0 16L11.6785 11.6785L16 0Z" fill="#EBD510" data-v-5ebbf696=""></path></svg>
                    <h4 class="fs-xl">Centralized Asset Control</h4>
                    <p>Manage all assets from one platform.</p>
                    </div>
                </div>
              </div>
           </div>

           <!-- distribution info -->
          </div>
      </div>

      
    </main>

<?php
get_footer();
