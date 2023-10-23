
 <link rel="stylesheet" href="<?= base_url(); ?>css/style.css">
<div class="container-fluid">
<div class="col d-flex justify-content-xl-center">
<?php 
foreach ($content as $content) : ?>
<div class="jumbotron" style="color:black;">
  <h1 class="display-4"style="color:black;"><?php echo $content->topic?></h1>
  <p class="lead" style="color:black;"><?php echo $content->content?></p>
  <hr class="my-4">
</div>
<?php endforeach;?>
</div>
</div>
<h1>Comments</h1>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4">
            <?php foreach ($komentar as $komentar): ?>
                
                <div class="comment mt-4 text-justify float-left"> <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4><?php echo $komentar->full_name?></h4> <span>- <?php echo $komentar->email?></span> <br>
                    <p><?php echo $komentar->komentar?></p>
                </div>
                <?php endforeach ;?>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <form action="<?php echo site_url('content/komentar')?>" id="algin-form"  method="POST">
                    <div class="form-group">
                        <h4>Leave a comment</h4>
                         <label for="message">Comment</label> 
                         <input type="text" name="komentar" id="komentar" class="form-control"/>
                    </div>
                    <div class="form-group"> 
                        <label for="email">Email</label> 
                        <input type="text" name="email" id="email" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary w-100" value="Post Komentar" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>