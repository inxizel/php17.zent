<?php
	require_once('models/Model.php');
	class Product extends Model{
		
			var $conn;
			var $table_name = 'PRODUCTS';
			var $primary_key = 'code';
		
	}