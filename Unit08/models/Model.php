<?php
	require_once('models/Connection.php');
	class Model{
		var $conn;
		var $table_name = '';
		var $primary_key = '';
		function __construct(){
			$conn_obj = new Connection();
			$this->conn =  $conn_obj->conn;
		}
		function All(){
			$data = array();
			$sql = "SELECT * FROM ". $this->table_name;
			$result = $this->conn->query($sql);
			while($row = $result->fetch_assoc()){
				$data[] = $row;
			}
			return $data;
		}
		function detail($code){
			$data = array();
			$sql = "SELECT * FROM ".$this->table_name." WHERE ".$this->primary_key." = '".$code."' ";
			$result = $this->conn->query($sql)->fetch_assoc();
			return $result;
		}
		function add(){
			$sql  = "SELECT * FROM ".$this->table_name." ORDER BY CODE DESC LIMIT 1";
		    $result = $this->conn->query($sql);
		    $row = $result->fetch_assoc();
		    return $max_id = $row['code'] + 1;
		}
		function insert($data){	
			$column = '';
			$values = '';
			foreach ($data as $col => $value) {
				$column .= $col .",";
				$values  .= "'".$value."',";
			}
			$column = trim($column,',');
			$values = trim($values,',');
			$sql = "INSERT INTO ".$this->table_name." (".$column.")
				VALUES (".$values.")";
			$result = $this->conn->query($sql);
		}
		function edit($code){
			$data = array();
			$sql = "SELECT * FROM ".$this->table_name." WHERE ".$this->primary_key." = '".$code."' ";
			$result = $this->conn->query($sql)->fetch_assoc();
			return $result;
		}
		function update($data){	
			$string = '';
			foreach ($data as $col => $value) {
				$string = $string. $col . "=". "'".$value."',";
			}
			$string = trim($string,',');
			
			$sql = "UPDATE ".$this->table_name." SET ".$string."  WHERE ".$this->primary_key." = '".$data['code']."' ";

			$result = $this->conn->query($sql);
		}
		function delete($code){
			if(isset($_GET['code'])){
				$code = $_GET['code'];
				$sql = "DELETE FROM ".$this->table_name." WHERE ".$this->primary_key." = '".$code."' ";
				$result = $this->conn->query($sql);
			}
		}
	}