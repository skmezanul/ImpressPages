<?php
/** @var $this \Ip\View */
?>

<?php if (!empty($notes)) { ?>
    <?php foreach ($notes as $note) { ?>
        <div class="note">
            <?php echo $note ?>
        </div>
    <?php } ?>
<?php } ?>

<?php
echo $this->subview('header.php')->render();
?>
<div class="content">
    <h1>ImpressPages CMS <?php echo $this->esc($version); ?></h1>
</div>
<div class="content">
    <h1><?php echo _esc('Cache', 'ipAdmin') ?></h1>
    <p><?php echo $this->par('System.cache_comments') ?></p>
    <a class="ipsClearCache button" href="#" ><?php echo _esc('Clear cache', 'ipAdmin') ?></a>
    <div class="clear"></div>
    </div>
<div id="systemInfo" class="content" style="display: none;">
    <h1><?php echo _esc('System message', 'ipAdmin') ?></h1>
</div>
<?php
echo $this->subview('footer.php')->render();
?>

