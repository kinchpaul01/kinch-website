<?php get_header(); ?>

<main class="page-content">
  <div class="container">

    <div class="blog-header">
      <h1>Blog</h1>
    </div>

    <?php if (have_posts()) : ?>
      <ul class="post-list">
        <?php while (have_posts()) : the_post(); ?>
          <li class="post-list-item">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="post-meta"><?php echo get_the_date('F j, Y'); ?></div>
            <div class="post-excerpt"><?php the_excerpt(); ?></div>
            <a href="<?php the_permalink(); ?>" class="read-more">Read more &rarr;</a>
          </li>
        <?php endwhile; ?>
      </ul>

      <div class="pagination">
        <?php
          echo paginate_links([
            'prev_text' => '&larr; Newer',
            'next_text' => 'Older &rarr;',
          ]);
        ?>
      </div>

    <?php else : ?>
      <p style="padding: 80px 0; color: var(--text-secondary);">No posts yet. Check back soon.</p>
    <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>
