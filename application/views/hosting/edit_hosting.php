<div id="container" class="col-md-12">
<?php echo form_open('Hosting/update'); ?>
<h1>Edit Hosting</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data updated successfully</h3></CENTER><br>
<?php } ?>
<?php
 foreach($website_data as $n=>$row){
	 $website_id = $row->id;
	 $website = $row->website;
	 $license_key = $row->license_key;
	 
	 $is_active = $row->is_active;	 
?>

<?php echo form_hidden('website_id',$website_id); ?>

<?php echo form_label('Hosting Url :'); ?> <?php echo form_error('website'); ?><br />
<?php echo form_input(array('id' => 'website', 'name' => 'website', 'value' => $website, 'placeholder' => 'http://google.com')); ?><br /><br />

<?php echo form_label('License Key :'); ?> <?php echo form_error('license_key'); ?><br />
<?php echo form_input(array('id' => 'license_key', 'name' => 'license_key', 'value' => $license_key, 'readonly' => 'readonly')); ?><br /><br />







<div class="row">
<h3>Activate</h3><br><br>
<div class="col-md-12">
<?php echo form_label('Active :'); ?> <?php echo form_error('is_active'); ?><br />
<?php if($is_active == 'Y'){ ?>
<?php echo form_radio(array('id' => 'is_active', 'name' => 'is_active', 'value' => 'Y', 'checked' => TRUE)); ?> Yes
<?php echo form_radio(array('id' => 'is_active', 'name' => 'is_active', 'value' => 'N', 'checked' => FALSE)); ?> No
<?php } else{ ?>
<?php echo form_radio(array('id' => 'is_active', 'name' => 'is_active', 'value' => 'Y', 'checked' => FALSE)); ?> Yes
<?php echo form_radio(array('id' => 'is_active', 'name' => 'is_active', 'value' => 'N', 'checked' => TRUE)); ?> No
<?php }  ?>
<br /><br />
</div>
</div>

<?php } ?>

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>
</div>
