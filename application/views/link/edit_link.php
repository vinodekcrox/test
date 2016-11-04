<div id="container" class="col-md-12">
<?php echo form_open('Link/update'); ?>
<h1>Global Link</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data updated successfully</h3></CENTER><br>
<?php } ?>
<?php
 foreach($link_data as $n=>$row){
	 $link_id = $row->id;
	 $link_label = $row->link_label;
	 $link_url = $row->link_url;
?>

<?php echo form_label('Link Label :'); ?> <?php echo form_error('link_label'); ?><br />
<?php echo form_input(array('id' => 'link_label', 'name' => 'link_label', 'value' => $link_label)); ?><br /><br />

<?php echo form_label('Link URL :'); ?> <?php echo form_error('link_url'); ?><br />
<?php echo form_input(array('id' => 'link_url', 'name' => 'link_url', 'value' => $link_url)); ?><br /><br />

<?php } ?>

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>

</div>
