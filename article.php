<?php theme_include('header'); ?>

<section class="article">
  <img src="<?php echo theme_url('/img/loading.gif'); ?>" class="loading" alt="Loading...">
  <div class="overlay"></div>
  <div class="featured-image" style="background-image: url(<?php echo article_custom_field('featured-image', 'http://www.wallope.com/wp-content/uploads/textures-wallpapers-334-free-wood-texture-grunge-wood-picture.jpg'); ?>);"></div>
  <article class="wrap post">
    <header class="post-header">
      <hgroup>
        <p class="category"><?php echo category_title(); ?></p>
        <h1><?php echo article_title(); ?></h1>
        <p class="lead"><?php echo article_description(); ?></p>
      </hgroup>
    </header>

    <?php echo article_markdown(); ?>

    <hr>

      <div id="about">
        <a href="http://www.scottfahrig.com" target="new" class="avatar"><div id="avatar"></div></a>
          <p id="meta"><?php echo article_custom_field('author-bio'); ?></p>
      </div>
      
    <a href="http://twitter.com/share?url=<?php echo full_url(); ?><?php echo current_url(); ?>&text=<?php echo article_title(); ?>&via=<?php echo twitter_account(); ?>" class="button">Tweet This</a>

  </article>
</section>

<?php theme_include('footer'); ?>