<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==1)
	{
header('location:index.php');
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

	<title>Timila Dance Academy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Dance school in Christchurch, Dance school NZ, Dance Academy, Dance Christchurch, CHC Dance, Canterbury Dance, Dance, Dance school, Bollywood dance" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/morris.css" type="text/css"/>
	<!-- <link href="css/font-awesome.css" rel="stylesheet"> -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' /> -->



	</head>
<body>
	<?php include('includes/header.php');?>
	<!--- banner ---->
	<div class="banner-3">
		<div class="container">
			<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Timila Dance Academy - Photos</h1>
		</div>
	</div>
	<!--- /banner ---->


	<!--- photo ---->
	<div class="rooms">
		<div class="container">

			<div class="room-bottom">
				<h3>Event Photos</h3>





	<?php
	$eid=intval($_GET['eid']);
	$sql = "SELECT * from tblevents";
	$query = $dbh->prepare($sql);
	$query->bindParam(':eid',$eid, PDO::PARAM_STR);
	$query->execute();
	$results=$query->fetchAll(PDO::FETCH_OBJ);
	$cnt=1;
	if($query->rowCount() > 0)
	{
	foreach($results as $result)
	{	?>
		<div class="form-group">
		<div class="col-sm-2 control-label"><h4>Event Title</h4></div>
		<div class="col-sm-10"><?php echo htmlentities($result->EventsTitle);?></div>
		</div>

		<div class="form-group">
		<label class="col-sm-2 control-label">Event Overview</label>
		<div class="col-sm-4"><?php echo htmlentities($result->EventsOverview);?></div>
		</div>

				<div class="rom-btm">
					<div class="col-md-6 room-left wow fadeInLeft animated" data-wow-delay=".5s">
						<img src="admin/danceimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="" width="150%">

					</div>
				</div>
<div><img src="admin/danceimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image" width="900" height="560"></div>
	<?php }} ?>



			</div>
		</div>
	</div>
	<!--- /photos ---->

	<!--- /footer-top ---->
	<?php include('includes/footer.php');?>



</body>
</html>
<?php ?>
