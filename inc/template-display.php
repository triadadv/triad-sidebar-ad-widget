<div class="sidebar-widget triad-sidebar-ad <?php echo( $special_class != '' ? $special_class : '' ); ?>">
    <div class="content">
        <div class="title"><?php echo $title; ?></div>
        <div class="copy">
            <div class="text">
                <?php echo $copy; ?>
            </div>
        </div>
        <?php if( $url != '' ): ?>
        <div class="link">
            <a href="<?php echo $url; ?>"<?php echo ( $new_window == '1' ? ' target="_blank"' : ''); ?> class="btn"><?php echo ( $url_copy == '' ? 'Read More' : $url_copy ); ?></a>
        </div>
        <?php endif; ?>
    </div>
</div>