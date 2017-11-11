<!DOCTYPE HTML>
<?php include('connectdb.php'); 
$sql = "SELECT * FROM city;";
$sqls = mysqli_query($conn, $sql);


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
								<a href="#">Place</a>
							</li>
							<li>
								<a href="#" class="icon fa-angle-down">About</a>
								<ul>
								    <li><a href="#">Rajasthan</a></li>
                                </ul>
				            </li>
							<li><a href="admin.php" class="button">Sign In</a></li>
							
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner" style='background-image: url("assets/css/images/banner.png"),url("images/rajasthan1.jpg");'>
					<h2>Rajasthan</h2>
					<p>Explore the land of Maharajas.</p>
					
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Rajasthan - The Incridible State of India
							</h2>
							<p>Rajasthan, the Land of Kings is synonymous to heroism, royalty and honour. Historic tales of battles fought and romance of the riches adorn the walls of the state. Established in the era marked with wartime ballads yet living in the modern period, this beautiful region is a travellers\' destination. Those looking out for the remnants of the past should not pass up a trip to Rajasthan. For wanderers interested in adventures at the various landscapes should definitely get a glimpse of this venturesome state. And for the ones who plan to have a quiet sojourn gazing at the beauty of the golden sand dunes, Rajasthan tops your list. Come, explore the miscellany of the old and the new in Rajasthan, a glittering jewel of India.
							</p>
						</header>
						<span class="image featured"><img src="images/rajasthan0.jpg" alt="" /></span>
					</section>
                    <div class="row">
                    <?php
                        if($sqls->num_rows > 0){
                        while($row = $sqls->fetch_assoc()){
                            echo '<div class="6u 12u(narrower)">
							         <section class="box special">
								        <span class="image featured"><img src="'.$row['cbanner'].'" alt="" /></span><h3>'.$row['cname'].'</h3><p>'.$row['cmoto'].'</p>
								        <ul class="actions">
									       <li><a href="city.php?city='.$row['cid'].'" class="button alt">Learn More</a></li>
								        </ul>
							         </section>
						          </div>';
                        }}
                    ?>
                    </div>
					
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