<ul id="account-cart-menu" class="nav navbar-nav"><?php

    if( ! is_user_logged_in() ):

        ?><li id="login" class="nav-item">
            <a  class="nav-link" href="#">Login</a>
        </li><?php

    endif;
    if( is_user_logged_in() && current_user_can( 'editor' ) ||  current_user_can( 'administrator' ) ):

        ?><li id="edit-posts" class="nav-item">
            <a  class="nav-link" href="<?php echo esc_url( home_url( '/create-post' ) ); ?>">Create Post</a>
        </li><?php

    endif;
    if( is_user_logged_in() ):

        ?><li id="edit-account" class="nav-item">
            <a  class="nav-link" href="<?php echo esc_url( home_url( '/account' ) ); ?>">Account</a>
        </li><?php

    endif;
    
?></ul>
