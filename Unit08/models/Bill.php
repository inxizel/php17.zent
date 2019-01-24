<?php
	require_once('models/Model.php');
	class Bill extends Model{
		
			var $conn;
			var $table_name = 'BILLS';
			var $primary_key = 'MaHD';

			function update($data){	
				$string = '';
				foreach ($data as $col => $value) {
					$string = $string. $col . "=". "'".$value."',";
				}
				$string = trim($string,',');
				
				$sql = "UPDATE ".$this->table_name." SET ".$string."  WHERE ".$this->primary_key." = '".$data['MaHD']."' ";
				$result = $this->conn->query($sql);
			}

			function detail($code){
				$data = array();
				$sql = "SELECT * FROM ".$this->table_name." WHERE ".$this->primary_key." = '".$code."' ";
				$result = $this->conn->query($sql)->fetch_assoc();
				return $result;
			}

	}