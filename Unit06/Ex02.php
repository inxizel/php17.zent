<?php
	class Nguoi{
		var $name;
		var $tuoi;
		function nhap_TT(){
			echo "</br> Nhap thong tin";
		}
		function __construct(){
			echo "</br> Khoi tao class nguoi";
		}
	}
	class NhanVien extends Nguoi{
		var $bang_cap;
		function __construct(){
			echo "<br> Khoi tao class nhan vien";
		}
	}
	class KhachHang extends Nguoi{
		var $loai_KH;
	}

	$nv = new NhanVien();