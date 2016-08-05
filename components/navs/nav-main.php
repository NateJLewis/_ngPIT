<nav id="top-nav" class="navbar">
    <a class="navbar-brand pull-xs-left" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="nav_logo"></div><span class="sr-only">PracticalIT</span>
    </a>
	<button class="btn btn-link hidden-md-up sidebar-toggler collapsed" type="button" data-toggle="sidebar" data-target="#mobile_sidebar">
		<?php _ngPIT_md_menu('menu_icon menu_open'); ?>
		<?php _ngPIT_md_close('menu_icon menu_close'); ?>
	</button>
    <div id="md-lg-nav" class="hidden-sm-down pull-md-right">

        <ul id="account-cart-menu" class="nav navbar-nav"><?php
            if( ! is_user_logged_in() ):
                ?><li id="login" class="nav-item">
                    <a class="nav-link" href="#" data-toggle="sidebar" data-target="#login-register">Login</a>
                </li><?php
            endif;
            if( is_user_logged_in() && current_user_can( 'administrator' ) ):
                ?><li id="manage-products" class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url( home_url( '/create-product' ) ); ?>">Create Product</a>
                </li><?php
            endif;
            if( is_user_logged_in() && current_user_can( 'editor' ) ||  current_user_can( 'administrator' ) ):
                ?><li id="edit-posts" class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url( home_url( '/create-post' ) ); ?>">Create Post</a>
                </li><?php
            endif;
            if( is_user_logged_in() ):
                ?><li id="edit-account" class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url( home_url( '/account' ) ); ?>">Account</a>
                </li><?php
            endif;
        ?></ul>
    </div>
</nav>
