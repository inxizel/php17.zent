<?php
	require_once('models/Model.php');
	class BillDetail extends Model{
		
			var $conn;
			var $table_name = 'BILLS_DETAIL';
			var $primary_key = 'MaHD';
		
	}