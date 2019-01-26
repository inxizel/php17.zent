<?php
	require_once('models/Model.php');
	class Cart extends Model{
		
			var $conn;
			var $table_name = 'CUSTOMERS';
			var $primary_key = 'code';
		
	}