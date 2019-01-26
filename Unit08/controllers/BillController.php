<?php

	require_once('models/Bill.php');
	require_once('models/BillDetail.php');
	
	class BillController{

		var $model;
		function __construct(){
			$this->model = new Bill();
		}
		function show(){
			$data = $this->model->All();
			require_once('views/bill/list.php');
		}
		function detail(){	
			$code = $_GET['code'];
			$bill_detail = new BillDetail();

			$data = $bill_detail->detail($code);
			require_once('views/bill/detail.php');
		}

		function xuli(){	
			$code = $_GET['code'];
			$bill = new Bill();

			$bill->xuli($code);
			header("Location: admin.php?mod=bill");
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
			$code = $_GET['code'];
			$result = $this->model->delete($code);
			header("Location: ?mod=bill");

		}
	}
?>