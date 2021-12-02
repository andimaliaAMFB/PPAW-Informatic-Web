<?php 
	include 'config.php';
	$db = new database();

	session_start();

	if (!isset($_SESSION['nim']) && $_SESSION['login'] != true ) {
	    header("Location: login.php");
	}

	$nimsession = $_SESSION['nim'];
	$namasession = $db->getUser($nimsession,"nama");
	$emailsession = $db->getUser($nimsession,"email");

	$nama = $db->getMahasiswa($nimsession,"nama");
	$notlp = $db->getMahasiswa($nimsession,"notlp");
	$email = $db->getMahasiswa($nimsession,"email");
	$alamat = $db->getMahasiswa($nimsession,"alamat");
	$kota = $db->getMahasiswa($nimsession,"kota");
	$provinsi = $db->getMahasiswa($nimsession,"provinsi");
	$kodepos = $db->getMahasiswa($nimsession,"kodepos");
	$jurusan = $db->getMahasiswa($nimsession,"jurusan");
	$universitas = $db->getMahasiswa($nimsession,"universitas");

	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nim = $nimsession;
		$notlp = $_POST['notlp'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		$kota = $_POST['kota'];
		$provinsi = $_POST['provinsi'];
		$kodepos = $_POST['kodepos'];
		$jurusan = $_POST['jurusan'];
		$universitas = $_POST['universitas'];

		$db->profile($nimsession,$nama,$nim,$notlp,$email,$alamat,$kota,$provinsi,$kodepos,$jurusan,$universitas);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Informatic Web_PPAW-B</title>
	<!-- JavaScript Bundle with Popper -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/SideBar.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://getbootstrap.com/docs/4.4/examples/sign-in/signin.css">
	<link rel="stylesheet" href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body style="display: grid; padding: 0; align-items: unset;">


	<!--Header-->
	<header class="navbar navbar-dark p-3 bg-dark text-white shadow-sm main-header">
		<div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start m-0 mw-100 ">
			<a href="#" onclick="SideNavOpen()">
				<span class="navbar-toggler-icon mx-1 me-4 p-0" style="width: 24px;height: 24px;"></span>
			</a>
	        <a href="#" class="navbar-brand">
	        	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="mr-2 bi bi-laptop" viewBox="0 0 16 16">
	        	  <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
	        	</svg>
	        	<strong>Informatic Web</strong>
	        </a>

	        <div class="float-sm-end nav col-12 col-lg-auto ms-lg-auto mb-2 align-items-center justify-content-center mb-md-0 mw-100 p-0">
	        	<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
	        		<div class="input-group input-group-sm">
	        			<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
	        			<div class="input-group-append">
	        				<button class="btn btn-navbar" type="submit" style="color: #FFFFFF">
	        					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
	        					  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
	        					</svg>
	        				</button>
	        			</div>
	        		</div>
	        	</form>

	        	<div class="text-end">
	        	  <div class="notification">
	        	  	<button class="btn btn-navbar" style="color: #FFFFFF" onclick="Notification()">
	        	  		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
	        	  		  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
	        	  		</svg>
	        	  	</button>
	        	  	<div class="nav-item dropdown dropdown-menu show float-sm-end shadow" id="Notif" aria-labelledby="dropdown07XL" data-bs-popper="none" style="display: none;position: absolute; right: 0; left: auto;text-align: center;">
	        	  		<span class="dropdown-header">15 Notifications</span>
	        	  		<div class="dropdown-divider"></div>
	        	  		<a href="#" class="dropdown-item">
	        	  		    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
	        	  				<path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
	        	  			</svg> 4 new messages
	        	  		    <span class="float-right text-muted text-sm">3 mins</span>
	        	  		</a>
	        	  		<div class="dropdown-divider"></div>
	        	  		<a href="#" class="dropdown-item">
	        	  			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
	        	  				<path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
	        	  				<path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
	        	  			</svg> 8 friend requests
	        	  		  <span class="float-right text-muted text-sm">12 hours</span>
	        	  		</a>
	        	  		<div class="dropdown-divider"></div>
	        	  		<a href="#" class="dropdown-item">
	        	  			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
	        	  				<path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/>
	        	  			</svg> 3 new reports
	        	  			<span class="float-right text-muted text-sm">2 days</span>
	        	  		</a>
	        	  		<div class="dropdown-divider"></div>
	        	  		<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
	        	  	</div>
	        	  </div>
	        	</div>
	        </div>
		</div>
	</header>
	
	<!-- Side Bar Manu -->
	<div class="bg-dark shadow-sm mySideBar" id="mySideBar" style="overflow-x: hidden;display: none;">
		<div class="closebtn modal-header mb-0 mx-auto border-bottom-0" >
			<a href="javascript:void(0)" onclick="SideNavClose()">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
					<path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
				</svg>
			</a>


			<a href="#" class="navbar-brand">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="mr-2 bi bi-laptop" viewBox="0 0 16 16">
				  <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
				</svg>
				<strong>Informatic Web</strong>
			</a>
		</div>
		<div class="menuContent text-sm-center">
			<div class="Account align-items-center justify-content-center text-center p-1" style="background-color: #495057;">
				<div class="mx-auto m-3 w-25">
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
						<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					</svg>
				</div>
				<p class="lead mb-0"><?php if($nama==null){echo $namasession;}else{ echo $nama;} ?></p>
				<p class="small mb-0"><?php echo $nimsession;?></p>
			</div>
			<a class="dropdown-item" href="index.php">
				<div class="align-items-center justify-content-center">
					<svg xmlns="http://www.w3.org/2000/svg" height="24" fill="currentColor" class="bi bi-house-fill mr-2" viewBox="0 0 16 16">
					  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
					  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
					</svg> Dashboard
				</div>
			</a>
			<a class="dropdown-item" href="Course.php">
				<svg xmlns="http://www.w3.org/2000/svg" height="24" fill="currentColor" class="bi bi-grid-fill mr-2" viewBox="0 0 16 16">
				  <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
				</svg> List Course
			</a>

			<a class="dropdown-item" href="Dashboard.php">
				<svg xmlns="http://www.w3.org/2000/svg" height="24" fill="currentColor" class="bi bi-clock mr-2" viewBox="0 0 16 16">
				  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
				  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
				</svg> My Course
			</a>

			<a class="dropdown-item" href="Setting.php">
				<svg xmlns="http://www.w3.org/2000/svg" height="24" fill="currentColor" class="bi bi-gear-fill mr-2" viewBox="0 0 16 16">
				  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
				</svg> Setting
			</a>
			<a class="dropdown-item bg-danger" href="logout.php">Log Out</a>
		</div>
	</div>

	<!-- Content -->
	<menu class="content-wrapper">
		<div class="container marketing" style="min-height: 900px;">
			<!-- Biodata -->
			<div id="Biodata">
				<div class="row g-0 border rounded overflow-hidden flex-md-row my-6 shadow-sm h-md-250 position-relative" id="Biodata">
			        <div class="col-auto d-none d-lg-block justify-content-center text-center">
			            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-fill w-50 mx-auto" viewBox="0 0 16 16">
	  						<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
	  					</svg>
			        </div>
			        <div class="col p-4 d-flex flex-column position-static">
				        <h3 class="mb-0"><?php if($nama==null){echo $namasession;}else{ echo $nama;} ?></h3>
				        <div class="mb-1 text-muted"><?php echo $nimsession;?></div>

				        <div class="float-sm-end ms-auto">
				        	<a href="#" class="btn btn-outline-secondary" onclick="EditOpen()">Edit Profile</a>
				        </div>
			        </div>
			    </div>

				<div class="row g-0 border rounded overflow-hidden flex-md-row my-6 shadow-sm h-md-250 position-relative" id="Biodata">
			        <div class="col p-4 d-flex flex-column position-static">
				        <table>
				        	<tr>
				        		<td>Nama</td>
				        		<td>:</td>
				        		<td><?php if($nama==null){echo $namasession;}else{ echo $nama;} ?></td>
				        	</tr>
				        	<tr>
				        		<td>Nim</td>
				        		<td>:</td>
				        		<td><?php echo $nimsession;?></td>
				        	</tr>
				        	<tr>
				        		<td>Nomor Telepon</td>
				        		<td>:</td>
				        		<td><?php if($notlp==null){echo "Belum Diisi";}else{ echo $notlp;} ?></td>
				        	</tr>
				        	<tr>
				        		<td>Email</td>
				        		<td>:</td>
				        		<td><?php if($email==null){echo $emailsession;}else{ echo $email;} ?></td>
				        	</tr>
				        	<tr>
				        		<td>Alamat</td>
				        		<td>:</td>
				        		<td><?php if($alamat==null){echo "Belum Diisi";}else{ echo $alamat;} ?></td>
				        	</tr>
				        	<tr>
				        		<td>Kota</td>
				        		<td>:</td>
				        		<td><?php if($kota==null){echo "Belum Diisi";}else{ echo $kota;} ?></td>
				        	</tr>
				        	<tr>
				        		<td>Provinsi</td>
				        		<td>:</td>
				        		<td><?php if($provinsi==null){echo "Belum Diisi";}else{ echo $provinsi;} ?></td>
				        	</tr>
				        	<tr>
				        		<td>Kode Pos</td>
				        		<td>:</td>
				        		<td><?php if($kodepos==null){echo "Belum Diisi";}else{ echo $kodepos;} ?></td>
				        	</tr>
				        	<tr>
				        		<td>Jurusan</td>
				        		<td>:</td>
				        		<td><?php if($jurusan==null){echo "Belum Diisi";}else{ echo $jurusan;} ?></td>
				        	</tr>
				        	<tr>
				        		<td>Universitas</td>
				        		<td>:</td>
				        		<td><?php if($universitas==null){echo "Belum Diisi";}else{ echo $universitas;} ?></td>
				        	</tr>
				        </table>
			        </div>
			    </div>
			</div>
			

		    <!-- Form Bio -->
			    <div class="col-auto d-none d-lg-block">
			    	<form action="" method="POST" id="EditForm" style="display: none;">
			    		<h1 class="mb-3 mx-auto text-center">Edit Profile</h1>
			    		<div class="row gy-3 gx-0 p-3">
			    			<!-- Bio -->
				    			<div class="col-12">
				    				<label for="nama" class="form-label">Nama</label>
				    			  	<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php if($nama==null){echo $namasession;}else{ echo $nama;} ?>" required="">
				    			  	<div class="invalid-feedback">
				    			    	Nama Harus dimasukan
				    			  	</div>
				    			</div>

	    						<div class="col-12">
				    				<label for="nim" class="form-label">NIM</label>
	    						  	<input type="text" class="form-control" name="nim" placeholder="NIM" value="<?php echo $nimsession; ?>" disabled>
	    						</div>

	    						<div class="col-12">
				    				<label for="notlp" class="form-label">No Telepon</label>
	    						  	<input type="text" class="form-control" name="notlp" placeholder="Nomor Telepon" value="<?php echo $notlp; ?>" required="">
	    						</div>

	    						<div class="col-12">
	    							<label for="email" class="form-label">Email</label>
	    						  	<input type="email" class="form-control" name="email" placeholder="Email" value="<?php if($nama==null){echo $emailsession;}else{ echo $email;} ?>" required="">
	    						  	<div class="invalid-feedback">
	    						  		Masukan Email yang Valid
	    						  	</div>
	    						</div>

	    						<div class="col-12">
	    							<label for="alamat" class="form-label">Alamat</label>
	    							<textarea class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" required=""></textarea>
	    						</div>

	    						<div class="col-md-4">
	    							<label for="kota" class="form-label">Kota</label>
	    							<select class="form-select" name="kota" id="kota" placeholder=">--Kota--<" value="<?php echo $kota; ?>" required="">
	    								<?php
	    									foreach ($db->getKota("nama_kota") as $kota)
	    									{
	    										?>
	    										<option value="Kota <?php echo $kota['nama_kota']; ?>">Kota <?php echo $kota['nama_kota']; ?></option>
	    									<?php
	    									}	
	    								?>
	    							</select>
	    						</div>

	    						<div class="col-md-5">
	    							<label for="provinsi" class="form-label">Provinsi</label>
	    							<select class="form-select" name="provinsi" id="provinsi" placeholder=">--Provinsi--<" value="<?php echo $provinsi; ?>" required="">
	    								<?php
	    									foreach ($db->getProvinsi("nama_provinsi") as $provinsi)
	    									{
	    										?>
	    										<option value="Provinsi <?php echo $provinsi['nama_provinsi'] ?>">Provinsi <?php echo $provinsi['nama_provinsi'] ?></option>
	    									<?php
	    									}	
	    								?>
	    							</select>
	    						</div>

	    						<div class="col-md-3">
	    							<label for="kodepos" class="form-label">Kode Pos</label>
	    							<input type="text" class="form-control" name="kodepos" placeholder="Kode Pos" value="<?php echo $kodepos; ?>" required="">
	    						</div>
	    					<!-- /Bio -->
			    			
			    			<!-- Bio Universitas -->

					    		<div class="col-md-5">
					    		  	<label for="jurusan" class="form-label">Jurusan</label>
					    		    <select class="form-select" name="jurusan" id="jurusan" placeholder=">--Jurusan--<" value="<?php echo $jurusan; ?>" required="">
					    		    	<?php
	    									foreach ($db->getJurusan("nama_jurusan") as $jurusan)
	    									{
	    										?>
	    										<option value="<?php echo $jurusan['nama_jurusan']; ?>"><?php echo $jurusan['nama_jurusan']; ?></option>
	    									<?php
	    									}	
	    								?>
					    		    </select>
					    		</div>

				    			<div class="col-md-6">
					    		  	<label for="universitas" class="form-label">Universitas</label>
					    		    <select class="form-select" name="universitas" id="universitas" placeholder=">--Universitas--<" value="<?php echo $universitas; ?>" required="">
					    		    	<?php
	    									foreach ($db->getUniversitas("nama_universitas") as $universitas)
	    									{
	    										?>
	    										<option value="<?php echo $universitas['nama_kampus']; ?>"><?php echo $universitas['nama_kampus']; ?></option>
	    									<?php
	    									}	
	    								?>
					    		    </select>
					    		</div>

				    		<!-- /Bio Universitas -->

				    		<button class="w-100 btn btn-primary btn-lg" name="submit" onclick="ProfileOpen()">Update Data</button>
				    	</div>
			    	</form>
			    </div>
		    <!-- /Form Bio -->
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
	function Notification() {
	  var x = document.getElementById("Notif");
	  if (x.style.display === "none") {
	    x.style.display = "block";
	  } else {
	    x.style.display = "none";
	  }
	}
	function SideNavOpen(){
		var x = document.getElementById("mySideBar");
		x.style.display = "block";		
	}
	function SideNavClose(){
		var x = document.getElementById("mySideBar");
		x.style.display = "none";
	}

	function EditOpen(){
		document.getElementById("EditForm").style.display = "block";
		document.getElementById("Biodata").style.display = "none";
	}
	function ProfileOpen(){
		document.getElementById("EditForm").style.display = "none";
		document.getElementById("Biodata").style.display = "flex";
	}
</script>