
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;"><?php echo $message; ?></h3></CENTER><br>
<?php } ?>

<div class="row">
	<div class="col-md-12">
		<!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
               MANAGE WEBSITES
            </div>
			
            <div class="panel-body">
                <div class="table-responsive">
                   
					<table id="list_websites" class="table table-striped table-bordered table-hover no-footer">
						<thead>
							<tr role="row">
								<th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" style="width: 40px;">No.</th>
								<th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 253px;">Website</th>
								<th class="no-sort" tabindex="0" rowspan="1" colspan="1" style="width: 250px;">License Key</th>
								<th class="no-sort" tabindex="0" rowspan="1" colspan="1" style="width: 50px;">Products</th>
								<th class="no-sort" tabindex="0" rowspan="1" colspan="1" style="width: 50px;">Images</th>
								<th class="no-sort" tabindex="0" rowspan="1" colspan="1" style="width: 50px;">Customers</th>
								<th class="no-sort" tabindex="0" rowspan="1" colspan="1" style="width: 50px;">Categories</th>
								<th class="no-sort" tabindex="0" rowspan="1" colspan="1" style="width: 50px;">Active</th>
								<th class="no-sort" tabindex="0" rowspan="1" colspan="1" style="width: 50px;">Edit</th>
								<th class="no-sort" tabindex="0" rowspan="1" colspan="1" style="width: 50px;">Delete</th>
							</tr>
						</thead>
						<tbody>        
							<?php
							    $i=0;
								foreach($list as $n=>$row){
									$i++;
							?>
								<tr class="gradeA <?php echo $rem = (($i%2) == 0) ? 'even' : 'odd'; ?>">
									<td class="sorting_1"><?php echo $i; ?></td>
									<td class=" "><?php echo $row->website; ?></td>
									<td style="font-size:13px;"><?php echo $row->license_key; ?></td>
									<td class="center "><?php echo $row->sync_products; ?></td>
									<td class="center "><?php echo $row->sync_images; ?></td>
									<td class="center "><?php echo $row->sync_customers; ?></td>
									<td class="center "><?php echo $row->sync_categories; ?></td>
									<td class="center "><?php echo $row->is_active; ?></td>
									<td class="center "><a href="<?php echo base_url(); ?>index.php/Website/show_website/<?php echo $row->id; ?>">Edit</a></td>
									<td class="center "><a href="<?php echo base_url(); ?>index.php/Website/delete/<?php echo $row->id; ?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
								</tr>
							<?php } ?>
						</tbody>
                    </table>
								
                </div>
                            
            </div>
        </div>
        <!--End Advanced Tables -->
	</div>
</div>

<script>
$(document).ready(function() {
    $('#list_websites').DataTable( {
         "paging":   true,
         "ordering": true,
         "info":     true,
		 "columnDefs": [ {
          "targets": 'no-sort',
          "orderable": false,
    } ]
    });
});
</script>