<?php
namespace Block\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function __construct(){
		parent::__construct();
	}



	public function editBlock(){
		$id=I("get.id");
		$this->html_code="
			<section id='slider' class='swipe' style='visibility: visible;'>
			<section class='swipe-wrap'>

<?php
foreach(\$data as \$k => \$v){
?>
	<figure>
	<div class='wrap'>
	<a href='product-detail.html'>
	<img alt='this is pic1' src='\$v' />
	</a>
	</div>
	</figure>
	<?php } ?>
	</section>
	</section> ";

$this->display();
		
	}
	public function doBlock(){
		$block_url="./Public/block/";
		$data=I("post.data");
		$type=I("post.type");
		$id=I("post.blockid");
		$html=I("post.html_code");
		if($type=="liquor"){
			$db_name="liquor";
		}
		else {
			$db_name="123";
		}
		$data=substr($data,0,-1);
		$db_name="liquor";
		$res=M($db_name)->where("id in ($data)")->select();

		$image_url_arr=array();


		for($i=0;$i<count($res);$i++){
			$url=$res[$i]['url'];
			$url_arr=explode(",",$url);
			array_push($image_url_arr,$url_arr[0]);
			
		}

		$data=$image_url_arr;
		$block_url=$block_url.$id.".html";
		$rs=file_put_contents($block_url,$this->html_code);
		ob_start();
		include($block_url);
		$res=ob_get_contents();
		$rs=file_put_contents($block_url,$res);










		


	



	}
	public function genBlock(){

		$this->data=array('http://img1.bitautoimg.com/ycmall/mweb/img/jiaodiantu01.jpg','http://img1.bitautoimg.com/ycmall/mweb/img/jiaodiantu01.jpg','http://img1.bitautoimg.com/ycmall/mweb/img/jiaodiantu01.jpg');
		$this->html_code="
		<section id='slider' class='swipe' style='visibility: visible;'>
			<section class='swipe-wrap'>

				<?php foreach(\$data as \$k => \$v){ ?>
				<figure>
					<div class='wrap'>
						<a href='product-detail.html'>
						<img alt='this is pic1' src='<?php echo \$v;?>' />
						</a>
					</div>
				</figure>
				<?php } ?>
			</section>
		</section> ";
		$data=$this->data;
		$s=file_put_contents("/home/mtf/Application/dq/Public/1.html",$this->html_code);
		ob_start();
		include "/home/mtf/Application/dq/Public/1.html";
		$content=ob_get_contents();
	}

}
