<?php
	require_once('models/Model.php');
	class Sale extends Model{
		
			var $conn;
			var $table_name = 'SALES';
			var $primary_key = 'code';
		
	}