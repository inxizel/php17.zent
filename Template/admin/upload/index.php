<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Blank Page</title>

    <!-- Bootstrap core CSS-->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../public/css/sb-admin.css" rel="stylesheet">

    <!-- Datatable  -->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">


  </head>


<div class="box-upload">
	<h2>Upload hình ảnh</h2>
	<form action="upload.php" method="POST" enctype="multipart/form-data" id="formUpload" onsubmit="return false;">
		<div class="progress">
			<div class="progress-bar">0%</div>
		</div>
		<div class="btn_center">
    		<button type="reset" class="btn-reset">Làm mới</button>
    		<button type="submit" class="btn-submit">Upload</button>
    	</div>
		<input type="file" name="img_file[]" multiple="true" onchange="previewImg(event);" id="img_file" accept="image/*">

		<div class="output"></div>
		<div class="box-preview-img"></div>
		
		
	</form>
</div>
<script src="js/jquery.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/main.js"></script>
