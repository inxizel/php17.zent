<?php
	require_once('models/Model.php');
	class Bill extends Model{
		
			var $conn;
			var $table_name = 'BILLS';
			var $primary_key = 'code';
			function All(){
				$data = array();
				$sql = "SELECT * FROM ". $this->table_name ." WHERE `status` != 1 ";
				$result = $this->conn->query($sql);
				while($row = $result->fetch_assoc()){
					$data[] = $row;
				}
				return $data;
			}
			function update($data){	
				$string = '';
				foreach ($data as $col => $value) {
					$string = $string. $col . "=". "'".$value."',";
				}
				$string = trim($string,',');
				
				$sql = "UPDATE ".$this->table_name." SET ".$string."  WHERE MaHD = '".$data['MaHD']."' ";

				//echo $sql; die;
				$result = $this->conn->query($sql);
			}
			function xuli($code){

				$sql = "UPDATE ".$this->table_name." SET `status` = 1, MaNV = 'NV1' WHERE MaHD = '".$code."' ";

			

				$result = $this->conn->query($sql);
			}

			function detail($code){
				$data = array();
				$sql = "SELECT * FROM ".$this->table_name." WHERE MaHD = '".$code."' ";
				$result = $this->conn->query($sql)->fetch_assoc();
				return $result;
			}

	}