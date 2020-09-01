<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <input 
        type="search" 
        class="search-field form-control" 
        placeholder="<?php echo esc_attr_x( 'Search here and hit enter&hellip;', 'placeholder', 'san-wp-bootstrap' ); ?>" 
        value="<?php echo esc_attr( the_search_query() ); ?>" 
        name="s" 
        title="<?php _ex( 'Search for:', 'label', 'san-wp-bootstrap' ); ?>">
    </label>
    <input type="submit" class="search-submit btn btn-default" value="<?php echo esc_attr_x( 'Search', 'submit button', 'san-wp-bootstrap' ); ?>">
</form>



