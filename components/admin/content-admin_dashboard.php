<div class="col-xs-12">
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" data-target="#post-list" role="tab">Posts List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" data-target="#products-list" role="tab">Products List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" data-target="#orders-list" role="tab">Orders List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" data-target="#manage-content" role="tab">Manage Site Content</a>
        </li>
    </ul>
    <div class="tab-content">
        <article id="post-list" class="tab-pane active" role="tabpanel">
            <div class="card">
                <header class="card-header p-a-2">
                    <p class="card-title create-post-message">Your post list (Social Media Tab)</p>
                </header>
                <div class="card-block"><?php
                    $post_args = array( 'post_type' => 'post' );
                    $post_loop = new WP_Query( $post_args );
                    if ( $post_loop->have_posts() ) :
                        ?><div class="table-responsive">
                            <table class="table">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Date</th>
                                        <th>Edit Post</th>
                                    </tr>
                                </thead>
                                <tbody><?php
                                    while ( $post_loop->have_posts() ) :
                                        $post_loop->the_post();
                                        ?><tr>
                                            <th scope="row"><?php esc_html( the_ID() ); ?></th>
                                            <td><?php esc_html( the_title() ); ?></td>
                                            <td><?php esc_html( the_author() ); ?></td>
                                            <td><?php echo esc_html( get_the_date() ); ?></td>
                                            <td><button class="btn btn-sm btn-block btn-primary-outline edit_post_btn"
                                                        data-id="<?php esc_attr( the_ID() ); ?>"
                                                        data-slug="<?php echo esc_attr( basename( get_permalink() ) ); ?>">Edit Post</button></td>
                                        </tr><?php
                                    endwhile;
                                ?></tbody>
                            </table>
                        </div><?php
                    else:
                        ?><p class="card-text">No Posts at this time.</p><?php
                    endif;
                ?></div>
            </div>
        </article>
        <article id="products-list" class="tab-pane" role="tabpanel">
            <div class="card">
                <header class="card-header p-a-2">
                    <p class="card-title create-post-message">Your products list.</p>
                </header>
                <div class="card-block"><?php
                    $post_args = array( 'post_type' => 'products' );
                    $post_loop = new WP_Query( $post_args );
                    if ( $post_loop->have_posts() ) :
                        ?><div class="table-responsive">
                            <table class="table">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Product Price</th>
                                        <th>Date Created</th>
                                        <th>Edit Product</th>
                                    </tr>
                                </thead>
                                <tbody><?php
                                    while ( $post_loop->have_posts() ) :
                                        $post_loop->the_post();
                                        ?><tr>
                                            <th class="product_img_td" scope="row"><img class="img-fluid m-x-auto" src="<?php esc_url( the_field('full_image') ); ?>" width="50" height="50"/></th>
                                            <td class="product_td"><?php esc_html( the_title() ); ?></td>
                                            <td class="product_td"><?php esc_html( the_author() ); ?></td>
                                            <td class="product_td"><?php echo esc_html( get_the_date() ); ?></td>
                                            <td class="product_td"><button class="btn btn-sm btn-block btn-primary-outline edit_post_btn"
                                                        data-id="<?php esc_attr( the_ID() ); ?>"
                                                        data-slug="<?php echo esc_attr( basename( get_permalink() ) ); ?>">Edit Product</button></td>
                                        </tr><?php
                                    endwhile;
                                ?></tbody>
                            </table>
                        </div><?php
                    else:
                        ?><p class="card-text">No Posts at this time.</p><?php
                    endif;
                ?></div>
            </div>
        </article>
        <article id="orders-list" class="tab-pane" role="tabpanel">
            <div class="card">
                <header class="card-header p-a-2">
                    <p class="card-title create-post-message">Your Orders list.</p>
                </header>
                <div class="card-block"><?php
                    $post_args = array( 'post_type' => 'orders' );
                    $post_loop = new WP_Query( $post_args );
                    if ( $post_loop->have_posts() ) :
                        ?><div class="table-responsive">
                            <table class="table">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>ID</th>
                                        <th>Customer</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody><?php
                                    while ( $post_loop->have_posts() ) :
                                        $post_loop->the_post();
                                        ?><tr>
                                            <th scope="row"><?php esc_html( the_ID() ); ?></th>
                                            <td><?php  ?></td>
                                            <td><?php  ?></td>
                                            <td><?php echo esc_html( get_the_date() ); ?></td>
                                            <td><?php  ?></td>
                                        </tr><?php
                                    endwhile;
                                ?></tbody>
                            </table>
                        </div><?php
                    else:
                        ?><p class="card-text">No Orders at this time.</p><?php
                    endif;
                ?></div>
            </div>
        </article>
        <article id="manage-content" class="tab-pane" role="tabpanel">
            <div class="card">
                <header class="card-header p-a-2">
                    <p class="card-title create-post-message">Please fill out the following fields to edit your site content. Happy users!</p>
                </header>
                <div class="card-block">
                    <?php
                    acf_form(array(
                        'post_id'		=> '11',
                        'post_title'	=> false,
                        'post_content'	=> false,
                        'new_post'		=> false,
                        'return'		=> home_url('/'),
                        'honeypot' 		=> true,
                        'submit_value'	=> 'Submit Changes'
                    ));
                    ?>
                </div>
            </div>
        </article>
    </div>
</div>
