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

<?php echo $b; ?>


if ($query->have_posts()):
    while ($query->have_posts()):
      $query->the_post(); ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p><?php the_excerpt(); ?></p>
    <?php endwhile;
    wp_reset_postdata();
  else:
    echo 'No posts found.';
  endif;