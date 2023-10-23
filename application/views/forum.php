<section id="forum" class="forum bg-light pb-4">
    <div class="container">
        <div class="row mb-4 pt-4">
            <div class="col text-center">
                <h2>NEWS</h2>
            </div>
        </div>

        <center>
<div class="container-fluid">
  <div class="row d-flex justify-content-xl-center">
    <?php foreach ($content as $content): ?>
      <div class="card ml-3 mb-3" style="width: 18rem;">
      <a href="<?php echo base_url('content/berita/'.$content->content_id) ?>">
          <img class="card-img-top" src="<?php echo base_url().'/upload/'.$content->gambar?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $content->topic?></h5> </a>
              </div>
        </div>
    <?php endforeach;?>
  </div>
</div>
</center>
    </div>
  </section>
  <br><br><br><br>  <br><br><br><br>
  <br><br><br>
  
  