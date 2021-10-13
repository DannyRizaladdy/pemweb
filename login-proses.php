<?php

    include 'koneksi.php';
    session_start();
    
    if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        $pass = $_POST['pass'];
		$sql = "select * from login where email='$email' and pass='$pass'";

        $query = mysqli_query($conn,$sql);

        if (mysqli_num_rows($query) > 0) {
            
            header("location: dashboard.php");
        }else{
            header("location: index.php?message=error-log");
        }

    }
        

