<!DOCTYPE HTML>
<?php include('connectdb.php'); 
$cid = $_GET['city'];
$sql = "SELECT * FROM place WHERE cid=".$cid.";";
$sql1 = "SELECT * FROM city WHERE cid=".$cid.";";
$result = mysqli_query($conn, $sql1);
$sqls = mysqli_query($conn, $sql);
$cname = "CITY";
$cmoto = "TAGLINE";
$cbanner = "images/pic04.jpg";
$cimage = "images/pic01.jpg";
$cabout = "ABOUT";
if($result->num_rows > 0){
    $row1 = $result->fetch_assoc();
    $cname = $row1['cname'];
    $cmoto = $row1['cmoto'];
    $cbanner = $row1['cbanner'];
    $cimage = $row1['cimage'];
    $cabout = $row1['cabout'];
}else{
    echo '<script>alert("'.$result->num_rows.'")</script>';
}
?>
<html>
	<head>
		<title>Rajasthan Tourism by Sahil Singh</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="index.php">Rajasthan Tourism</a> <?php echo ' by Sahil Singh' ?></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Location</a>
								<ul>
									<li><a href="#">City</a></li>
									<li><a href="#">Place</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="icon fa-angle-down">About</a>
								<ul>
								    <li><a href="#">Rajasthan</a></li>
								    <li><a href="#"> <?php echo "Sahil Singh"?> </a></li>
								</ul>
				            </li>
							<li><a href="admin.php" class="button">Sign In</a></li>
							
						</ul>
					</nav>
				</header>


			<!-- Banner -->
				<section id="banner" style='background-image: url("assets/css/images/banner.png"),url("<?php echo $cbanner; ?>");'>
					<h2><?php echo $cname;?></h2>
					<p><?php echo $cmoto;?></p>
					
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2><?php echo $cname;?>
							</h2>
							<p><?php echo $cabout;?></p>
						</header>
						<span class="image featured"><img src="<?php echo $cimage;?>" alt="" /></span>
					</section>


					<div class="row">
						 <?php
                        if($sqls->num_rows > 0){
                        while($row = $sqls->fetch_assoc()){
                            echo '<div class="6u 12u(narrower)">
							         <section class="box special">
								        <span class="image featured"><img src="'.$row['pbanner'].'" alt="" /></span><h3>'.$row['pname'].'</h3><p>'.$row['pabout'].'</p>
								        <ul class="actions">
									       <li><a href="place.php?place='.$row['pid'].'" class="button alt">Learn More</a></li>
								        </ul>
							         </section>
						          </div>';
                        }}
                    ?>
					</div>

				</section>

			<!-- CTA -->
				<section id="cta">

					

				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; All rights reserved.</li><li>Design: <a href="#">Sahil Singh</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>