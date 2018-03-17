<?php
	if(!empty($_POST['txtInput_1']) || !empty($_POST['txtInput_2'])  )
	{
		$x = $_POST['gender'];
		if($x == "cong")
		{
			$Sum = $_POST['txtInput_1'] + $_POST['txtInput_2'];
			echo "Tổng 2 số " . $_POST['txtInput_1'] ." và " .$_POST['txtInput_2'] . " là: " . $Sum;
		}
		if($x == "tru")
		{
			$Tru = $_POST['txtInput_1'] - $_POST['txtInput_2'];
			echo "Hiệu 2 số " . $_POST['txtInput_1'] ." và " .$_POST['txtInput_2'] . " là: " . $Tru;
		}
		if($x == "nhan")
		{
			$Nhan = $_POST['txtInput_1'] * $_POST['txtInput_2'];
			echo "Tích 2 số " . $_POST['txtInput_1'] ." và " .$_POST['txtInput_2'] . " là: " . $Nhan;
		}
		if($x == "chia")
		{
			$Chia = $_POST['txtInput_1'] / $_POST['txtInput_2'];
			echo "Thương 2 số " . $_POST['txtInput_1'] ." và " .$_POST['txtInput_2'] . " là: " . $Chia;
		}
	}
	else {
		echo "Nhap vao so can tinh";
	}