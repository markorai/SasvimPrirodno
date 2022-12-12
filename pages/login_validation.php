<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['lozinka'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['lozinka']);

	if (empty($email)) {
		header("Location: login.php?error= Unesite email adresu");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error= Unesite lozinku !");
	    exit();
	}
	
		$sql = "SELECT * FROM registrovanikorisnici WHERE email='$email' AND lozinka='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['lozinka'] === $pass) {
            	$_SESSION['ime'] = $row['ime'];
            	$_SESSION['prezime'] = $row['prezime'];
            	header("Location: index.php?status=1");
		        exit();
            }else{
				header("Location: login.php?error=Pogrešna email adresa ili lozinka. Pokušajte ponovo!");
		        exit();
			}
		}else{
			header("Location: login.php?error= Pogrešna email adresa ili lozinka. Pokušajte ponovo!");
	        exit();
		}
	}

?>