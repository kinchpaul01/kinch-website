<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="nav">
  <div class="container">
    <a href="https://kinch.ai" class="nav-brand">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/kinch-logo.png" alt="Kinch - AI Strategy">
    </a>
    <button class="nav-toggle" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <ul class="nav-links">
      <li><a href="https://kinch.ai">Home</a></li>
      <li><a href="https://kinch.ai/engagements.html">Engagements</a></li>
      <li><a href="https://kinch.ai/about.html">About</a></li>
      <li><a href="<?php echo home_url('/blog'); ?>" class="active">Blog</a></li>
      <li><a href="https://kinch.ai/contact.html">Contact</a></li>
    </ul>
  </div>
</nav>
