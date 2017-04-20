<?php
	use google\appengine\api\users\User;
	use google\appengine\api\users\UserService;
	
	global $appid,$user,$userdata;
	
	if(!$user) return;
	if($_POST["nick"]){
		$uid = $user->getUserId();
		$userdata['nick']=$_POST['nick'];
		$userdata['fname']=$_POST['fname'];
		$userdata['lname']=$_POST['lname'];
		$userdata['color']=$_POST['color'];
		$userdata['job']=$_POST['job'];
		$userdata['birthday']=$_POST['birthday'];
		
		if($_FILES['pic']['tmp_name']!=''){
			$userpic = "gs://$appid/{$uid}.jpg";
			move_uploaded_file($_FILES['pic']['tmp_name'],$userpic);
		}
		$json = json_encode($userdata, JSON_PRETTY_PRINT);
		$userfile = "gs://$appid/user_$uid.json";
		file_put_contents($userfile,$json);
		echo "<br>บันทึกเรียบร้อย<a href='main.php' id='pagelink'>ตกลง</a>";
		
		return;
	}
	
?>
<form method="post" action="" enctype="multipart/form-data">
	
	<div class="form-group col-md-12" >
		<label for="nick">ชื่อเล่น</label>
		<input class="form-control" type='text' name='nick' value="<?=$userdata['nick'] ?>">
	</div>
	<div class="form-group col-md-6">
		<label for="fname">ชื่อ</label>
		<input class="form-control" type='text' name='fname' value="<?=$userdata["fname"]?>">
	</div>
	<div class="form-group col-md-6">
		<label for="flname">นามสกุล</label>
		<input class="form-control" type='text' name='lname' value="<?=$userdata["lname"]?>">
	</div>
	<div class="form-group col-md-6">
		<label for="color">สีที่ชอบ</label>
		<input class="form-control" type='color' name='color' value="<?=$userdata["color"]?>">
	</div>
	<div class="form-group col-md-6">
		<label for="file">ภาพประจำตัว</label>
		<input class="form-control" type='file' name='pic'>
	</div>
	
	<div class="form-group col-md-6">
		<label for="job">อาชีพ</label>
		<input class="form-control" type='text' name='job' value="<?=$userdata["job"]?>">
	</div>
	
	<div class="form-group col-md-6">
		<label for="birthday">วันเกิด</label>
		<input class="form-control" type='date' name='birthday' value="<?=$userdata["birthday"]?>">
	</div>
	
	<div class="col-md-12">
		<button class="btn btn-primary"> Save </button>
	</div>

</form>
