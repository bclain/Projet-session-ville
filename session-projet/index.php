<div data-elementor-type="loop-item" data-elementor-id="532" class="elementor elementor-532 e-loop-item e-loop-item-950 post-950 product type-product status-publish has-post-thumbnail product_cat-homme first instock sold-individually shipping-taxable purchasable product-type-simple" data-elementor-post-type="elementor_library" data-custom-edit-handle="1">
    <div class="elementor-element elementor-element-db28b35 e-con-full article-div e-flex e-con e-parent" data-id="db28b35" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}" data-core-v316-plus="true">
        <a class="elementor-element elementor-element-87dea6d e-flex e-con-boxed e-con e-child" data-id="87dea6d" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}" href="<?php echo esc_url($product->get_permalink()); ?>" spellcheck="false">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-c17dd57 elementor-widget elementor-widget-theme-post-featured-image elementor-widget-image" data-id="c17dd57" data-element_type="widget" data-widget_type="theme-post-featured-image.default">
                    <div class="elementor-widget-container">
                        <!--<img decoding="async" fetchpriority="high" width="800" height="437" src="https://oumi-friperie.com/wp-content/uploads/2023/10/Pull-Lacoste-face-1024x559.jpg" class="attachment-large size-large wp-image-939" alt="" srcset="https://oumi-friperie.com/wp-content/uploads/2023/10/Pull-Lacoste-face-1024x559.jpg 1024w, https://oumi-friperie.com/wp-content/uploads/2023/10/Pull-Lacoste-face-300x164.jpg 300w, https://oumi-friperie.com/wp-content/uploads/2023/10/Pull-Lacoste-face-768x420.jpg 768w, https://oumi-friperie.com/wp-content/uploads/2023/10/Pull-Lacoste-face-1536x839.jpg 1536w, https://oumi-friperie.com/wp-content/uploads/2023/10/Pull-Lacoste-face-2048x1119.jpg 2048w, https://oumi-friperie.com/wp-content/uploads/2023/10/Pull-Lacoste-face-1320x721.jpg 1320w, https://oumi-friperie.com/wp-content/uploads/2023/10/Pull-Lacoste-face-600x328.jpg 600w" sizes="(max-width: 800px) 100vw, 800px">-->

                        <div class="eszlwcf-product-thumb">
                            <?php $front_thumb = Eszpf_Custom_Function::eszlwcf_get_products_image_url(get_post_thumbnail_id(), 'product_thumbnail_size', $settings) ?>
                            <img class="eszlwcf-product-thumbnail-front eszlwcf-product-thumbnail" src="<?php echo esc_url($front_thumb); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)); ?>">
                            <?php $image_id = $product->get_gallery_image_ids();
                            if (!empty($image_id)) :
                                $image_id = array_shift($image_id);
                                $back_thumb = Eszpf_Custom_Function::eszlwcf_get_products_image_url($image_id, 'product_thumbnail_size', $settings); ?>
                                <img class="eszlwcf-product-thumbnail-back eszlwcf-product-thumbnail" src="<?php echo esc_url($back_thumb); ?>" alt="<?php echo esc_attr(get_post_meta($image_id, '_wp_attachment_image_alt', true)); ?>">
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
                <div class="elementor-element elementor-element-668c9e6 e-flex e-con-boxed e-con e-child" data-id="668c9e6" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-97f2b96 elementor-widget__width-initial titre-art elementor-widget elementor-widget-woocommerce-product-title elementor-page-title elementor-widget-heading" data-id="97f2b96" data-element_type="widget" data-widget_type="woocommerce-product-title.default">
                            <div class="elementor-widget-container">
                                <h3 class="product_title entry-title elementor-heading-title elementor-size-default"><?php echo esc_html($product->get_title()); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-a173f5b article-prix e-con-full e-flex e-con e-child" data-id="a173f5b" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                    <div class="elementor-element elementor-element-d91cea5 e-con-full taille e-flex e-con e-child" data-id="d91cea5" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                        <div class="elementor-element elementor-element-b94a766 elementor-widget elementor-widget-heading" data-id="b94a766" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default">Taille:</p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-566a506 taille-car elementor-widget__width-auto elementor-widget elementor-widget-woocommerce-product-additional-information" data-id="566a506" data-element_type="widget" span="" data-widget_type="woocommerce-product-additional-information.default">
                            <div class="elementor-widget-container">
                                <?php

                                $available_attributes = $product->get_attributes();
                                foreach ($available_attributes as $key => $attribute) {
                                    if ($key === "taille-perso") {
                                        $name = $attribute->get_name();
                                        $value = implode(", ", $attribute->get_options());
                                        echo "
                            <p class='$key'> $value</p>
                            
                            ";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-6580c55 e-con-full e-flex e-con e-child" data-id="6580c55" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                        <div class="elementor-element elementor-element-4f4f13f elementor-product-price-block-yes elementor-widget elementor-widget-woocommerce-product-price" data-id="4f4f13f" data-element_type="widget" data-widget_type="woocommerce-product-price.default">
                            <div class="elementor-widget-container">
                                <p class="price"><?php echo $product->get_price_html(); ?></span></p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-842d42d valeur e-con-full e-flex e-con e-child" data-id="842d42d" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                            <div class="elementor-element elementor-element-b81252d elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="b81252d" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">Valeur:</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-75dfb29 valeur-car elementor-widget__width-auto elementor-widget elementor-widget-woocommerce-product-additional-information" data-id="75dfb29" data-element_type="widget" span="" data-widget_type="woocommerce-product-additional-information.default">
                                <div class="elementor-widget-container">

                                    <?php

                                    $available_attributes = $product->get_attributes();
                                    foreach ($available_attributes as $key => $attribute) {
                                        if ($key === "valeur") {
                                            $name = $attribute->get_name();
                                            $value = implode(", ", $attribute->get_options());
                                            echo "
                                <p class='$key'> $value</p>
                                
                                ";
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </a>
        <div class="elementor-element elementor-element-029771f elementor-align-center elementor-widget__width-initial elementor-widget elementor-widget-button" data-id="029771f" data-element_type="widget" data-widget_type="button.default">
            <div class="elementor-widget-container">
                <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm" onclick="addToCart(<?php echo get_the_ID(); ?>)">
                        <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-icon elementor-align-icon-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="22" viewBox="0 0 25 22" fill="none">
                                    <path d="M23.5016 8.23661H18.141L13.2392 0.985955C13.1364 0.835405 12.9976 0.712267 12.835 0.62749C12.6725 0.542714 12.4912 0.498926 12.3073 0.50002C12.1235 0.501114 11.9428 0.547055 11.7813 0.63376C11.6197 0.720465 11.4824 0.845245 11.3815 0.997008L6.47972 8.23661H1.11912C0.503605 8.23661 0 8.73399 0 9.34189C0 9.44137 -4.16906e-08 9.54084 0.0447649 9.64032L2.88734 19.8863C3.14473 20.8147 4.00646 21.5 5.03605 21.5H19.5846C20.6142 21.5 21.476 20.8147 21.7445 19.8863L24.5871 9.64032L24.6207 9.34189C24.6207 8.73399 24.1171 8.23661 23.5016 8.23661ZM12.3103 3.59442L15.4439 8.23661H9.1768L12.3103 3.59442ZM19.5846 19.2894H5.03605L2.58517 10.4472H22.0467L19.5846 19.2894ZM12.3103 12.6577C11.0793 12.6577 10.0721 13.6525 10.0721 14.8683C10.0721 16.0841 11.0793 17.0789 12.3103 17.0789C13.5414 17.0789 14.5486 16.0841 14.5486 14.8683C14.5486 13.6525 13.5414 12.6577 12.3103 12.6577Z" fill="white"></path>
                                </svg> </span>
                            <span class="elementor-button-text">Ajouter au pannier</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>