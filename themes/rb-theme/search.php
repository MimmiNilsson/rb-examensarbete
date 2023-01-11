<?php get_header(); ?>
<?php
$s = get_search_query();


$args = array(
  's' => $s
);

// The Query
$the_query = new WP_Query($args);
?>

<div class="">


</div>

<?php
get_footer();