<?php get_header(); ?>

<h2>Latest Blog Posts</h2>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php the_excerpt(); ?></p>
  </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
