<?php 
/* This file is used to add/update/delete our expertise info in About us page */ 

function ans_add_our_expertise_metabox() {
    global $post;
    
    if ($post && get_post_field('post_name', $post->ID) === 'about-us') {
        add_meta_box('ans-expertise', 'Our Expertises', 'ans_render_our_expertise_metabox', 'page', 'normal', 'high');
    }
}
add_action('add_meta_boxes', 'ans_add_our_expertise_metabox');

function ans_render_our_expertise_metabox($post) {
    $team_data = get_post_meta($post->ID, 'ans_our_expertise', true) ?: [];
    wp_nonce_field('ans_our_expertise_nonce', 'ans_our_expertise_nonce');

    echo '<div id="ans-our-expertises-container">';
    if (!empty($team_data)) {
        foreach ($team_data as $index => $member) {
            ?>
            <div class="ans-our-expertise">
                <div class="ans-our-expertise-header">
                    <strong>Expertise Info</strong>
                    <button type="button" class="ans-toggle-expertise">&#9660;</button>
                </div>
                <div class="ans-our-expertise-body">
                    <label>Name:</label>
                    <input type="text" name="ans_our_expertise[<?php echo $index; ?>][name]" value="<?php echo esc_attr($member['name'] ?: ''); ?>" placeholder="Name">
                    <label>Expertise Icon:</label>
                    <img class='ans-our-expertise-icon-preview' src="<?php echo esc_attr($member['profile'] ?: ''); ?>" style='max-width: 150px; display: block; margin-top: 10px; margin-bottom:10px;'>
                        <input type="hidden" class="ans-our-expertise-icon" name="ans_our_expertise[<?php echo $index; ?>][profile]" value="<?php echo esc_attr($member['profile'] ?: ''); ?>">
                    <button class="ans-upload-expertise-icon-btn">Update expertise icon</button>
                    <br />
                    <button class="ans-remove-our-expertise button button-secondary">Remove</button>
                </div>
            </div>
            <?php
        }
    }
    echo '</div>';
    echo '<button id="ans-add-our-expertise" class="button button-primary">Add Expertise</button>';
}

// Save data on post update
function ans_save_our_expertise($post_id) {
    if (!isset($_POST['ans_our_expertise_nonce']) || !wp_verify_nonce($_POST['ans_our_expertise_nonce'], 'ans_our_expertise_nonce')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['ans_our_expertise'])) {
        update_post_meta($post_id, 'ans_our_expertise', $_POST['ans_our_expertise']);
    }
}
add_action('save_post', 'ans_save_our_expertise');

function ans_admin_expertise_details_scripts() {
    $script = "
    jQuery(document).ready(function($) {
        $('#ans-add-our-expertise').on('click', function(e) {
            e.preventDefault();
            let index = $('.ans-our-expertise').length;
            let newMember = `
                <div class='ans-our-expertise'>
                    <div class='ans-our-expertise-header'>
                        <strong>Expertise Info</strong>
                        <button type='button' class='ans-toggle-expertise'>&#9660;</button>
                    </div>
                    <div class='ans-our-expertise-body'>
                        <label>Name:</label>
                        <input type='text' name='ans_our_expertise[\${index}][name]' placeholder='Name'>
                        <label>Expertise Icon:</label>
                        <img class='ans-our-expertise-icon-preview' src='' style='max-width: 100px; display: none; margin-top: 10px;'>
                        <input type='hidden' class='ans-our-expertise-icon' name='ans_our_expertise[\${index}][profile]'>
                        <button class='ans-upload-expertise-icon-btn'>Upload Expertise Icon</button>
                        <br />
                        <button class='ans-remove-our-expertise button button-secondary'>Remove</button>
                    </div>
                </div>
            `;
            $('#ans-our-expertises-container').append(newMember);
        });

        $(document).on('click', '.ans-remove-our-expertise', function(e) {
            e.preventDefault();
            $(this).closest('.ans-our-expertise').remove();
        });

        $(document).on('click', '.ans-upload-expertise-icon-btn', function(e) {
            e.preventDefault();
            let button = $(this);
            let parent = button.closest('.ans-our-expertise-body');
            let mediaUploader = wp.media({
                title: 'Select expertise icon',
                button: { text: 'Use this icon' },
                multiple: false
            }).on('select', function() {
                let attachment = mediaUploader.state().get('selection').first().toJSON();
                parent.find('.ans-our-expertise-icon').val(attachment.url);
                parent.find('.ans-our-expertise-icon-preview').attr('src', attachment.url).show();
                
                // Remove the 'display:none' style from the img-preview div and show the image
                parent.find('.img-preview').css('display', 'block').find('img').attr('src', attachment.url);
            }).open();
        });

        $(document).on('click', '.ans-toggle-expertise', function() {
            $(this).closest('.ans-our-expertise').find('.ans-our-expertise-body').slideToggle();
            $(this).text($(this).text() === '▼' ? '▲' : '▼');
        });
    });
    ";
    echo "<script>{$script}</script>";

    $css = "
    #ans-our-expertises-container { display: flex; flex-direction: column; gap: 20px; }
    .ans-our-expertise { padding: 10px; border: 1px solid #ddd; margin-bottom: 10px; }
    .ans-our-expertise-header { display: flex; justify-content: space-between; background: #f7f7f7; padding: 8px; cursor: pointer; }
    .ans-our-expertise-body { display: none; padding: 10px; }
    .ans-our-expertise-body label { margin-bottom: 5px; display: block; margin-top: 10px; }
    .ans-our-expertise-body input, .ans-our-expertise-body textarea { padding: 5px 10px; display: block; width: 100%; margin-bottom: 5px; }
    .ans-upload-expertise-icon-btn { margin: 10px 0; }
    .ans-remove-our-expertise { background: #ff736f !important; color: white !important; transition: 0.3s; }
    .ans-remove-our-expertise:hover { background: #fb4641 !important; }
    .ans-our-expertise-icon-preview { max-width: 100px; display: none; margin-top: 10px; border-radius: 5px; border: 1px solid #ccc; }
    ";
    echo "<style>{$css}</style>";
}
add_action('admin_footer', 'ans_admin_expertise_details_scripts');
