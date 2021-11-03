<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Message</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
<?php
$i = 1;
if(isset($select_all)){
	foreach($select_all as $contact_key => $contact_value){
?>
						<tr class="even gradeC">
							<td><?php echo $i++; ?></td>
							<td><?php echo $contact_value['name']; ?></td>
							<td><?php echo $contact_value['message']; ?></td>
							<td><a href="mailto:<?php echo $contact_value['email']; ?>">Reply</a> || 
							<a href="<?php echo BASE_URL."admin_controller_class/delete_function/".$contact_value['id']; ?>">Delete</a></td>
						</tr>
<?php
	}
}
?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();

        $('.datatable').dataTable();
        setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>
