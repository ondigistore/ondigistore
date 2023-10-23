<!DOCTYPE html>
<html lang="en">

<head>

<?php $this->load->view('admin/_partials/head.php')?>

</head>

<body style="background-color: white;" id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
<?php $this->load->view('admin/_partials/sidebar.php')?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <h1> Halaman Admin </h1>
<section id="forum" class="forum bg-light pb-4">
    <div class="container">
        <div class="row mb-4 pt-4">
            <div class="col text-center">
                <h2>NEWS</h2>
            </div>
        </div>

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
  </section>
      <!-- Footer -->
      <?php $this->load->view('admin/_partials/footer.php')?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view('admin/_partials/scrolltop.php')?>

  <!-- Logout Modal-->
  <?php $this->load->view('admin/_partials/modal.php')?>

  <!-- javascript dan css-->
  <?php $this->load->view('admin/_partials/js.php')?>

</body>

</html>
