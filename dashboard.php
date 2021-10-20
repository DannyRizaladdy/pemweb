<?php
    include 'koneksi.php';
    session_start();

    if (!isset($_SESSION['user'])) {
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="snap.css">
</head>
<body>
    
    <div class="title-dash">
        <h4>Dashboard Page</h4>
    </div>

    <p class="link-dash"><a href="logout.php">LOGOUT</a></p>
    
    <div class="">
        <table class="table">
            <thead>
                <th>NO</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tempat Lahir</th> 
                <th>Tanggal Lahir</th>
                <th>No hp</th>
                <th>Email</th>
                <th>Orang Tua</th>
                <th>Action</th>
            </thead>
            <tfoot>
                <th>NO</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tempat Lahir</th> 
                <th>Tanggal Lahir</th>
                <th>No hp</th>
                <th>Email</th>
                <th>Orang Tua</th>
                <th>Action</th>
            </tfoot>
            <tbody>
                <?php
                    include 'koneksi.php';

                    $no = 1;
                    $sql = "select * from tbl_mhs";
                    $query = mysqli_query($conn,$sql);

                    while($res = mysqli_fetch_array($query)){
                ?>
                    <tr align="center">
                        <td><?=$no++ ?></td>
                        <td><?=$res['nama'] ?></td>
                        <td><?=$res['alamat'] ?></td>
                        <td><?=$res['tpt_lahir'] ?></td>
                        <td><?=$res['tgl_lahir'] ?></td>
                        <td><?=$res['no_hp'] ?></td>
                        <td><?=$res['email'] ?></td>
                        <td><?=$res['nama_ortu'] ?></td>
                        <td><a href="">Edit</a> / <br><a href="">Delete</a></td>
                    </tr>
                <?php    
                    }
                ?>
            </tbody>
        </table>
    </div>

    
</body>
</html>