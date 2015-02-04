<?php
namespace Template\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function __construct(){
		parent::__construct();
	}
	/*
	 *
	 * +----------+--------------+------+-----+---------+----------------+
	 * | Field    | Type         | Null | Key | Default | Extra          |
	 * +----------+--------------+------+-----+---------+----------------+
	 * | id       | int(32)      | NO   | PRI | NULL    | auto_increment |
	 * | type     | int(32)      | YES  |     | 0       |                |
	 * | alcohol  | varchar(32)  | YES  |     | 0       |                |
	 * | level    | varchar(32)  | YES  |     | 0       |                |
	 * | tempera  | varchar(32)  | YES  |     | NULL    |                |
	 * | price    | varchar(32)  | YES  |     | NULL    |                |
	 * | url      | varchar(256) | YES  |     | NULL    |                |
	 * | link     | varchar(128) | YES  |     | NULL    |                |
	 * | location | varchar(32)  | YES  |     | NULL    |                |
	 * | content  | mediumtext   | YES  |     | NULL    |                |
	 * | uname    | varchar(32)  | YES  |     | NULL    |                |
	 * | creattime  | varchar(32)  | YES  |     | NULL    |                |
	 * | changetime | varchar(32)  | YES  |     | NULL    |                |
	 * | total    | varchar(32)  | YES  |     | NULL    |                |
	 * +----------+--------------+------+-----+---------+----------------+
	 */

	public function pc(){
		$id=I("get.id");
		$res=M("liquor")->where("id='$id'")->find();
	}
	public function phone(){
		$id=I("get.id");
		$res=M("liquor")->where("id='$id'")->find();
		$image_url_arr=split(",",$res['url']);

		$res['content']=htmlspecialchars_decode($res['content']);
		$this->assign("data",$res);
		$this->assign("image_url",$image_url_arr);
		$this->display("liquor_detail");
		//$this->display("phone_template");
	}
	public function create(){
		$id=I("get.id");
		$res=M("liquor")->where("id='$id'")->find();
		$image_url_arr=split(",",$res['url']);
		$this->assign("data",$res);
		$this->assign("image_url",$image_url_arr);
		$content=$this->fetch("liquor_detail");
		$file_url=$res['link'];
		$res=file_put_contents($file_url,$content);
		if($res){
			M("liquor")->where("id='$id'")->save(array("link"=>$file_url));
			$this->success("生成成功");
		}
		else{
			$this->error("生成失败");
		}
			exit;




	}
}
