<?php
	use google\appengine\api\users\User;
	use google\appengine\api\users\UserService;
	
	global $appid,$user,$userdata;
	
	if(!$user) return;
	if($_POST["nick"]){
		$uid = $user->getUserId();
		$userdata['product']=$_POST['product'];
		
		
		if($_FILES['pic']['tmp_name']!=''){
			$userpic = "gs://$appid/{$uid}.jpg";
			move_uploaded_file($_FILES['pic']['tmp_name'],$userpic);
		}
		$json = json_encode($userdata, JSON_PRETTY_PRINT);
		$userfile = "gs://$appid/user_$uid.json";
		file_put_contents($userfile,$json);
		echo "<br>บันทึกเรียบร้อย<a href='product.php' id='pagelink'>ตกลง</a>";
		
		return;
	}
	
?>
<br>

	<form method="post" action="" enctype="multipart/form-data">

				<div class="form-group col-md-12" >
				<label for="product">product</label>
				<input class="form-control" type='text' name='product' value="<?=$userdata['product'] ?>">
				</div>
			
				<div class="form-group col-md-6">
				<label for="file">ภาพสินค้า</label>
				<input class="form-control" type='file' name='pic'>
				</div>
				
				<div class="col-md-12">
				<button class="btn btn-primary"> Save </button>
				</div>
						
    </form>           


