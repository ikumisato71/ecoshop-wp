<?php
/*
Template Name: news
Template Post Type: post
*/
?>
<?php get_header(); ?>

<?php if(have_posts()) :?>
  <?php while (have_posts()) : the_post() ; ?>
  <?php
              $cat = get_the_category();
              $catslug = $cat[0]->slug;
              $catname = $cat[0]->cat_name;
            ?>
            
              <div class="tab_panel_title"><?php echo $catname; ?></div>
        <?php endwhile; ?>
    <?php endif; ?>

  <?php
    the_content();
    ?>

    <?php get_footer(); ?>