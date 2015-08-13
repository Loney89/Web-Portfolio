<?php Chunk::get('header'); ?>
<div class="container-wide">
    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <?php Action::run('theme_pre_content'); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <?php echo Site::content(); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <?php Action::run('theme_post_content'); ?>
            </div>
        </div>

    </div>
    Something here something here something herE?1
</div>
<?php Chunk::get('footer'); ?>
