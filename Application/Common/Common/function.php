<?php
function genBlock($id,$content){




}
function getBlock($id){

$server_url=$_SERVER['SERVER_NAME'];
$server_url="http://".$server_url."/index.php?m=Block&c=Index&a=editBlock&id=$id";
$block_url=$_SERVER['DOCUMENT_ROOT']."/Public/block";
$content="<div style='box-shadow:0px 0px 10px yellow;background-color:yellow' class='block' id='$id' onclick='window.open(\"$server_url\")'>";
$content.=file_get_contents($block_url."/asdf.php");
$content.="</div>";
echo $content;
}
function getBlockR($id){
$block_url=$_SERVER['DOCUMENT_ROOT']."/Public/block";
$content=file_get_contents($block_url."/asdf.php");
}


?>
