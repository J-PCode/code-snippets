//this gets category image and header in my woocommerce store. 
<div class="row text-center">
    <?php
    $categories = get_categories(array('taxonomy' => 'product_cat', 'hide_empty' => false));
    foreach ($categories as $category) {
        $cat_thumb_id = get_field('etusivu_kuva', 'product_cat_'.$category->term_id, false);
        if ($cat_thumb_id) {
            $cat_thumb_url = wp_get_attachment_image_src($cat_thumb_id, 'medium')[0];
            $cat_name = $category->name;
    ?>
             <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header text-center" style="margin-bottom: 20px;">
                        <h5 class="mb-0"><?php echo esc_html($cat_name); ?></h5>
                    </div>
                    <img src="<?php echo esc_url($cat_thumb_url); ?>" class="card-img-top" alt="<?php echo esc_attr($cat_name); ?>">
                    <div class="card-body">
                        <p class="card-text"><?php echo esc_html($category->description); ?></p>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
</div>