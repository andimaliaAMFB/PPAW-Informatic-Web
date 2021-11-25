<?php 
	include 'config.php';
	$db = new database();

	session_start();

	if (!isset($_SESSION['nim'])) {
	    header("Location: index.php");
	}

	$nim = $_SESSION['nim'];
	$nama = $db->getNama($_SESSION['nim']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Informatic Web_PPAW-B</title>
	<!-- JavaScript Bundle with Popper -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://getbootstrap.com/docs/4.4/examples/sign-in/signin.css">
	<link rel="stylesheet" href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body style="display: grid; padding: 0; align-items: unset;">


	<!--Header-->
	<header>
		<div class="navbar navbar-dark bg-dark shadow-sm">
			<div class="container d-flex justify-content-between">
				<a href="#" class="navbar-brand d-flex align-items-center">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="mr-2 bi bi-laptop" viewBox="0 0 16 16">
					  <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
					</svg>
					<strong>Informatic Web</strong>
				</a>
				<div class="float-sm-end">
					<button class="navbar-toggler" type="button" onclick="myFunction()">
						<span class="navbar-toggler-icon"></span>
					</button>
					<ul class="nav-item dropdown dropdown-menu show float-sm-end" id="myDIV" aria-labelledby="dropdown07XL" data-bs-popper="none" style="display: none; left: auto;">
						<li><a class="dropdown-item" href="logout.php">Log Out</a></li>
						<li><a class="dropdown-item" href="#">Another action</a></li>
						<li><a class="dropdown-item" href="#">Something else here</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	

	<menu>
		<div class="container marketing">

			<div class="row featurette">
				<div class="col-md-7 order-md-2">
					<h2 class="featurette-heading"><?php echo $nama;?></h2>
					<p class="lead"><?php echo $nim;?></p>
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="album py-5 bg-light">
			    <div class="container">

			      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			        <?php
			        	for ($i=1; $i <= 6; $i++) { 
			        		?>
					        <div class="col">
					          <div class="card shadow-sm">
					            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
					            	<rect width="100%" height="100%" fill="#55595c"></rect>
					            </svg>

					            <div class="card-body" style="text-align: center;">
					            	<h5 class="card-title">Course <?php echo $i;?></h5>
					              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis urna id volutpat lacus laoreet non.</p>
					              <div class="d-flex justify-content-between align-items-center">
					              	  <a href="#" class="btn btn-outline-secondary btn-sm btn-block">View</a>
					              </div>
					            </div>
					          </div>
					        </div>
					        <?php
					    }
					    ?>

			    </div>
			</div>
		</div>
	</menu>
	

	<footer class="text-muted pt-5 pb-2">
	  <div class="container">
	    <p class="float-end mb-1">
			<a href="#">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
				  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
				</svg>
			</a>
	    </p>
	    <p class="mb-1">This WEBSITE Was Made by Kelompok 1 Kelas B</p>
		<p class="mb-1">for "Praktikum Pengembangan Aplikasi Web" Studi 2021</p>
		<p class="mb-0 text-muted">© Universitas Islam Negeri SGD Bandung - Teknik Informatika - 2021</p>
	  </div>
	</footer>
</body>
</html>

<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>