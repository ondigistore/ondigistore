
<body style="background-color: black;">
<div class="container-fluid">
<div class="col d-flex justify-content-xl-center">
  <div class="row text-center">
    <?php foreach ($game as $game): ?>
      <div class="card ml-3 mb-3" style="width: 18rem;">
      <input type="hidden" name="game_id" value="<?php echo $game->game_id?>">
          <img class="card-img-top" src="<?php echo base_url().'/upload/'.$game->gambar?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $game->nama_game?></h5>
                <span style="color: black;" class="badge badge-pill badge-success"><?php echo $game->jenis_game?></span>
               
              </div>
        </div>
    <?php endforeach;?>
  </div>
</div>
</div>
<br><br>

<div class="container-fluid">
<div class="col d-flex justify-content-xl-center">
<?php 
foreach ($products as $product) : ?>
  <div class="card ml-3" style="width: 16rem;">
  <div class="card-body">
    <h5 style="color: #000000;" class="card-title"><?php echo $product->name?></h5>
    <span style="color: black;" class="badge badge-pill badge-success"><?php $str = "Rp.";
     echo $str; echo $product->price?></span>
     <br><br>
     <small style="color: #000000;"><?php echo $product->description?></small>
     <br><br>
      
        <a href="<?php echo base_url('snap/tambah_beli/'.$product->product_id)?>" class="btn btn-primary">Beli</a>
  </div>
</div>
<?php endforeach;?>
</div>
</div>
<br><br>
<br>






