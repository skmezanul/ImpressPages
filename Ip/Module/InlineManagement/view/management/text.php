<<?php echo $tag ?> class="ipModuleInlineManagement ipmText <?php echo $cssClass ?> <?php echo str_replace(' ', '',$value) == '' ? 'ipmEmpty' : '' ?>" data-cssclass='<?php echo esc($cssClass) ?>' data-key='<?php echo esc($key) ?>' data-htmltag='<?php echo esc($tag) ?>' data-defaultvalue='<?php echo esc($defaultValue) ?>'>
    <?php echo $value == '' ? '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' : $value ?>
</<?php echo $tag ?>>
