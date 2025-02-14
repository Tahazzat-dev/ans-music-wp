<?php
/**
 * Template part for displaying partners marquee slider
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ansmusic
 */


$partner_images = get_theme_mod('custom_gallery_images', '');
$partner_images_array = array();
if ($partner_images) {
    $partner_images_array = explode(',', $partner_images);
}
?>
<div class="ANS_partners-inner ANS_container ANS_marquee-slider-wrapper">
    <div class="ANS_flex flex_align_center ANS_marquee-slider">
        <?php
        for ($i = 0; $i < 2; $i++) {
            foreach ($partner_images_array as $partner_img_url) {
                printf('<img src="%s" alt="icon" />', $partner_img_url);
            }
        }
        ?>
    </div>
</div>