<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller {
	/*
	 * session admin( id , uname);
	 * cookie  id	, admin_mid
	 */
	public function __construct(){
		parent::__construct();
		if(isset($_SESSION['admin'])){
		}
		else if(isset($_COOKIE['admin_mid'])){
			/*
			 * 自动登陆
			 */
		}
		else if(in_array(GetArg('a'),array('login','register'))){
		}
		else{
			$this->display("login");
			exit;
		}



	}
	public function index(){
		$this->display("index");
	}
	public function login(){
		if(IS_POST){
			$uname=I("post.uname");
			$pwd=I("post.pwd");
			$user=M("admin")->where("uname='$uname'")->find();
			$ext=$user['ext'];
			if($user['pwd']==md5(md5($pwd).$ext)){
				$_SESSION['admin']=array('id'=>$user['id'],'uname'=>$user['uname']);
				$this->success("登陆成功","index.php?m=Home&c=Admin&a=index");
			}
			else{
				$this->error("用户名或密码错误");
			}
			exit;
		}
		else{
			$this->display("login");
		}
	}
	/*
		+-----------+-------------+------+-----+---------+----------------+
		| Field     | Type        | Null | Key | Default | Extra          |
		+-----------+-------------+------+-----+---------+----------------+
		| id        | int(32)     | NO   | PRI | NULL    | auto_increment |
		| uname     | varchar(32) | YES  |     | NULL    |                |
		| pwd       | varchar(32) | YES  |     | NULL    |                |
		| creattime | varchar(32) | YES  |     | NULL    |                |
		| ext       | varchar(32) | YES  |     | NULL    |                |
		| email     | varchar(32) | YES  |     | NULL    |                |
		| groupid   | int(32)     | YES  |     | NULL    |                |
		+-----------+-------------+------+-----+---------+----------------+
	 */

	public function register(){
		if(IS_POST){
			$uname=I("post.uname");
			$pwd=I("post.pwd");
			$email=I("post.email");
			$groupid=0;

			$ext="";;
			for($i=0;$i<4;$i++){
				$ext.=chr(rand(97,122));

			}
			$rs=M("admin")->where("uname='$uname' or email='email'")->find();
			if(!empty($rs)){
				$this->error("用户名或邮箱已被使用");
				exit;
			}



			$data['uname']=$uname;
			$data['pwd']=md5(md5($pwd).$ext);
			$data['creattime']=time();
			$data['ext']=$ext;
			$data['email']=$email;
			$data['groupid']=$groupid;
			$rs=M("admin")->add($data);
			if($rs>0){
				$this->success("增加成功");
			}
			else{
				$this->error("增加失败");
			}
		}
		else{
			$this->display("register");
			exit;
		}

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
