<?php
class lib{
	public function Bai1A($str){
		echo substr($str, strpos($str, "Lập Trình Web 1"));
	}
	public function Bai1B($str){
		$x = explode(" ", $str);
		echo implode(" "."</br>", $x);
	}
}