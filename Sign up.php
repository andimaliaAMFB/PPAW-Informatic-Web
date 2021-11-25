<?php
	include 'config.php';
	$db = new database();

	session_start();

	error_reporting(0);

	if (isset($_SESSION['nim'])) {
	    header("Location:index.php");
	}

	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$password2 = md5($_POST['password2']);

		$db->registrasi($nim,$nama,$email,$password,$password2);
	}
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
			</div>
		</div>
	</header>
	

	<body>
		<menu class="text-center">

			<h1 class="h3 mb-3 font-weight-normal">Informatic Web</h1>
			<p>Praktikum Pengembangan Aplikasi Web Kelas B 2021</p>
			<form action="" class="form-signin" method="POST" style="max-width: 50%; margin-top: var(--bs-gutter-y);">
				<h4 class="mb-3">Daftar Akun</h4>

				<div class="row g-3">
				  <div class="col-12">
				    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $nama; ?>" required="">
				    <div class="invalid-feedback">
				      Nama Harus dimasukan
				    </div>
				  </div>

				  <div class="col-12">
				    <input type="text" class="form-control" name="nim" placeholder="NIM" value="<?php echo $nim; ?>" required="">
				    <div class="invalid-feedback">
				        NIM Harus dimasukan
				    </div>
				  </div>

				  <div class="col-12">
				    <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email; ?>" required="">
				    <div class="invalid-feedback">
				    	Masukan Email yang Valid
				    </div>
				  </div>

				  <div class="col-12">
				    <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $_POST['password']; ?>" required="">
				    <div class="invalid-feedback">
				    	Masukan Password yang Valid
				    </div>
				  </div>

				  <div class="col-12">
				    <input type="password" class="form-control" name="password2" placeholder="Confirm Password" value="<?php echo $_POST['password2']; ?>" required="">
				    <div class="invalid-feedback">
				    	Password Tidak Sama
				    </div>
				  </div>

				<hr class="my-4">

				<button class="w-100 btn btn-primary btn-lg" name="submit">Sign Up</button>
				<p>
					Mempunyai Akun? Login <a href="index.php">Disini</a>
				</p>
			</form>
		</menu>
	</body>
	

	<footer class="text-muted pt-5 pb-2">
	  <div class="container text-center">
		<p class="mb-0 mx-auto text-muted">© Universitas Islam Negeri SGD Bandung - Teknik Informatika - 2021</p>
	  </div>
	</footer>
</body>
</html>