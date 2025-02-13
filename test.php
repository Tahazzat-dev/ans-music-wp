<?php
/*
* Template Name: ACF Field Test template
*/ 

?>

<?php

$field = get_field('home_banner_subtitle');
echo '<pre>';
print_r($field);
echo '</pre>';

echo 'Test hello world';


// <?php echo get_field(''); ?>