
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sun Technologies</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/site.css" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

  </head>

  <body>
  <nav class="navbar navbar-expand-sm bg-secondary navbar-light fixed-top">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <img src="<?php echo base_url('assets/images/icon.png')?>" width=5% height=5%></a>
    
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="navbar-brand text-light" style="font-family: 'Merriweather', serif;" href="#">ENTERPRISE STACKOVERFLOW</a>
            </li>
          </ul>
    <?php 
    if($this->session->userdata('sun-email')) {?>
    <form method="post" action="<?php echo base_url('question/searchQuestion')?>" class="form-inline my-2 my-lg-0">
        <div class="float-center">
            <input class="form-control mr-sm-2" type="search" name="search_keyword" placeholder="Search Here" required aria-label="Search" style="padding-left:200px" >
        </div>
        <div>
          <button class="btn btn-info navbar-btn text-light" type="submit" style="margin-right:230px">Search</button>
        </div>

    </form>
    <div>
        <div class="dropdown">
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $this->session->userdata('sun-email')?>
        </button>
        <div class="dropdown-menu bg-info" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item bg-info text-light" href="<?php echo base_url('welcome/logout');?>">Logout</a>
        </div>
        </div>
    </div>
  <?php }?>
        
  </div>
</nav>
<div class="container">

      
