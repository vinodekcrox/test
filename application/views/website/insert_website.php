
<div id="container" class="col-md-12">
<?php echo form_open('Website/insert'); ?>
<h1>Insert New Website</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<?php echo form_label('Website Url :'); ?> <?php echo form_error('website'); ?><br />
<?php echo form_input(array('id' => 'website', 'name' => 'website', 'placeholder' => 'http://google.com')); ?><br /><br />

<?php echo form_label('License Key :'); ?> <?php echo form_error('license_key'); ?><br />
<?php echo form_input(array('id' => 'license_key', 'name' => 'license_key', 'readonly' => 'readonly')); ?><br />
<a href="javascript:void(0);" id="generate">Generate License Key</a>
<br /><br />

<div class="row">
<h3>Synchronizations</h3><br><br>
<div class="col-md-6">
<?php echo form_label('Synchronize Products :'); ?> <?php echo form_error('sync_products'); ?><br />
<?php echo form_radio(array('id' => 'sync_products', 'name' => 'sync_products', 'value' => 'Y', 'checked' => TRUE)); ?> Yes &nbsp;&nbsp;
<?php echo form_radio(array('id' => 'sync_products', 'name' => 'sync_products', 'value' => 'N', 'checked' => FALSE)); ?> No<br /><br />

<?php echo form_label('Synchronize Images :'); ?> <?php echo form_error('sync_images'); ?><br />
<?php echo form_radio(array('id' => 'sync_images', 'name' => 'sync_images', 'value' => 'Y', 'checked' => TRUE)); ?> Yes &nbsp;&nbsp;
<?php echo form_radio(array('id' => 'sync_images', 'name' => 'sync_images', 'value' => 'N', 'checked' => FALSE)); ?> No<br />
<br />
</div>
<div class="col-md-6">
<?php echo form_label('Synchronize Customers :'); ?> <?php echo form_error('sync_customers'); ?><br />
<?php echo form_radio(array('id' => 'sync_customers', 'name' => 'sync_customers', 'value' => 'Y', 'checked' => TRUE)); ?> Yes &nbsp;&nbsp;
<?php echo form_radio(array('id' => 'sync_customers', 'name' => 'sync_customers', 'value' => 'N', 'checked' => FALSE)); ?> No<br /><br />

<?php echo form_label('Synchronize Categories :'); ?> <?php echo form_error('sync_categories'); ?><br />
<?php echo form_radio(array('id' => 'sync_categories', 'name' => 'sync_categories', 'value' => 'Y', 'checked' => TRUE)); ?> Yes &nbsp;&nbsp;
<?php echo form_radio(array('id' => 'sync_categories', 'name' => 'sync_categories', 'value' => 'N', 'checked' => FALSE)); ?> No<br /><br />

</div>
<div class="col-md-6">
<?php echo form_label('Synchronize Sublogin Customers :'); ?> <?php echo form_error('sync_sublogin'); ?><br />
<?php echo form_radio(array('id' => 'sync_sublogin', 'name' => 'sync_sublogin', 'value' => 'Y', 'checked' => TRUE)); ?> Yes &nbsp;&nbsp;
<?php echo form_radio(array('id' => 'sync_sublogin', 'name' => 'sync_sublogin', 'value' => 'N', 'checked' => FALSE)); ?> No<br /><br />

</div>
</div>

<div class="row">
<h3>Appendicies</h3><br><br>
<div class="col-md-6">
<?php echo form_label('Appendix :'); ?> <?php echo form_error('appendix'); ?><br />
<?php echo form_radio(array('id' => 'appendix', 'name' => 'appendix', 'value' => 'Y', 'checked' => TRUE)); ?> Yes &nbsp;&nbsp;
<?php echo form_radio(array('id' => 'appendix', 'name' => 'appendix', 'value' => 'N', 'checked' => FALSE)); ?> No<br /><br />
</div>
</div>

<div class="row">
<h3>Languages</h3><br><br>
<div class="col-md-6">

<?php echo form_checkbox('dutch', 'Y', TRUE); ?>&nbsp;&nbsp;
<?php echo form_label('Dutch '); ?> <?php echo form_error('dutch'); ?><br /><br />

<?php echo form_checkbox('french', 'Y', FALSE); ?>&nbsp;&nbsp;
<?php echo form_label('French '); ?> <?php echo form_error('french'); ?><br /><br />


</div>
<div class="col-md-6">

<?php echo form_checkbox('english', 'Y', FALSE); ?>&nbsp;&nbsp;
<?php echo form_label('English '); ?> <?php echo form_error('english'); ?><br /><br />

<?php echo form_checkbox('german', 'Y', FALSE); ?>&nbsp;&nbsp;
<?php echo form_label('German '); ?> <?php echo form_error('german'); ?><br /><br />

</div>
</div>

<div class="row">
<h3>Customer Account Tabs</h3><br><br>
<div class="col-md-6">

<?php echo form_label('Invoice History :'); ?> <?php echo form_error('invoice_history'); ?><br />
<?php echo form_radio(array('id' => 'invoice_history', 'name' => 'invoice_history', 'value' => 'Y', 'checked' => TRUE)); ?> Yes &nbsp;&nbsp;
<?php echo form_radio(array('id' => 'invoice_history', 'name' => 'invoice_history', 'value' => 'N', 'checked' => FALSE)); ?> No<br /><br />

<?php echo form_label('Delivery History :'); ?> <?php echo form_error('delivery_history'); ?><br />
<?php echo form_radio(array('id' => 'delivery_history', 'name' => 'delivery_history', 'value' => 'Y', 'checked' => TRUE)); ?> Yes &nbsp;&nbsp;
<?php echo form_radio(array('id' => 'delivery_history', 'name' => 'delivery_history', 'value' => 'N', 'checked' => FALSE)); ?> No<br /><br />

<?php echo form_label('Price Quotations History :'); ?> <?php echo form_error('quotation_history'); ?><br />
<?php echo form_radio(array('id' => 'quotation_history', 'name' => 'quotation_history', 'value' => 'Y', 'checked' => TRUE)); ?> Yes &nbsp;&nbsp;
<?php echo form_radio(array('id' => 'quotation_history', 'name' => 'quotation_history', 'value' => 'N', 'checked' => FALSE)); ?> No<br /><br />

<?php echo form_label('Orders History :'); ?> <?php echo form_error('orders_history'); ?><br />
<?php echo form_radio(array('id' => 'orders_history', 'name' => 'orders_history', 'value' => 'Y', 'checked' => TRUE)); ?> Yes &nbsp;&nbsp;
<?php echo form_radio(array('id' => 'orders_history', 'name' => 'orders_history', 'value' => 'N', 'checked' => FALSE)); ?> No<br /><br />

<?php echo form_label('Backorders :'); ?> <?php echo form_error('backorders'); ?><br />
<?php echo form_radio(array('id' => 'backorders', 'name' => 'backorders', 'value' => 'Y', 'checked' => TRUE)); ?> Yes &nbsp;&nbsp;
<?php echo form_radio(array('id' => 'backorders', 'name' => 'backorders', 'value' => 'N', 'checked' => FALSE)); ?> No<br /><br />

</div>
<div class="col-md-6">
<?php echo form_label('Purchase History :'); ?> <?php echo form_error('purchase_history'); ?><br />
<?php echo form_radio(array('id' => 'purchase_history', 'name' => 'purchase_history', 'value' => 'Y', 'checked' => TRUE)); ?> Yes &nbsp;&nbsp;
<?php echo form_radio(array('id' => 'purchase_history', 'name' => 'purchase_history', 'value' => 'N', 'checked' => FALSE)); ?> No<br /><br />

<?php echo form_label('Service History :'); ?> <?php echo form_error('service_history'); ?><br />
<?php echo form_radio(array('id' => 'service_history', 'name' => 'service_history', 'value' => 'Y', 'checked' => TRUE)); ?> Yes &nbsp;&nbsp;
<?php echo form_radio(array('id' => 'service_history', 'name' => 'service_history', 'value' => 'N', 'checked' => FALSE)); ?> No<br /><br />

<?php echo form_label('Helpdesk History :'); ?> <?php echo form_error('helpdesk_history'); ?><br />
<?php echo form_radio(array('id' => 'helpdesk_history', 'name' => 'helpdesk_history', 'value' => 'Y', 'checked' => TRUE)); ?> Yes &nbsp;&nbsp;
<?php echo form_radio(array('id' => 'helpdesk_history', 'name' => 'helpdesk_history', 'value' => 'N', 'checked' => FALSE)); ?> No<br /><br />

<?php echo form_label('Accounts History :'); ?> <?php echo form_error('account_history'); ?><br />
<?php echo form_radio(array('id' => 'account_history', 'name' => 'account_history', 'value' => 'Y', 'checked' => TRUE)); ?> Yes &nbsp;&nbsp;
<?php echo form_radio(array('id' => 'account_history', 'name' => 'account_history', 'value' => 'N', 'checked' => FALSE)); ?> No<br /><br />

</div>
</div>

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


