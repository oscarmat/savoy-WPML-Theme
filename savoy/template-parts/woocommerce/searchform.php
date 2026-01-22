<div id="nm-header-search">
    <a href="#" id="nm-header-search-close" class="nm-font nm-font-close2"></a>
    
    <div class="nm-header-search-wrap">
        <div class="nm-header-search-form-wrap">
            <form id="nm-header-search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <i class="nm-font nm-font-search"></i>
                <input type="text" id="nm-header-search-input" autocomplete="off" value="" name="s" placeholder="<?php esc_attr_e( 'Search products', 'woocommerce' ); ?>&hellip;" />
                <input type="hidden" name="post_type" value="product" />
            </form>
        </div>

        <?php
            global $nm_theme_options;
            if ( $nm_theme_options['shop_search_suggestions'] ) :
            
            // Column class
            $columns_class = apply_filters( 'nm_search_suggestions_product_columns_class', 'block-grid-single-row xsmall-block-grid-2 small-block-grid-4 medium-block-grid-5 large-block-grid-6');
        ?>
        <div id="nm-search-suggestions-notice">
            <span class="txt-press-enter"><?php printf( esc_html__( 'press %sEnter%s to search', 'nm-framework' ), '<u>', '</u>' ); ?></span>
            <span class="txt-has-results"><?php esc_html_e( 'Search results', 'woocommerce' ); ?>:</span>
            <span class="txt-no-results"><?php esc_html_e( 'No products found.', 'woocommerce' ); ?></span>
        </div>
        
        <div id="nm-search-suggestions">
            <div class="nm-search-suggestions-inner">
                <ul id="nm-search-suggestions-product-list" class="<?php echo esc_attr( $columns_class ); ?>"></ul>
            </div>
        </div>
        <?php else : ?>
        <div id="nm-header-search-notice"><span><?php printf( esc_html__( 'press %sEnter%s to search', 'nm-framework' ), '<u>', '</u>' ); ?></span></div>
        <?php endif; ?>
    </div>
</div>
