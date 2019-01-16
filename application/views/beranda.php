<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style.css">
  </head>
  <body>
    <header class="ob">
      <div class="atas">
        <div id="logo">
          <h1>nyata_fana</h1>
        </div>
        <nav>
          <ul>
            <li><a href="<?=base_url()?>index.php/welcome/utama">Home</a></li>
            <li><a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
            <li><a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
            <li><a href="<?=base_url()?>index.php/welcome/contact">Contact</a></li>
            <li><a href="<?=base_url()?>index.php/welcome/profil">My Profil</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <h1>Selamat Datang <?=$nama_lengkap?> <br> Berperilakulah seperti <?=$jenis_kelamin?></h1>
    <p>Selamat datang di nyata_fana. Di sini adalah tempat kami mencurahkan semua apa yang ada di hati dan otak kami.
    Selamat membaca tulisan kami di sini</p>

  </body>
</html>
