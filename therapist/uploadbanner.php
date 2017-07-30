<!-- code to use cross origin error -->
<?php header('Access-Control-Allow-Origin: *');?>
<?php header('Access-Control-Allow-Header: Origin,X-Requested-With,Content-Type,Accept');?>
<?php header('Access-Control-Allow-Methods:POST,GET,OPTIONS,PUT');?>
<?php
	error_reporting(-1);
	
	$result1=array();
	if(0 < $_FILES['file']['error
		echo 'Error: '.$_FILES['file']['error'].'<br>';
		$result1[]=array('status' => '8','qur' => $qur);
	}
	else
	{
		move_uploaded_file($_FILES['file']['tmp_name'],'1.png');
		$url='http://zircos/zircos_1.6/super-admin'/new-banner.png;
		$result1[]=array('status' => '1','url' => $url);
	}
	
	$json=$result1;
	header('Content-Type:application/json');
	echo json_encode($json);
	}
?>