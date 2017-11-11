<!DOCTYPE HTML>
<?php include('connectdb.php'); 
$pid = $_GET['place'];
$sql = "SELECT * FROM place where pid=".$pid.";";
$sqls = mysqli_query($conn, $sql);
$pname = "PLACE";
$pabout = "ABOUT";
$pbanner = "images/pic04.jpg";
$pimage = "images/pic01.jpg";
if($sqls->num_rows > 0){
    $row = $sqls->fetch_assoc();
    $pname = $row['pname'];
    $pabout = $row['pabout'];
    $pbanner = $row['pbanner'];
    $pimage = $row['pimage'];
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
				<section id="banner" style='background-image: url("assets/css/images/banner.png"),url("<?php echo $pbanner; ?>");'>
					<h2><?php echo $pname;?></h2>
					
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2><?php echo $pname; ?>
							</h2>
							<p><?php echo $pabout; ?></p>
						</header>
						<span class="image featured"><img src="<?php echo $pimage; ?>" alt="" /></span>
						
					</section>
					
				</section>

			<!-- CTA -->
				<section id="cta">

					<h2></h2>
					<p></p>


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