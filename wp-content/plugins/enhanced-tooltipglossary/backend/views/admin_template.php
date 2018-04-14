<div class="wrap">
    <h2>
        <div id="icon-<?php echo CMTT_MENU_OPTION; ?>" class="icon32">
            <br />
        </div>
        <?php _e(CMTT_NAME); ?> &nbsp; <a href="<?php echo esc_url( get_admin_url( '', 'admin.php?page=cmtt_pro' )); ?>" class="button button-primary" title="Click to Buy PRO">Upgrade to Pro</a>
    </h2>

    <?php CMTooltipGlossaryBackend::cmtt_showNav(); ?>

    <?php echo $content; ?>
</div>