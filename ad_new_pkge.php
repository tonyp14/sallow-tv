<?php
include_once 'connect.php'; 
session_start();
if(!(isset($_SESSION['user_name'])))
{
	header('location:index.php');
}

if(isset($_POST['add']))
{
//$sc=$_POST["schename"];
$pn=$_POST["pkname"];
$ch=$_POST["chnl"];
$stz="0";




$qry="INSERT INTO `package`(`channel_id`, `status`, `p_name_id`) VALUES
 ('$ch','$stz','$pn')";
 
 $a=mysqli_query($con,$qry);
}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Tearm swallow add pack</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div class="wrapper style1">

				<!-- Header -->
					<div id="header" class="skel-panels-fixed">
						<div id="logo">
							<h1>SALLOW TV</h1>
							<span class="tag">Enjoy Your Days With Swallow.</span>
						</div>
						<nav id="nav">
							<ul>
								<li ><a href="ad_home.php">Home</a></li>
								<li><a href="ad_new_pkge.php" >Add Channel List</a></li>
								<li><a href="">Channel Details</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>
				<!-- Header -->

				<!-- Page -->
					
								<section>
									
									<center>
	<div>
<form  name="adpack" action="ad_new_pkge.php" method="post" id="form"
			style="border:2px solid #DC6180;
                  background-color: #fff;
						 margin:15px 250px 10px 250px;
						 background-size: cover;
							"><br>
							
			
		<header class="major">
		<center><h3>Add Channel to package</h3></center>
		</header>
	
			<br><br>
			<label>Select pack_name : </label>
			<select name="pkname" style="width:150px;">
			<option>--Select--</option>
            <?php
                
                $sql1 = "SELECT `p_name_id`, `p_name`, `p_icon` FROM `pack_name`;";
                $result1 = mysqli_query($con, $sql1);
                if (mysqli_num_rows($result1) > 0) 
                   {
                       while($row = mysqli_fetch_assoc($result1)) 
                          {
                            $id1=$row["p_name_id"]; 
							$pname=$row["p_name"];
            ?>

            <option value="<?php echo $id1; ?>"><?php echo $pname; ?></option>
                          <?php
						  } }?>
        </select> <br><br>
		<label>Select Channel &nbsp&nbsp : </label>
		<select name="chnl" style="width:150px;">
		<option>--Select--</option>
            <?php
                
                $sql2 = "SELECT `channel_id`, `c_category_id`,
				`channel_type_id`, `c_name`, `logo`, `discripition`, `status` FROM `channel` ;";
                $result2 = mysqli_query($con, $sql2);
                if (mysqli_num_rows($result2) > 0) 
                   {
                       while($row = mysqli_fetch_assoc($result2)) 
                          {
                            $id2=$row["channel_id"]; 
							$cname=$row["c_name"];
            ?>

            <option value="<?php echo $id2; ?>"><?php echo $cname; ?></option>
                          <?php
						  } }?>
        </select> <br><br>
		<input type='submit' name="add" value='SAVE'>
		
		
		
		
		</form></form></div>

	
</center>

					
						
					
					
				</section>
	
<div id="footer" class="wrapper style2">

			<section>
					<header >
						<h2>SWALLOW TV</h2><br>
						<h3>Enjoy Your Days With Swallow.</h3><br><br><br>
						<h5>Powered by Tearm swallow,  &nbspswallow777kerala@ac.in &nbsp ph: +91 8846521474</h5>
						
					</header>
					
				</section>
		</div>
	</body>
</html>