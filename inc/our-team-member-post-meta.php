<?php 
/* This file is used to add/update/delete our team members in About us page */ 

function ans_add_team_details_metabox() {
    global $post;
    
    if ($post && get_post_field('post_name', $post->ID) === 'about-us') {
        add_meta_box('ans-team-details', 'Our Team Members', 'ans_render_team_details_metabox', 'page', 'normal', 'high');
    }
}
add_action('add_meta_boxes', 'ans_add_team_details_metabox');

function ans_render_team_details_metabox($post) {
    $team_data = get_post_meta($post->ID, 'ans_team_details', true) ?: [];
    wp_nonce_field('ans_team_details_nonce', 'ans_team_details_nonce');

    echo '<div id="ans-team-members-container">';
    if (!empty($team_data)) {
        foreach ($team_data as $index => $member) {
            ?>
            <div class="ans-team-member">
                <div class="ans-team-header">
                    <strong>Team Member Info</strong>
                    <button type="button" class="ans-toggle-member">&#9660;</button>
                </div>
                <div class="ans-team-body">
                    <label>Name:</label>
                    <input type="text" name="ans_team_details[<?php echo $index; ?>][name]" value="<?php echo esc_attr($member['name'] ?: ''); ?>" placeholder="Name">
                    <label>Role:</label>
                    <input type="text" name="ans_team_details[<?php echo $index; ?>][role]" value="<?php echo esc_attr($member['role'] ?: ''); ?>" placeholder="Role">
                    <label>Linkedin URL:</label>
                    <input type="text" name="ans_team_details[<?php echo $index; ?>][linked_in_url]" value="<?php echo esc_attr($member['linked_in_url'] ?: ''); ?>" placeholder="Linkedin URL">
                    <label>Profile Image:</label>
                    <img class='ans-profile-preview' src="<?php echo esc_attr($member['profile'] ?: ''); ?>" style='max-width: 150px; display: block; margin-top: 10px; margin-bottom:10px;'>
                        <input type="hidden" class="ans-team-profile-url" name="ans_team_details[<?php echo $index; ?>][profile]" value="<?php echo esc_attr($member['profile'] ?: ''); ?>">
                    <button class="ans-upload-profile button">Update Profile Image</button>
                    <br />
                    <label>Description:</label>
                    <textarea name="ans_team_details[<?php echo $index; ?>][des]" placeholder="Description"><?php echo esc_textarea($member['des'] ?: ''); ?></textarea>
                    
                    <button class="ans-remove-team-member button button-secondary">Remove</button>
                </div>
            </div>
            <?php
        }
    }
    echo '</div>';
    echo '<button id="ans-add-team-member" class="button button-primary">Add Team Member</button>';
}

// Save data on post update
function ans_save_team_details($post_id) {
    if (!isset($_POST['ans_team_details_nonce']) || !wp_verify_nonce($_POST['ans_team_details_nonce'], 'ans_team_details_nonce')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['ans_team_details'])) {
        update_post_meta($post_id, 'ans_team_details', $_POST['ans_team_details']);
    }
}
add_action('save_post', 'ans_save_team_details');

function ans_admin_team_details_scripts() {
    $script = "
    jQuery(document).ready(function($) {
        $('#ans-add-team-member').on('click', function(e) {
            e.preventDefault();
            let index = $('.ans-team-member').length;
            let newMember = `
                <div class='ans-team-member'>
                    <div class='ans-team-header'>
                        <strong>Team Member Info</strong>
                        <button type='button' class='ans-toggle-member'>&#9660;</button>
                    </div>
                    <div class='ans-team-body'>
                        <label>Name:</label>
                        <input type='text' name='ans_team_details[\${index}][name]' placeholder='Name'>
                        <label>Role:</label>
                        <input type='text' name='ans_team_details[\${index}][role]' placeholder='Role'>
                        <label>Linkedin URL:</label>
                    <input type='text' name='ans_team_details[\${index}][linked_in_url]'  placeholder='Linkedin URL'>
                        <label>Profile Image:</label>
                        <img class='ans-profile-preview' src='' style='max-width: 100px; display: none; margin-top: 10px;'>
                        <input type='hidden' class='ans-team-profile-url' name='ans_team_details[\${index}][profile]'>
                        <button class='ans-upload-profile button'>Upload Profile Image</button>
                        <br />
                        <label>Description:</label>
                        <textarea name='ans_team_details[\${index}][des]' placeholder='Description'></textarea>
                        <button class='ans-remove-team-member button button-secondary'>Remove</button>
                    </div>
                </div>
            `;
            $('#ans-team-members-container').append(newMember);
        });

        $(document).on('click', '.ans-remove-team-member', function(e) {
            e.preventDefault();
            $(this).closest('.ans-team-member').remove();
        });

        $(document).on('click', '.ans-upload-profile', function(e) {
            e.preventDefault();
            let button = $(this);
            let parent = button.closest('.ans-team-body');
            let mediaUploader = wp.media({
                title: 'Select Profile Image',
                button: { text: 'Use this image' },
                multiple: false
            }).on('select', function() {
                let attachment = mediaUploader.state().get('selection').first().toJSON();
                parent.find('.ans-team-profile-url').val(attachment.url);
                parent.find('.ans-profile-preview').attr('src', attachment.url).show();
                
                // Remove the 'display:none' style from the img-preview div and show the image
                parent.find('.img-preview').css('display', 'block').find('img').attr('src', attachment.url);
            }).open();
        });

        $(document).on('click', '.ans-toggle-member', function() {
            $(this).closest('.ans-team-member').find('.ans-team-body').slideToggle();
            $(this).text($(this).text() === '▼' ? '▲' : '▼');
        });
    });
    ";
    echo "<script>{$script}</script>";

    $css = "
    #ans-team-members-container { display: flex; flex-direction: column; gap: 20px; }
    .ans-team-member { padding: 10px; border: 1px solid #ddd; margin-bottom: 10px; }
    .ans-team-header { display: flex; justify-content: space-between; background: #f7f7f7; padding: 8px; cursor: pointer; }
    .ans-team-body { display: none; padding: 10px; }
    .ans-team-body label { margin-bottom: 5px; display: block; margin-top: 10px; }
    .ans-team-body input, .ans-team-body textarea { padding: 5px 10px; display: block; width: 100%; margin-bottom: 5px; }
    .ans-upload-profile { margin: 10px 0; }
    .ans-remove-team-member { background: #ff736f !important; color: white !important; transition: 0.3s; }
    .ans-remove-team-member:hover { background: #fb4641 !important; }
    .ans-profile-preview { max-width: 100px; display: none; margin-top: 10px; border-radius: 5px; border: 1px solid #ccc; }
    ";
    echo "<style>{$css}</style>";
}
add_action('admin_footer', 'ans_admin_team_details_scripts');
