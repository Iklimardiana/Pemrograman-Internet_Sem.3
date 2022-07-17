<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style-restoran.css" />
    <title>Rumah Makan Diana</title>
  </head>
  
  <body id="home">
    <div class="container">
        <nav>
            <ul id="navbar">
                <li><a href="login.php" target='_blank'><b>Login</b></a></li>
                <li><a href="#home" ><b>Home</b></a></li>
                <li><a href="#menu" ><b>Menu</b></a></li>
                <li><a href="#tentang" ><b>About Us</b></a></li>
            </ul>
            <div class="menu-toggle" id="nav-bar">
              <input type="checkbox"/>
              <span></span>
              <span></span>
              <span></span>
            </div>  
        </nav>

        <div class="header">
          <h1 style= "color: white; font-size: 70px; text-shadow: 2px 2px 5px #080808;">Rumah Makan Diana</h1><br>
          <p style="font-size:large;font-weight:bold; text-align: center;"> Rumah Makan Sederhana dengan kenikmatan yang Hakiki<br></p>
        </div>

        <div class="dishes-varaties" id="menu">
          <?php
            $sql = "SELECT * FROM menumakanan";
            $query = mysqli_query($conn, $sql);

          while($data = mysqli_fetch_array($query)){
          ?>
            <div class="dishes-varaties2" data-aos="zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800">
            <div class="image-dishes">
                <img class="image-handle-dish" src="<?php echo "gambar/file/".$data['gambar']; ?>" > 
                </div>
                <div class="dishes-prices">

                  <h3 class="dishes-name"><br><?php echo $data['menu']; ?></h3><br>
                  <div class="price-btn"><sub>Rp. <?php echo $data['harga']; ?></sub></div>
                </div>
            </div>
              <?php 
            }    
              ?>
        </div>


          <section class="aboutUs" id="tentang">
        <div class="about">
          <div class="icon"><i class="bx bx-map"></i></div>
          <h3>Alamat</h3><br>
          <p>Jalan Sukasari, No.23, Kec. Linggasirna, Kab. Tasikmalaya</p>
        </div>
        <div class="about">
          <div class="icon">🕑</div>
          <h3>Waktu Buka</h3>
          <br>
          <p>Senin-Jumat : 07.30 WIB-23.00 WIB<br>
             Sabtu-Minggu : 07.00 WIB-23.59 WIB</p>
        </div>
        <div class="about">
          <div class="icon">📞</div>
          <h3>Kontak</h3>
          <div class="boxsosmed">
            <p><i class="fa fa-facebook"> </i> Rumah Makan Diana</p>
            <p style="text-align: left;"><br><i class="fa fa-whatsapp"></i> +6276819273</p>
            <p><br><i class="fa fa-instagram"> </i> @rumahmakandiana</p>
          </div>
        </div>

      </section>
      <section
        <div class="footer"> 
            <h1 style= "text-align: center; color:white">Have A Nice Eat!!</h1s>
        </div>
        </section>
        <script>
            const menuToggle = document.querySelector('.menu-toggle input');
            const nav = document.querySelector('nav ul');

            menuToggle.addEventListener('click', function() {
                nav.classList.toggle('slide');
            });
        </script>
</body>

                
