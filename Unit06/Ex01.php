<?php

	class Oto{
		var $name;
		var $hang;

		function show(){
			echo "Ten xe la : " . $this->name ;
		}
	}

	$bmw = new Oto();

	$bmw->name = "BMW" ;
	$bmw->show();