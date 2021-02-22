<head>
	<style>
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
</head>
<body>
	
	<div id="nyoba" class="carousel slide" data-ride="carousel">
 
  <ul class="carousel-indicators">
    <li data-target="#nyoba" data-slide-to="0" class="active"></li>
    <li data-target="#nyoba" data-slide-to="1"></li>
    <li data-target="#nyoba" data-slide-to="2"></li>
    <li data-target="#nyoba" data-slide-to="3"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url();?>gambar/bht.png" width="800" height="500">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url();?>gambar/be.png" alt="Gambar - 2" width="800" height="500">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url();?>gambar/bdo.png" class="float-right" alt="Gambar - 3" width="800" height="500">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url();?>gambar/blue.png" class="float-right" alt="Gambar - 4" width="800" height="500">
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#nyoba" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#nyoba" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


