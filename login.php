<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="akun.css">
    <title>Login</title>
</head>
<body>
    <div class="container_login">
        <div class="form-login">
            <h3>Login</h3>
            <hr>
            <form action="" method="post">
                <label for="">Email atau Username</label>
                <input type="text" name="user" placeholder="email atau username" class="input">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="password" class="input">
                <input type="submit" name="login" value="Login" class="submit">
            </form>
            <p>Belum punya akun?
                <a href="register.php">Register</a>
            </p>
        </div>
    </div>
</body>
</html>

<?php
    session_start();


    require 'config.php';

    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM akun WHERE username='$user' OR email='$user'";
        $result = $db->query($sql);

        // cek akun ada atau ngga
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $username = $row['username'];
            // cek password valid atau ngga
            if(password_verify($password, $row['psw'])){

                $_SESSION['login'] = true;

                echo "
                    <script>
                        alert('Selamat Datang $username');
                        document.location.href = 'index.php';
                    </script>";
            }else{
                echo "
                    <script>
                        alert('Username dan Password Salah');
                    </script>";
            }
        }else{
            echo "
                <script>
                    alert('Username tidak terdaftar, silahkan registrasi terlebih dahulu');
                </script>";
        }
    }
?>