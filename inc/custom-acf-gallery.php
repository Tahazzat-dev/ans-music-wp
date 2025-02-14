<?php 
/*
This is a custom acf gallery theme ralted plugin to add gallery options in a specific tab of ACF. 
As ACF does not provide gallery features in free versions. This is fullfill that need.
*/ 
function add_custom_gallery_to_front_page_acf($field) {
    if ($field['_name'] == 'trusted_by_new_breads_and_artists') {
        $gallery_images = $field['value'];
    $images = $gallery_images ? explode(',', $gallery_images) : [];
        // echo "<pre>"; 
        // print_r($field);
        // echo "</pre>";
        // ?>
       <div id="frontpage-gallery-wrapper">
    <div id="frontpage-gallery-preview" style="margin-top: 10px;">
            <?php foreach ($images as $image) : ?>
                <div class="gallery-image" style="display:inline-block;position:relative;margin:5px;">
                    <img src="<?php echo esc_url($image); ?>" style="width:100px;height:auto;">
                    <button type="button" class="gallery-image-remove" style="position:absolute;top:0;right:0;background:red;color:white;border:none;padding:2px 5px;cursor:pointer;border-radius:50%;">X</button>
                </div>
            <?php endforeach; ?>
        </div>

        <button class="button" id="upload_frontpage_gallery">Add image</button>   
    </div>
    <script>
        jQuery(document).ready(function($) {

            // hide the textarea 
    $('#<?php echo $field['id']; ?>').hide();
            var mediaUploader;
            $('#upload_frontpage_gallery').click(function(e) {
                e.preventDefault();
                if (mediaUploader) {
                    mediaUploader.open();
                    return;
                }
                mediaUploader = wp.media({
                    title: 'Select Gallery Images',
                    button: { text: 'Add Images' },
                    multiple: true 
                });
                mediaUploader.on('select', function() {
                    var images = mediaUploader.state().get('selection').map(function(image) {
                        return image.toJSON().url;
                    });

                    // Get the existing gallery images from the hidden input
                    var existingImages = $('#<?php echo $field['id']; ?>').val();
                    var allImages = existingImages ? existingImages.split(',') : [];
                    allImages = allImages.concat(images); // Append newly selected images

                    // Update the hidden input value
                    $('#<?php echo $field['id']; ?>').val(allImages.join(','));

                    // Preview the selected images
                    var preview = $('#frontpage-gallery-preview');
                    images.forEach(function(url) {
                        var imgHtml = '<div class="gallery-image" style="display:inline-block;position:relative;margin:5px;">' +
                            '<img src="' + url + '" style="width:100px;height:auto;">' +
                            '<button type="button" class="gallery-image-remove" style="position:absolute;top:0;right:0;background:red;color:white;border:none;padding:2px 5px;cursor:pointer;">X</button>' +
                            '</div>';
                        preview.append(imgHtml);
                    });
                });
                mediaUploader.open();
            });

            // Remove Image functionality
            $(document).on('click', '.gallery-image-remove', function() {
                var parentDiv = $(this).closest('.gallery-image');
                var imgSrc = parentDiv.find('img').attr('src');

                // Remove from hidden input
                var textareaId = '#<?php echo $field['id']; ?>';
                var existingImages = $(textareaId).val().split(',');
                existingImages = existingImages.filter(function(image) {
                    return image !== imgSrc;
                });
                
               $(textareaId).val(existingImages.join(','));
                // Remove from the preview
                parentDiv.remove();
            });
        });
    </script>
        <?php
    }

    return $field;
}
add_filter('acf/render_field', 'add_custom_gallery_to_front_page_acf');
