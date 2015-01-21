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

	public function uploadLiquor(){
		if(IS_POST){
			$data['type'] = I("post.type");
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


			$data['location'] = I("post.type");
			$data['url'] = I("post.type");
		}
		else{
			$this->display("uploadLiquor");
		}
	}
}

