<?php if($_SESSION['login'])
{?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li class="prnt"><a href="profile.php">My Profile</a></li>
				<li class="prnt"><a href="change-password.php">Change Password</a></li>
			<li class="prnt"><a href="tour-history.php">My Package History</a></li>
			<li class="prnt"><a href="issuetickets.php">Issue Tickets</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
			<li class="tol">Welcome :</li>
			<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li>
			<li class="sigi"><a href="logout.php" >/ Logout</a></li>
        </ul>
		<!-- <div class="clearfix"></div>
	</div>
</div><?php } else {?>
<<<<<<< HEAD

<?php }?>
=======
<!-- <div class="top-header">
	<div class="container">
		<!-- <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
				<li class="hm"><a href="admin/index.php">Admin Login</a></li>
		</ul> -->
		<!-- <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
			<li class="tol">Contact Timila : 022-620-9744</li>
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li>
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Sign In</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<?php }?>  -->
<!--- /top-header ---->
>>>>>>> 5eb73ad6d17cff5cca7d1d9a77b46def921a1ef7
<!--- header ---->
<!-- <div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php"><img src="images/Logo.png" width="25%"

		</div>

		<!<div class="lock fadeInDown animated" data-wow-delay=".5s">
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">SAFE &amp; SECURE </div></li>
			<div class="clearfix"></div>
		</div> -->
		<!-- <div class="clearfix"></div>
	</div>
</div> -->
<!--- /header ---->
<!--- footer-btm ---->
<!-- <div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s"> -->
	<!-- <div class="container"> -->
	<div class="navigation footer-btm wow fadeInLeft animated" data-wow-delay=".5s"
	style="visibility:visible; animation-delay:0.5s; animation-name: fadeInLeft; position: absolute;
	z-index: 99; width: 100%;">
			<nav class="navbar navbar-default container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<!-- <div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div> -->
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a class="navbar-brand" href="index.php"><img src="images/Logo_vintage.png" style="width: 7rem"></a></li>
							<li><a href="index.php">Home</a></li>
							<li><a href="page.php?type=aboutus">About Us</a></li>
<<<<<<< HEAD
								<li class="dropdown"><a href="#" data-toggle="dropdown" aria haspopup="true" aria-expanded="false" aria-hidden="true">Dance Galleries</a>
								<ul class="dropdown-menu">
									<li><a href=" ">Photos</a></li>
									<li><a href="package-list.php">Videos</a></li>
								</ul>
								</li>
								<li><a href="layout-list.php">Contact Us</a></li>
								<!-- <?php if($_SESSION['login'])
=======
								<!-- <li><a href="package-list.php">Booking</a></li> -->
								<li><a href="photoList.php">Dance Galleries</a></li>
								<li><a href="contact-us.php">Contact us</a></li>
								<?php if($_SESSION['login'])
>>>>>>> 5eb73ad6d17cff5cca7d1d9a77b46def921a1ef7
{?>
								<li><a href="#" data-toggle="modal" data-target="#myModal3">  Write Us </a>  </li>
								<?php } else { ?>
								<!-- <li><a href="enquiry.php"> Enquiry </a>  </li> -->
								<?php } ?>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div>
				<!-- //.navbar-collapse -->
			</nav>
		</div>

		<div class="clearfix"></div>
	<!-- </div> -->
<!-- </div>
