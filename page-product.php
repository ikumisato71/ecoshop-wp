<?php
/*
Template Name:item

*/
?>
<div class="product-information">
    <div class="product-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kodomofuku_girl.png" alt="">
    </div>
    <div class="item-group">
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
                色
            </div>
            <div class="text">
                <p class="contents">
                    <?php the_field('color'); ?>
                </p>
            </div>
        </div>
        <div class="item">
            <div class="title">
                商品サイズ
            </div>
            <div class="text">
                <p class="contents">
                    <?php the_field('size'); ?>
                </p>
            </div>
        </div>
        <div class="item">
            <div class="title">
                商品番号
            </div>
            <div class="text">
                <p class="contents">
                    <?php the_field('number'); ?>
                </p>
            </div>
        </div>
    </div>
</div>