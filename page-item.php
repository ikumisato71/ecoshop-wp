
<?php
/*
Template Name:item
Template post Type:post

*/
?>
<?php get_header();?>

<div class="product-information">
    <div class="product-img">
    <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (3).jpg" alt="シャンプー" />
    </div>
    <div class="item-group">
        <div class="item">
            <div class="title">
                商品名
            </div>
            <div class="text">
                <p class="contents">
                <?php the_field('shampoo'); ?> 
                </p>
            </div>
        </div>
        <div class="item">
            <div class="title">
                価格
            </div>
            <div class="text">
                <p class="contents">
                <?php echo number_format(get_field('price')); ?>円
                </p>
            </div>
        </div>
        <div class="item">
            <div class="title">
                商品説明
            </div>
            <div class="text">
                <p class="contents">
                    <?php the_field('description'); ?>
                </p>
            </div>
        </div>
        <div class="item">
            <div class="title">
                製造地
            </div>
            <div class="text">
                <p class="contents">
                    <?php the_field('country'); ?>
                </p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>