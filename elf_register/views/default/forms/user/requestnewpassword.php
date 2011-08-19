<?php
/**
 * Elgg forgotten password.
 *
 * @package Elgg
 * @subpackage Core
 * 
 * Redone for elf_register by
 * Kevin Jardine, Radagast Solutions
 */
?>

<div class="mtm">
	<?php echo elgg_echo('elf_register:user:password:text'); ?>
</div>
<div>
	<label><?php echo elgg_echo('elf_register:requestnewpassword:id_field'); ?></label><br />
	<?php echo elgg_view('input/text', array('name' => 'username')); ?>
</div>
<?php echo elgg_view('input/captcha'); ?>
<div class="elgg-foot">
	<?php echo elgg_view('input/submit', array('value' => elgg_echo('request'))); ?>
</div>
<?php //@todo JS 1.8: no ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('input[name=username]').focus();
	});
</script>