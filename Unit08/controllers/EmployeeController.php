<?php

	require_once('models/Employee.php');
	
	class EmployeeController{

		var $model;
		function __construct(){
			$this->model = new Employee();
		}
		function show(){
			$data = $this->model->All();
			require_once('views/employee/list.php');
		}
		function detail(){	
			$code = $_GET['code'];
			$row = $this->model->detail($code);
			require_once('views/employee/detail.php');
		}
		function add(){

			$id_add = $this->model->add();

			require_once('views/employee/add.php');
		}
		function store(){
			$data = $_POST;

			$result = $this->model->insert($data);
			header("Location: ?mod=employee");

		}
		function edit(){
			$code = $_GET['code'];
			$row = $this->model->edit($code);
			require_once('views/employee/edit.php');
		}
		function update(){
			$data = $_POST;

			$result = $this->model->update($data);
			header("Location: ?mod=employee");

		}
		function delete(){
			$result = $this->model->delete();
			header("Location: ?mod=employee");

		}
	}
?>