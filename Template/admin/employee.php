<?php 
	include('../template/header.php');
	include('../template/sidebar.php');
	include('../layout/employee.php');
	include('../template/footer.php');
?>

<script>
	$(document).ready( function () {
	    $('#myTable').DataTable();
	} );
</script>