<!DOCTYPE HTML>
<?php include('connectdb.php'); 
if(isset($_POST['submit'])){
    $cname=$_POST['cityname'];
    $cmoto=$_POST['citymoto'];
    $cabout=$_POST['cityabout'];
    $creach=$_POST['cityreach'];
    $target_dir="uploads/";
    $target_file=$target_dir. basename($_FILES["cityfile1"]["name"]);
    $target_file1=$target_dir. basename($_FILES["cityfile2"]["name"]);
    $uploadOk=1;
    $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
    $imageFileType1=pathinfo($target_file1,PATHINFO_EXTENSION);
    $check=getimagesize($_FILES["cityfile1"]["tmp_name"]);
    $check1=getimagesize($_FILES["cityfile2"]["tmp_name"]);
    if($check !==false  && $check1!==false){
        $uploadOk = 1;
    } else {
        echo '<script>alert("File Is Not An Image")</script>';
        $uploadOk = 0;
    }
    if($uploadOk == 1){
        $sql = "insert into city (cname, cmoto, cabout, cbanner, cimage, creach) values('$cname', '$cmoto', '$cabout', '$target_file', '$target_file1', '$creach')";
        if(mysqli_query($conn, $sql)){
            echo '<script>alert("Uplaoded")</script>';
        }else{
            echo '<script>alert("Not Uplaoded")</script>';
        }
        if (move_uploaded_file($_FILES["cityfile1"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["cityfile2"]["tmp_name"], $target_file1)) {
            echo '<script>alert("Pictures Uplaoded")</script>';
        } else {
            echo '<script>alert("Pictures Not Uplaoded")</script>';
        }
    }else{
        echo '<script>alert("Data Not Uplaoded")</script>';
    }
    
}
?>
<html>
    <head>
        <title>Rajasthan Tourism by Sahil Singh</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--<link rel="stylesheet" href="assets/css/font-awesome.min.css"/>-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body class="landing">
        <div id="page-wrapper">
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
									<li>
										<a href="#">About</a>
										<ul>
											<li><a href="#">Rajasthan</a></li>
											<li><a href="#"> <?php echo "Sahil Singh"?> </a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="#" class="button">Sign Up</a></li>
							
						</ul>
					</nav>
				</header>
              
              <section id="cta">

					<h2>Add City</h2>
					<p></p>

					<form method="post" action="" enctype="multipart/form-data">
						<div class="row uniform 50%">
							<div class="12u 12u(mobilep)">
								<input type="text" name="cityname" id="cityname" placeholder="City Name" required/>
							</div>
							<div class="12u 12u(mobilep)">
								<input type="text" name="citymoto" id="citymoto" placeholder="City Tagline" required/>
							</div>
							<div class="12u 12u(mobilep)">
								<textarea name="cityabout" class="form-control" id="cityabout" placeholder="About City" required></textarea>
							</div>
							<div class="12u 12u(mobilep)">
								 <textarea name="cityreach" id="cityreach" class="form-control" placeholder="How to Reach" required></textarea>
							</div>
							<div class="12u 12u(mobilep)">
								<input type="file" name="cityfile1" id="cityfile1" style="color:rgba(255,255,255,0.85)" required/>
							</div>
							<div class="12u 12u(mobilep)">
								 <input type="file" name="cityfile2" id="cityfile2" style="color:rgba(255,255,255,0.85);" required/>
							</div>
							<div class="12u 12u(mobilep)">
								<input type="submit" name="submit" value="Upload" class="fit" />
							</div>
						</div>
					</form>

				</section>
              
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