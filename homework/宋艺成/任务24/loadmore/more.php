<?php
	$nowNum = $_GET['start'];
	$addNum = $_GET['len'];
	$liContent = array();
	for ($i=0; $i < $addNum; $i++) { 
		array_push($liContent, "内容".($nowNum + $i + 1));
	}
	$arr = array('data'=>$liContent);
	echo json_encode($arr);
	echo "\r\n";
?>