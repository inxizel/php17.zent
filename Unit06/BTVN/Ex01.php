<?php
	class SanPham{
		var $maSP;
		var $tenSP;
		var $soLuong;
		var $donGia;
		var $hangSx;
		function print_TT(){
			echo "<br>Thong tin san pham : </b>" . $this->tenSP ."</br>";
			echo "Ma SP : " . $this->maSP ."</br>";
			echo "So Luong : " . $this->soLuong ."</br>";
			echo "Don Gia : " . $this->donGia ."</br>";
			echo "Hang San Xuat : " . $this->hangSx ."<hr></br>";
		}
	}

	$but = new SanPham();

	$but->tenSP = "Bút Bi";
	$but->maSP = "A111";
	$but->soLuong = 100;
	$but->donGia = 4000;
	$but->hangSx = 'Thăng Long';

	$but->print_TT();

	// --------------------------------
	$vo = new SanPham();

	$vo->tenSP = "Vở ô li";
	$vo->maSP = "A112";
	$vo->soLuong = 100;
	$vo->donGia = 15000;
	$vo->hangSx = 'Bãi Bằng';

	$vo->print_TT();

	// --------------------------------
	$butxoa = new SanPham();

	$butxoa->tenSP = "Bút xoá ";
	$butxoa->maSP = "A113";
	$butxoa->soLuong = 200;
	$butxoa->donGia = 10000;
	$butxoa->hangSx = 'Hải Tiến';

	$butxoa->print_TT();

