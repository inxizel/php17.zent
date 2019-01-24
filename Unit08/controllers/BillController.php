<?php

	require_once('models/Bill.php');
	
	class BillController{

		var $model;
		function __construct(){
			$this->model = new Bill();
		}
		function show(){
			$data = $this->model->All();
			require_once('views/product/list.php');
		}
		function detail(){	
			$code = $_GET['code'];
			$row = $this->model->detail($code);
			require_once('views/bill/detail.php');
		}
		function add(){

			$id_add = $this->model->add();

			require_once('views/product/add.php');
		}
		function store(){
			$data = $_POST;

			$result = $this->model->insert($data);
			header("Location: ?mod=product");

		}
		function edit(){
			$code = $_GET['code'];
			$row = $this->model->edit($code);
			require_once('views/product/edit.php');
		}
		function update(){
			$data = $_POST;

			$result = $this->model->update($data);
			header("Location: ?mod=product");

		}
		function delete(){
			$result = $this->model->delete();
			header("Location: ?mod=product");

		}
	}
?>