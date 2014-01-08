<h1><?php _e('Website configuration', 'plugin-Install') ?></h1>

<div class="errorContainer"></div>
<form role="form" onsubmit="return false;">
    <div class="form-group">
        <label for="configSiteName"><?php _e('Website name', 'plugin-Install'); ?></label>
        <input type="text" class="form-control" id="configSiteName" name="siteName">
    </div>
    <div class="form-group">
        <label for="configSiteEmail"><?php _e('Website e-mail address', 'plugin-Install'); ?></label>
        <input type="email" class="form-control" id="configSiteEmail" name="siteEmail">
    </div>
    <div class="form-group">
        <label for="config_login"><?php _e('Administrator login', 'plugin-Install'); ?></label>
        <input type="text" class="form-control" id="config_login" name="install_login">
    </div>
    <div class="form-group">
        <label for="config_pass"><?php _e('Administrator password', 'plugin-Install'); ?></label>
        <input type="password" class="form-control" id="config_pass" name="install_pass">
    </div>
    <div class="form-group">
        <label for="config_timezone"><?php _e('Please choose website time zone', 'plugin-Install'); ?></label>
        <select id="config_timezone" class="form-control" name="config_timezone">
            <?php echo $timezoneSelectOptions; ?>
        </select>
    </div>
</form>
<p class="text-right">
    <a class="btn btn-default" href="?step=3"><?php _e('Back', 'plugin-Install') ?></a>
    <a class="btn btn-primary ipsStep4" href="#" ><?php _e('Next', 'plugin-Install') ?></a>
</p>
