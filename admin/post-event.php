<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{
header('location:index.php');
}
else{

if(isset($_POST['submit']))
  {
$eventstitle=$_POST['eventstitle'];
$eventsoverview=$_POST['eventsoverview'];
$eventyear=$_POST['eventyear'];
$vimage1=$_FILES["img1"]["name"];
$vimage2=$_FILES["img2"]["name"];
$vimage3=$_FILES["img3"]["name"];
$vimage4=$_FILES["img4"]["name"];
$vimage5=$_FILES["img5"]["name"];
$vimage6=$_FILES["img6"]["name"];
$vimage7=$_FILES["img7"]["name"];
$vimage8=$_FILES["img8"]["name"];
$vimage9=$_FILES["img9"]["name"];
$vimage10=$_FILES["img10"]["name"];
move_uploaded_file($_FILES["img1"]["tmp_name"],"img/danceimage/".$_FILES["img1"]["name"]);
move_uploaded_file($_FILES["img2"]["tmp_name"],"img/danceimage/".$_FILES["img2"]["name"]);
move_uploaded_file($_FILES["img3"]["tmp_name"],"img/danceimage/".$_FILES["img3"]["name"]);
move_uploaded_file($_FILES["img4"]["tmp_name"],"img/danceimage/".$_FILES["img4"]["name"]);
move_uploaded_file($_FILES["img5"]["tmp_name"],"img/danceimage/".$_FILES["img5"]["name"]);
move_uploaded_file($_FILES["img6"]["tmp_name"],"img/danceimage/".$_FILES["img6"]["name"]);
move_uploaded_file($_FILES["img7"]["tmp_name"],"img/danceimage/".$_FILES["img7"]["name"]);
move_uploaded_file($_FILES["img8"]["tmp_name"],"img/danceimage/".$_FILES["img8"]["name"]);
move_uploaded_file($_FILES["img9"]["tmp_name"],"img/danceimage/".$_FILES["img9"]["name"]);
move_uploaded_file($_FILES["img10"]["tmp_name"],"img/danceimage/".$_FILES["img10"]["name"]);

$sql="INSERT INTO tblevents(EventsTitle,EventsOverview,EventYear,Vimage1,Vimage2,Vimage3,Vimage4,Vimage5,Vimage6,Vimage7,Vimage8,Vimage9,Vimage10) VALUES(:eventstitle,:eventsoverview,:eventyear,:vimage1,:vimage2,:vimage3,:vimage4,:vimage5,:vimage6,:vimage7,:vimage8,:vimage9,:vimage10)";
$query = $dbh->prepare($sql);
$query->bindParam(':eventstitle',$eventstitle,PDO::PARAM_STR);
$query->bindParam(':eventsoverview',$eventsoverview,PDO::PARAM_STR);
$query->bindParam(':eventyear',$eventyear,PDO::PARAM_STR);
$query->bindParam(':vimage1',$vimage1,PDO::PARAM_STR);
$query->bindParam(':vimage2',$vimage2,PDO::PARAM_STR);
$query->bindParam(':vimage3',$vimage3,PDO::PARAM_STR);
$query->bindParam(':vimage4',$vimage4,PDO::PARAM_STR);
$query->bindParam(':vimage5',$vimage5,PDO::PARAM_STR);
$query->bindParam(':vimage6',$vimage6,PDO::PARAM_STR);
$query->bindParam(':vimage7',$vimage7,PDO::PARAM_STR);
$query->bindParam(':vimage8',$vimage8,PDO::PARAM_STR);
$query->bindParam(':vimage9',$vimage9,PDO::PARAM_STR);
$query->bindParam(':vimage10',$vimage10,PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Event posted successfully";
}
else
{
$error="Something went wrong. Please try again";
}

}


	?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>Timila Dance Academy | Admin Photo Creation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/morris.css" type="text/css"/>
	<!-- <link href="css/font-awesome.css" rel="stylesheet"> -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' /> -->
	  <style>
			.errorWrap {
	    padding: 10px;
	    margin: 0 0 20px 0;
	    background: #fff;
	    border-left: 4px solid #dd3d36;
	    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	}
	.succWrap{
	    padding: 10px;
	    margin: 0 0 20px 0;
	    background: #fff;
	    border-left: 4px solid #5cb85c;
	    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	}
			</style>

	</head>

	<div class="page-container">
	<!--/content-inner-->
	<div class="left-content">
		<div class="mother-grid-inner">
						 <!--header start here-->
	<?php include('includes/header.php');?>
	<?php include('includes/sidebarmenu.php');?>

						<div class="clearfix"> </div>
			 </div>
	<!--heder end here-->
	<ol class="breadcrumb">
							 <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Update Photos </li>
					 </ol>
	 <!--grid-->
	<div class="grid-form">

	<!---->
	<div class="grid-form1">
					<h3>Update Events Photos</h3>
							 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }
			 else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
			 <div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Event Title<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="eventstitle" class="form-control" >
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Event Year<span style="color:red">*</span></label>
<div class="col-sm-3">
<input type="text" name="eventyear" class="form-control">
</div>
<!-- <label class="col-sm-2 control-label">Select Brand<span style="color:red">*</span></label> -->

</div>

<div class="hr-dashed"></div>
	<div class="form-group">
			<label class="col-sm-2 control-label">Events Overview<span style="color:red">*</span></label>
		<div class="col-sm-9">
			<textarea class="form-control" name="vehicalorcview" rows="3" ></textarea>
		</div>
	</div>

<div class="hr-dashed"></div>


<div class="form-group">
<div class="col-sm-12" >
<h4><b>Upload Images</b></h4>
</div>
</div>

<div class ="uploadimage">
<div class="form-group">
<div class="col-sm-3">
Image 1 <span style="color:red">*</span><input type="file" name="img1" >
</div>
<div class="col-sm-3">
Image 2<span style="color:red">*</span><input type="file" name="img2" >
</div>
<div class="col-sm-3">
Image 3<span style="color:red">*</span><input type="file" name="img3" >
</div>
<div class="col-sm-3">
Image 4<span style="color:red">*</span><input type="file" name="img4" >
</div>
</div>


<div class="form-group">
	<div class="col-sm-3">
	Image 5<span style="color:red">*</span><input type="file" name="img5" >
	</div>
	<div class="col-sm-3">
	Image 6<span style="color:red">*</span><input type="file" name="img6">
	</div>
	<div class="col-sm-3">
	Image 7<span style="color:red">*</span><input type="file" name="img7" >
	</div>
	<div class="col-sm-3">
	Image 8<span style="color:red">*</span><input type="file" name="img8">
	</div>

</div>

<div class="form-group">
	<div class="col-sm-6">
	Image 9<span style="color:red">*</span><input type="file" name="img9" >
	</div>
	<div class="col-sm-6">
	Image 10<span style="color:red">*</span><input type="file" name="img10">
	</div>
</div>
</div>
<div class="hr-dashed"></div>
</div>
</div>
</div>
</div>

					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-8 col-sm-offset-2">
						<button class="btn btn-default" type="reset">Cancel</button>
						<button class="btn btn-primary" name="submit" type="submit">Save changes</button>
					</div>
				</div>

			</div>
	


</body>
</html>
<?php } ?>
