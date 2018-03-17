<?php  
		if(!empty($_POST['txtInput']))
		{
			$x = $_POST['txtInput'];
			$y = str_replace("/", "-", $x);
			echo $y;
			//$z = date("F", mktime(0 , 0 , 0, $x, 10));
			echo date("M-d-Y", $x);
		}
		else
			echo "Nhap vao ngay thang nam";
	?>