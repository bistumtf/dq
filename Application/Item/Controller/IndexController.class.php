<?php
namespace Item\Controller;
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

	public function liquor_list(){
		$res=M("liquor")->select();
		$this->assign("data",$res);
		$this->display("pageList");
	}
	public function uploadLiquor(){
		if(IS_POST){
			$document_root=$_SERVER['DOCUMENT_ROOT'];
			$file=$_FILES['file'];
			$date=date("Ymd",time());
			$web_url=$_SERVER['SERVER_NAME']."/Public/Upload/".$date;;
			$file_url=$document_root."/Public/Upload/".$date;
			if(!is_dir($file_url)){
				mkdir($file_url,0777);
			}
			$image_url=array();
			//array(5) { ["name"]=> array(2) { [0]=> string(44) "0b7b02087bf40ad1f0187d59542c11dfa8ecce88.jpg" [1]=> string(44) "1e30e924b899a90185233f201e950a7b0208f596.jpg" } ["type"]=> array(2) { [0]=> string(10) "image/jpeg" [1]=> string(10) "image/jpeg" } ["tmp_name"]=> array(2) { [0]=> string(25) "/opt/lampp/temp/phpiBDygb" [1]=> string(25) "/opt/lampp/temp/php8av7FJ" } ["error"]=> array(2) { [0]=> int(0) [1]=> int(0) } ["size"]=> array(2) { [0]=> int(175036) [1]=> int(60359) } } 
			for($i=0;$i<count($file['tmp_name']);$i++){
				if(empty($file['tmp_name'][$i])) continue;
				$name=$file['name'][$i];
				list($name,$type)=split("\.",$name);
				$after="/".md5($file['name'][$i])."_".time()."_".rand(1,10000)."_".$i.".".$type;
				$url=$file_url.$after;
				$web_url="http://".$web_url.$after;
				$one=$file['tmp_name'][$i];
				array_push($image_url,$web_url);
				move_uploaded_file($one,$url);
			}
			$data['url'] = implode(",",$image_url);
			$data['type'] = I("post.type");
			$data['title'] = I("post.title");
			$data['alcohol'] = I("post.alcohol");
			$data['level'] = I("post.level");
			$data['tempera'] = I("post.tempera");
			$data['price'] = I("post.price");
			$data['link'] = I("post.link");
			$data['content'] = I("post.content");
			$data['uname'] = $_SESSION['admin']['uname'];
			$data['creattime'] = time();
			$data['change'] = time();
			$data['total'] = I("post.total");
			$data['country']=I("post.country");
			$data['province']=I("post.province");
			$data['county']=I("post.county");
			$res=M("liquor")->add($data);
			if($res>0) $this->success("增加成功");
			else $this->error("增加失败");
			//$data['location'] = I("post.type");
		}
		else{
			$this->display("uploadLiquor");
		}
	}
	public function change(){
		$id=$_GET['id'];
		$res=M("liquor")->where("id='$id'")->find();
		$this->assign("data",$res);
		$this->display("changeLiquor");
	}
	public function doChange(){
		$id = I("post.id");
		$data['type'] = I("post.type");
		$data['title'] = I("post.title");
		$data['alcohol'] = I("post.alcohol");
		$data['level'] = I("post.level");
		$data['tempera'] = I("post.tempera");
		$data['price'] = I("post.price");
		$data['link'] = I("post.link");
		$data['content'] = I("post.content");
		$data['uname'] = $_SESSION['admin']['uname'];
		$data['creattime'] = time();
		$data['change'] = time();
		$data['total'] = I("post.total");
		$data['country']=I("post.country");
		$data['province']=I("post.province");
		$data['county']=I("post.county");
		$res=M("liquor")->where("id='$id'")->save($data);
		if($res>0) $this->success("增加成功");
		else $this->error("增加失败");
	}
}

