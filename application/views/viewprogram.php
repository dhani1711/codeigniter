<head>
  <style media="screen">
    body{
      background-image: url("assets/gambar/jepang.jpg");
      background-size: cover;
      background-position: top;
    }
    h1{
      background-color: white;
      text-align: center;
      border: 5px solid BLACK;
      padding: 10px;
      width: 500px;
      margin-top: 150px;
      margin-left: 30%;
    }
  </style>
</head>
<h1><a href="<?=base_url()?>index.php/welcome/dashboard/Dhani/Perempuan">Welcome</h1>
<?= $this->uri->segment(1) ?><br>
<?= $this->uri->segment(2) ?><br>
<?= $this->uri->segment(3) ?>
