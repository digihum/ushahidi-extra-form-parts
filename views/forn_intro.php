<?php blocks::open();?>
<?php blocks::title(Kohana::lang('extra_form_parts.media'));?>
<div>
	<img src="<?PHP echo url::site() . "media/uploads/" . $mediaResources[$incident_id][0];  ?>" /><a href="<?php echo url::site() . 'reports/view/' . $incident_id; ?>"> <?php echo html::specialchars($incident_title) ?></a>
</div>
<?php blocks::close();?>