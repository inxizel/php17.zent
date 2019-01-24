<?php
	require_once('models/Model.php');
	class Employee extends Model{
		var $conn;
		var $table_name = 'EMPLOYEES';
		var $primary_key = 'code';
	}