<?php
	require_once('models/Model.php');
	class BillDetail extends Model{
		
			var $conn;
			var $table_name = 'BILLS_DETAIL';
			var $primary_key = 'MaHD';

			
			function detail($code){

				$sql = "SELECT * FROM ".$this->table_name." WHERE MaHD = '".$code."' ";
				$result = $this->conn->query($sql);
				while($row = $result->fetch_assoc()){
					$data[] = $row;
				}
				return $data;
			}
		
	}