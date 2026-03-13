<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<main class="page-content">
  <div class="container">

    <div class="post-header">
      <h1><?php the_title(); ?></h1>
      <div class="post-meta"><?php echo get_the_date('F j, Y'); ?></div>
    </div>

    <div class="post-content">
      <?php the_content(); ?>
    </div>

    <div class="pagination">
      <?php
        $prev = get_previous_post();
        $next = get_next_post();
        if ($prev) echo '<a href="' . get_permalink($prev) . '">&larr; ' . esc_html(get_the_title($prev)) . '</a>';
        if ($next) echo '<a href="' . get_permalink($next) . '">' . esc_html(get_the_title($next)) . ' &rarr;</a>';
      ?>
    </div>

  </div>
</main>

<?php endwhile; ?>

<?php get_footer(); ?>
