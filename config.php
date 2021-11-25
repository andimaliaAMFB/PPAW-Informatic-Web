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

		function getNama($nim){
			$sql = "SELECT nama FROM user WHERE nim='$nim'";
			$result = mysqli_query($this->koneksi, $sql);
			while ($row = $result->fetch_assoc()){
				return $row ["nama"];
			}
			
		}

		function cek_login($nim,$pass){
			$sql = "SELECT * FROM user WHERE nim='$nim' AND password='$pass'";
			$result = mysqli_query($this->koneksi, $sql);
			
			if ($result->num_rows > 0) {
				$row = mysqli_fetch_assoc($result);
				$_SESSION['nim'] = $row['nim'];
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
	}
?>