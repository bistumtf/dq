<?php
function GetArg($param){
	$url=$_SERVER['REQUEST_URI'];
	$arr=split("\?",$url);
	$arr=split("&",$arr[1]);
	$rs=array();
	for($i=0;$i<count($arr);$i++){
		$paried=split("=",$arr[$i]);
		$rs[$paried[0]] = $paried[1];
	}
	$rs=array_unique($rs);
	return $rs[$param];
}
