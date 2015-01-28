<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index(){


	}
	public function homePage(){
		$this->display("homePage");
	}
	public function test(){
		$file=fopen("./data.php","r+");
		$s=array( '0'=>'1','d'=>array( '0'=>'f','a'=>array( '0'=>'4',)));
		$arr=array(
			'0'=>'1',
			'd'=>array('f','a'=>array('4')));
		$return=$this->arr($arr);
		var_dump($s);
		var_dump($return);

	}

	public function arr($param){
		$str="array(";
		foreach($param as $k => $v){
			if(is_array($v)){
				$str.="'$k'=>".$this->arr($v);
			}
			else{
				$str.="\n'$k'=>'$v',";
			}
		}
		$str.=")";
		return $str;


	}


}
