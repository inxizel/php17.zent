<?php

	require_once('models/Customer.php');
	
	class CustomerController{

		var $model;
		function __construct(){
			$this->model = new Customer();
		}
		function show(){
			$data = $this->model->All();
			require_once('views/customer/list.php');
		}
		function detail(){	
			$code = $_GET['code'];
			$row = $this->model->detail($code);
			require_once('views/customer/detail.php');
		}
		function add(){

			$id_add = $this->model->add();

			require_once('views/customer/add.php');
		}
		function store(){
			$data = $_POST;

			$result = $this->model->insert($data);
			header("Location: ?mod=customer");

		}
		function edit(){
			$code = $_GET['code'];
			$row = $this->model->edit($code);
			require_once('views/customer/edit.php');
		}
		function update(){
			$data = $_POST;

			$result = $this->model->update($data);
			header("Location: ?mod=customer");

		}
		function delete(){
			$result = $this->model->delete();
			header("Location: ?mod=customer");

		}
	}
?>