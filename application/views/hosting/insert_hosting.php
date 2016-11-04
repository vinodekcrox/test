
<div id="container" class="col-md-12">
<?php echo form_open('Hosting/insert'); ?>
<h1>Insert New Hosting</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<?php echo form_label('Hosting Url :'); ?> <?php echo form_error('website'); ?><br />
<?php echo form_input(array('id' => 'website', 'name' => 'website', 'placeholder' => 'http://google.com')); ?><br /><br />

<?php echo form_label('License Key :'); ?> <?php echo form_error('license_key'); ?><br />
<?php echo form_input(array('id' => 'license_key', 'name' => 'license_key', 'readonly' => 'readonly')); ?><br />
<a href="javascript:void(0);" id="generate">Generate License Key</a>
<br /><br />









<div class="row">
<h3>Activate</h3><br><br>
<div class="col-md-12">
<?php echo form_label('Active :'); ?> <?php echo form_error('is_active'); ?><br />
<?php echo form_radio(array('id' => 'is_active', 'name' => 'is_active', 'value' => 'Y', 'checked' => TRUE)); ?> Yes &nbsp;&nbsp;
<?php echo form_radio(array('id' => 'is_active', 'name' => 'is_active', 'value' => 'N', 'checked' => FALSE)); ?> No<br /><br />
</div>
</div>

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>
</div>

<script>
	$(document).ready(function () {
		$('#generate').click(function(){
			var urle = '<?php echo base_url(); ?>';
			 $.ajax({
				 url: urle+"license/new.php",
				 success: function(result){
					$("#license_key").val(result);
				 }
			});
		});
	});
</script>


