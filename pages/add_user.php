<?php
    include "db_conn.php";

    // recieving form data
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // get data from form
        $ime = testInput($_POST["ime"]);
        $prezime = testInput($_POST["prezime"]);
        $email = testInput($_POST["email"]);
        $broj_telefona = testInput($_POST["broj_telefona"]);
        $tip_naloga = testInput($_POST["tip_naloga"]);
        $lozinka1 = testInput($_POST["lozinka1"]);
        $lozinka2 = testInput($_POST["lozinka2"]);
        $lozinka = "";
        if($lozinka1 == $lozinka2)
            $lozinka = $lozinka1;
        else
        header("Location: registration.php?error=Lozinke se ne poklapaju!");

    }else
        header("Location: registration.php?error=Greška!");


    function testInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $sql = "INSERT INTO registrovanikorisnici (ime,prezime,email,broj_telefona,tip_naloga,lozinka)
            VALUES ('$ime','$prezime','$email','$broj_telefona','$tip_naloga','$lozinka')";

    $alert = "";
    

    if(mysqli_query($conn,$sql)){
       header("Location:registration.php?status=1");
    } 
    else
    echo "Error: " . $sql . "<br>" .mysqli_error($conn) ;
    
?>