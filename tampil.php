<?php 
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM booking_tiket");

     if (isset($_GET['search'])){
     $result = mysqli_query($db, "SELECT * FROM booking_tiket WHERE nama LIKE '%".
      $_GET['search']."%'");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelayaran Nasional Indonesia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <div>
        <div class="header">
            <img src="https://www.pelni.co.id/cfind/source/images/website-setting/logo-new.png"/>
        </div>
        <!-- Navigation Bar -->
        <div class="nav">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about_me.html">ABOUT ME</a></li>
                <li><a href='#reservasi_tiket'>RESERVASI TIKET</a></li>
                <button onclick="dark_mode()">DARK MODE</button>
                <script>
                const buttondark = document.getElementById("Dark/Light Mode Akan Diaktifkan");
                buttondark.addEventListener("click", function(){
                });
                function dark_mode(){
                    var element = document.body;
                    element.classList.toggle("dark-mode");
                    alert("Dark/Light Mode Akan Diaktifkan");                
                }
                </script>
            </ul>
        </div>
        <div class="main content">
            <h1><img src="https://www.pelni.co.id/cfind/source/thumb/images/ticket-reservation/cover_w1920_h380_tw1920_th380_x10_y10_web.jpg" width="100%"/></h1>
            <br><br>
        </div>
        
        <div class="data">
        <div id="reservasi_tiket" class="data_pemesan_tiket">
        <p class="form-2">DATA PEMESANAN TIKET</p><br>
        <form action="" method="get">
                <label for="search"></label>
                <input type="text" name="search" placeholder="Searching for..."><br><br>
        </form>
            <table border = '1' width = 100%>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Tujuan Perjalanan Dari</th>
                    <th>Tujuan Perjalanan Ke</th>
                    <th>Tiket Usia Dewasa</th>
                    <th>Tiket Usia Bayi</th>
                    <th>Jadwal Pelayaran</th>
                    <th>Waktu Unggah</th>
                    <th>Dokumen</th>
                    <th colspan='2'>Action</th>
                </tr>
                <?php
                    $i=1;
                    while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?=$i;?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row["dari"]; ?></td>
                    <td><?= $row["ke"]; ?></td>
                    <td><?= $row["usia_dewasa"]; ?></td>
                    <td><?= $row["usia_bayi"]; ?></td>
                    <td><?= $row["waktu"]; ?></td>
                    <td><?= $row["waktu_unggah"]; ?></td>
                    <td><img src="gambar/<?=$row['dokumen']?>" alt="" width="50px"></td>
                    <td><a href="edit.php?id=<?=$row['id']?>">Edit</a></td>
                    <td><a href="hapus.php?id=<?=$row['id']?>">Hapus</a></td>
                </tr>
                <?php
                    $i++;
                    }
                ?>
            </table>

                <!-- <div class="form-1">
                <p>Nama Lengkap     : <?php echo $_POST['nama']; ?></p>
                </div>
                <div class="form-1">
                <p> Email           : <?php echo $_POST['email']; ?></p>
                </div>
                <div class="form-1">
                <p>Password         : </p>
                </div>
                <div class="form-1">
                <p>Tujuan Perjalanan Dari      : <?php echo $_POST["dari"]; ?></p>
                <p>Tujuan Perjalanan Ke      : <?php echo $_POST["ke"]; ?></p>
                </div>
                <div class="form-1">
                <p>Jumlah Tiket Usia Dewasa      : <?php echo $_POST["usia_dewasa"]; ?></p>
                <p>Jumlah Tiket Usia Bayi        : <?php echo $_POST["usia_bayi"]; ?></p>
                </div>
                <div class="form-1">
                <p>Jadwal Pelayaran : <?php echo $_POST["waktu"]; ?>
                <?php echo $_POST["waktu_unggah"];?>
                <?php echo $_POST["dokumen"];?>
                </div> -->
                
        </div>
        </div>
        <div class="footer">
                <p align="center" id="footer">Copyright ©2019 PT. Pelayaran Nasional Indonesia. All rights reserved.</p>
                <script>
                    const footer = document.getElementById('footer');
                    footer.style.color = 'yellow';
                </script>
            </div>

</body>
</html>