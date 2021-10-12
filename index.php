<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="box">

        <h1>Login</h1>
        <form action="login-proses.php" method="post">

            <div class="form-control">
                <label for="">Username</label>
                <input type="text" name="username" id="" autocomplete="off" require>
            </div>
            <div class="form-control">
                <label for="">Password</label>
                <input type="password" name="password" id="" autocomplete="off" require>
            </div>
            <div class="form-link">
                <p>Don't have account? <a href="#">Sign In</a></p>
            </div>
            <div class="form-btn">
                <button type="submit" name="submit">Login</button>
            </div>
            
        </form>
        
    </div>

</body>
</html>