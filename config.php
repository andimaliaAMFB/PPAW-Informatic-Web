<?php
	/**
	 * 
	 */
	class Database
	{
		var $host = "localhost";
		var $username = "root";
		var $password = "";
		var $database = "ppaw";
		var $koneksi = "";
		
		function __construct()
		{
			$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
			if (mysqli_connect_errno()){
				echo "Koneksi database gagal : " . mysqli_connect_error();
				echo "<script>alert('Koneksi database gagal : ')</script>" . mysqli_connect_error();
			}
		}

		function getUser($nim, $typetag){
			if ($typetag == "size") {
				$sql = "SELECT COUNT(*) as size FROM user";
				$result = mysqli_query($this->koneksi, $sql);
				while ($row = $result->fetch_assoc()){
					return $row ["size"];
				}
			}
			else
			{
				$sql = "SELECT * FROM user WHERE nim='$nim'";
				$result = mysqli_query($this->koneksi, $sql);
				while ($row = $result->fetch_assoc()){
					switch ($typetag) {
						case "id":
							return $row ["id_user"];
							break;
						case "nama":
							return $row ["nama"];
							break;
						case "email":
							return $row ["email"];
							break;
						
						default:
							echo "<script>alert('Koneksi database gagal : ')</script>";
							break;
					}
				}
			}
		}

		function getMahasiswa($nim, $typetag){
			if ($typetag == "size") {
				$sql = "SELECT COUNT(*) as size FROM mahasiswa";
				$result = mysqli_query($this->koneksi, $sql);
				while ($row = $result->fetch_assoc()){
					return $row ["size"];
				}
			}
			else
			{
				$sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
				$result = mysqli_query($this->koneksi, $sql);
				while ($row = $result->fetch_assoc()){
					switch ($typetag) {
						case "nama":
							return $row ["nama"];
							break;
						case "notlp":
							return $row ["notlp"];
							break;
						case "email":
							return $row ["email"];
							break;
						case "alamat":
							return $row ["alamat"];
							break;
						case "kota":
							return $row ["kota"];
							break;
						case "provinsi":
							return $row ["provinsi"];
							break;
						case "kodepos":
							return $row ["kodepos"];
							break;
						case "jurusan":
							return $row ["jurusan"];
							break;
						case "universitas":
							return $row ["universitas"];
							break;
						case "size":
							return $row ["nama"];
							break;
						
						default:
							echo "<script>alert('Koneksi database gagal : ')</script>";
							break;
					}
				}
			}
			
		}

		function getKota($type){
			if ($type == "size") {
				
				//get size
				$sql = "SELECT COUNT(*) as size FROM kota";
				$result = mysqli_query($this->koneksi, $sql);
				while ($row = $result->fetch_assoc()){
					return $row ["size"];
				}
			}
			elseif ($type == "nama_kota") {
				$sql = "SELECT nama_kota FROM kota ORDER BY nama_kota;";
				$result = mysqli_query($this->koneksi, $sql);
				while ($row = mysqli_fetch_array($result)){
					$hasil[] = $row;
				}
				return $hasil;
			}
		}

		function getProvinsi($type){
			if ($type == "size") {
				
				//get size
				$sql = "SELECT COUNT(*) as size FROM provinsi";
				$result = mysqli_query($this->koneksi, $sql);
				while ($row = $result->fetch_assoc()){
					return $row ["size"];
				}
			}
			elseif ($type == "nama_provinsi") {
				$sql = "SELECT nama_provinsi FROM provinsi ORDER BY nama_provinsi;";
				$result = mysqli_query($this->koneksi, $sql);
				while ($row = mysqli_fetch_array($result)){
					$hasil[] = $row;
				}
				return $hasil;
			}
		}

		function getJurusan($type){
			if ($type == "size") {
				
				//get size
				$sql = "SELECT COUNT(*) as size FROM jurusan";
				$result = mysqli_query($this->koneksi, $sql);
				while ($row = $result->fetch_assoc()){
					return $row ["size"];
				}
			}
			elseif ($type == "nama_jurusan") {
				$sql = "SELECT nama_jurusan FROM jurusan ORDER BY nama_jurusan;";
				$result = mysqli_query($this->koneksi, $sql);
				while ($row = mysqli_fetch_array($result)){
					$hasil[] = $row;
				}
				return $hasil;
			}
		}

		function getUniversitas($type){
			if ($type == "size") {
				
				//get size
				$sql = "SELECT COUNT(*) as size FROM universitas";
				$result = mysqli_query($this->koneksi, $sql);
				while ($row = $result->fetch_assoc()){
					return $row ["size"];
				}
			}
			elseif ($type == "nama_universitas") {
				$sql = "SELECT nama_kampus FROM universitas ORDER BY nama_kampus;";
				$result = mysqli_query($this->koneksi, $sql);
				while ($row = mysqli_fetch_array($result)){
					$hasil[] = $row;
				}
				return $hasil;
			}
		}

		function getCourse($type){
			if ($type == "popular") {
				$sql = "SELECT *, count(course_pilih.id_course)as modus 
						FROM course_pilih INNER JOIN course ON course.id_course = course_pilih.id_course 
						GROUP BY nama_course ORDER BY modus DESC LIMIT 3;";
				$result = mysqli_query($this->koneksi, $sql);
				while ($row = mysqli_fetch_array($result)){
					$hasil[] = $row;
				}
				return $hasil;
			}
			elseif ($type == "all") {
				$sql = "SELECT * FROM course";
				$result = mysqli_query($this->koneksi, $sql);
				while ($row = mysqli_fetch_array($result)){
					$hasil[] = $row;
				}
				return $hasil;
			}
			else
			{
				$sql = "SELECT * FROM `course_pilih` INNER JOIN course WHERE course_pilih.id_course='$type' GROUP BY id_pilih;";
				$result = mysqli_query($this->koneksi, $sql);
				while ($row = mysqli_fetch_array($result)){
					$hasil[] = $row;
				}
				return $hasil;
			}
		}
		function getMyCourse($nim){
			$sql = "SELECT * FROM ((course_pilih INNER JOIN course ON course.id_course = course_pilih.id_course) INNER JOIN user ON course_pilih.id_user = user.id_user) WHERE nim='$nim' ORDER BY id_pilih;";
			$result = mysqli_query($this->koneksi, $sql);
			while ($row = mysqli_fetch_array($result)){
				$hasil[] = $row;
			}
			return $hasil;
		}

		function cek_login($nim,$pass){
			$sql = "SELECT * FROM user WHERE nim='$nim' AND password='$pass'";
			$result = mysqli_query($this->koneksi, $sql);
			
			if ($result->num_rows > 0) {
				$row = mysqli_fetch_assoc($result);
				$_SESSION['nim'] = $row['nim'];
				$_SESSION['password'] = $row['pass'];
				header("Location:Dashboard.php");
			} else {
				echo "<script>alert('Woops! NIM or Password is Wrong.')</script>";
			}
		}

		function registrasi($nim,$nama,$email,$password,$password2){
			if ($password == $password2) {
				$sql = "SELECT * FROM user WHERE email='$email'";
				$result = mysqli_query($this->koneksi, $sql);
				
				if (!$result->num_rows > 0) {
					$sql = "INSERT INTO user (nim, nama, email, password)
							VALUES ('$nim', '$nama', '$email', '$password')";
					$result = mysqli_query($this->koneksi, $sql);
					
					if ($result) {
						echo "<script>alert('Wow! User Registration Completed.')</script>";
						$nim = "";
						$nama = "";
						$email = "";
						$_POST['password'] = "";
						$_POST['password2'] = "";

						$sql2 = "UPDATE mahasiswa SET nama='$nama', email='$email'
								WHERE nim='$nim";
						$result2 = mysqli_query($this->koneksi, $sql2);

						if (!$result2) {
							echo "<script>alert('Woops! Can't Update data mahasiswa.')</script>";
						}
					} else {
						echo "<script>alert('Woops! Something Wrong Went.')</script>";
					}
				}
				else {
					echo "<script>alert('Woops! Email Already Exists.')</script>";
				}
				
			}
			else {
				echo "<script>alert('Password Not Matched.')</script>";
			}
		}
		function profile($nimsession,$nama,$nim,$notlp,$email,$alamat,$kota,$provinsi,$kodepos,$jurusan,$universitas){
			if ($nimsession == $nim) {
				$sql = "SELECT * FROM mahasiswa WHERE nim='$nimsession'";
				$result = mysqli_query($this->koneksi, $sql);

				if ($result->num_rows > 0) {
					$sql = "UPDATE mahasiswa SET nama='$nama', notlp='$notlp',email='$email',alamat='$alamat',kota='$kota',provinsi='$provinsi',kodepos='$kodepos',jurusan='$jurusan',universitas='$universitas'
							WHERE nim='$nim'";
					$result = mysqli_query($this->koneksi,$sql);

					if ($result) {
						$sql2 = "UPDATE user SET nama='$nama',email='$email' WHERE nim='$nim'";
						$result2 = mysqli_query($this->koneksi, $sql2);

						if ($result2) {
							echo "<script>alert('Update Data Completed.')</script>";
						}
						
					} else {
						echo "<script>alert('Woops! Something Wrong Went.')</script>";
					}
				}
				else {
					echo "<script>alert('Woops! Email Already Exists.')</script>";
				}
			}
			else {
				echo "<script>alert('NIM Not Matched.')</script>";
			}
		}

		function addCourse($id_user,$id_course){
			$sql = "INSERT INTO course_pilih (id_user, id_course, tanggal_ambil, tanggal_selesai)
					VALUES ('$id_user',
							'$id_course', 
							(SELECT CURRENT_DATE), 
							(SELECT ADDDATE(CURRENT_DATE, INTERVAL (SELECT lama_course FROM course WHERE id_course = '$id_course') DAY ) )
					)";

			$result = mysqli_query($this->koneksi, $sql);
			echo mysqli_error($this->koneksi);
			
			if ($result) {
				echo "<script>alert('Wow! Insert Course to My Course Completed.')</script>";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
				$_SESSION['id_user'] = "";
			}
		}
	}
?>