 <body style="background-color: black;" id="page-top" >
<center>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <div class="carousel-inner">
  
    <div class="carousel-item active">
    <?php foreach ($content as $content) :?>
    <a href="<?php echo base_url('content/berita/'.$content->content_id) ?>">
      <img class="d-block w-50" src="<?php echo base_url().'/upload/'.$content->gambar?>" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5 style="color:white;"><?php echo $content->topic?></h5></a>
  </div>
    </div>

    </div>
    <div class="carousel-item">
      <img class="d-block w-50" src="assets/images/free-firejpg.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
      <h5 style="color:black;">Judul Berita</h5>
    <p style="color:black;">Isi singkat dari berita</p>
  </div>
    </div>
    <?php endforeach;?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</center>
<br><br>
<?php echo $this->session->flashdata('pesan')?>
<br><br>
<center>
<div class="container-fluid">
  <div class="row d-flex justify-content-xl-center">
    <?php foreach ($game as $game): ?>
      <div class="card ml-3 mb-3" style="width: 18rem;">
      <a href="<?php echo base_url('user/topup/game/'.$game->game_id) ?>">
          <img class="card-img-top" src="<?php echo base_url().'/upload/'.$game->gambar?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $game->nama_game?></h5>
                <small><?php echo $game->jenis_game?></small> </a>
               
              </div>
        </div>
    <?php endforeach;?>
  </div>
</div>
</center>