<?php

    include 'koneksi.php';
    session_start();

    if (isset($_POST['submit'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
		$sql = "SELECT * from tbl_login where user = '$username' and pass = '$password'";

        $query = mysqli_query($koneksi,$sql);
		$res = mysqli_num_rows($query);

        if ($res > 0) {
			$rows = mysqli_fetch_assoc($query);
            $_SESSION['user'] = $rows['user'];
            header("location: dashboard.php");
        }else{
            header("location:index.php");
        }


    }