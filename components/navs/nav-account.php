
<button type="button" class="btn btn-sm btn-link toggle-sidebar" data-toggle="sidebar" data-target="#login-register">
    <?php _ngPIT_md_close('sidebar_close_icon') ?>
</button>
<div class="sidebar_content m-x-auto">
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#user-login" role="tab">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#user-register" role="tab">Register</a>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="user-login" role="tabpanel">
            <?php echo do_shortcode('[frm-login]'); ?>
        </div>
        <div class="tab-pane" id="user-register" role="tabpanel">
            <?php //echo FrmFormsController::get_form_shortcode(array('id' => 10, 'title' => false, 'description' => false)); ?>
        </div>
    </div>
</div>
