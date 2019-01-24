<?php
	require_once('models/Model.php');
	class Customer extends Model{
		
			var $conn;
			var $table_name = 'CUSTOMERS';
			var $primary_key = 'code';
		
	}