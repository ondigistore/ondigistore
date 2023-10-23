<head>
<script type="text/javascript"src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-ksTxGTxiOQ2EEQcM"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
</head>
<body style="background-color: black;">

        
<div class="container rounded bg-white">
    <center>
    <div class="col-sm-3 col-md-4 offset-md-1 mobile">
        <?php foreach($products as $product) :?>
            <div class="py-4 d-flex justify-content-end">
                <h6><a href="<?php echo base_url('user')?>">Cancel and return to website</a></h6>
            </div>
            <div class="bg-light rounded d-flex flex-column">
                <div class="p-2 ml-3">
                    <h4>Order Recap</h4>
                </div>
                <form id="payment-form" method="post" action="<?=site_url()?>/snap/tambah_beli_aksi">
                <input type="hidden" name="result_type" id="result-type" value=""></div>
                <input type="hidden" name="result_data" id="result-data" value=""></div>
                <div class="form-group p-2 d-flex">
                    <label for="name">Nama Barang</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?php echo $product->name?>"
                    readonly> 
                </div>
                <?php foreach ($pembayaran as $pembayaran):?>
                <div class="form-group p-2 d-flex">
                    <label for="pembayaran_id">Pembayaran ID</label>
                    <input type="hidden" name="pembayaran_id" class="form-control" id="pembayaran_id" value="<?php echo $pembayaran->pembayaran_id?>"
                    readonly> 
                </div>
                <?php endforeach;?>
                <?php foreach ($game as $game) : ?>
                <div class="form-group p-2 d-flex">
                    <label for="game_id">Game ID</label>
                    <input type="text" name="game_id" class="form-control" id="game_id" value="<?php echo $game->game_id?>"
                    readonly> 
                </div>
                <?php endforeach ; ?>
                <div class="form-group p-2 d-flex">
                    <label for="price">Total Harga</label>
                    <input type="hidden" name="product_id" value="<?php echo $product->product_id?>">
                    <input type="number" name="price" class="form-control" id="price" value="<?php echo $product->price?>"
                    readonly> 
                </div>
                <div class="form-group p-2 d-flex">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control"> 
                </div>
                </form>
                <button class="btn btn-success" id="pay-button">Beli</button>
                </form>
            </div>
    </div>
        <?php endforeach;?>
    </center>
</div>

    <script type="text/javascript">
  
    $('#pay-button').click(function (event) {
      event.preventDefault();
      $(this).attr("disabled", "disabled");

    var name = $("#name").val();
    var pembayaran_id = $("#pembayaran_id").val();
    var game_id = $("#game_id").val();
    var price = $("#price").val();
    var tanggal = $("#tanggal").val();
    
    $.ajax({
      type : 'POST',
      url: '<?=site_url()?>/snap/token',
      data : 
      {
        name: name,
        pembayaran_id: pembayaran_id,
        game_id: game_id,
        price: price,
        tanggal: tanggal
      },
      cache: false,

      success: function(data) {
        //location = data;

        console.log('token = '+data);
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
          $("#result-type").val(type);
          $("#result-data").val(JSON.stringify(data));
          //resultType.innerHTML = type;
          //resultData.innerHTML = JSON.stringify(data);
        }

        snap.pay(data, {
          
          onSuccess: function(result){
            changeResult('success', result);
            console.log(result.status_message);
            console.log(result);
            $("#payment-form").submit();
          },
          onPending: function(result){
            changeResult('pending', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onError: function(result){
            changeResult('error', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          }
        });
      }
    });
  });
  </script>
</body>
<br>