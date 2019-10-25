
<!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark lighten-1 mt-3 mb-5" style="background-color: #c30f42">
        <!-- Navbar brand -->
        <span class="navbar-brand">Kategori:</span>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>user/page/index/">All</a>
            </li>
            <?php
                foreach ($kategori->result() as $row) 
              { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>user/shopping/index/<?php echo $row->id_kategori;?>"><?php echo substr($row->nama_kategori,7,15);?>
              </a>
            </li>
            <?php } ?>
          </ul>
          <!-- Links -->      
        <?php echo form_close() ?>
        <form method='GET' action="<?php echo base_url();?>user/shopping/pencarian" class="form-inline ml-auto">
          <div class="md-form my-0">
           <input class="form-control" type="text" name="search" placeholder="Cari Produk" value='<?php $search ?>' aria-label="Search">
            <i class="fa fa-search text-white" aria-hidden="true"></i>
           <input type='hidden' name='submit' value='Submit'>
         </div>
        </form>
        </div>
        <!-- Collapsible content -->
      </nav>
      <!--/.Navbar-->
      <!--Section: Products v.3-->
      <section class="text-center mb-4">
        <!--Grid row-->
        <div class="row wow fadeIn" idxx="result">
          <?php foreach ($produk->result() as $row) {
          ?> 
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">
            <!--Card-->
            <div class="card" >
              <!--Card image-->
              <div class="view overlay">
                
                <img src="<?php echo base_url() . 'assets/upload/files/'.$row->gambar; ?>" width="240px" height="240px" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->
              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a class="dark-grey-text">
                  <h5><strong>
                   
                      <?php 
                      $num_char = 20;
                      $text = $row->nama_barang;
                      $amount     = strlen($text);
                      if($amount > $num_char) {
                      $char     = $text{$num_char - 1};
                          while($char != ' ') {
                            $char = $text{--$num_char}; // Cari spasi pada posisi 49, 48, 47, dst...
                          }
                          echo substr($text, 0, $num_char);
                      } else {
                          echo $text;
                      }
                      ?>
                    </strong></h5>
                </a>
                <span>
                    <a href="<?php echo base_url();?>user/shopping/detail_produk/<?php echo $row->id_barang;?>" class="grey-text" style="font-size: 15px;">
                      <?php 
                      $num_char = 35;
                      $text = $row->deskripsi;
                      $amount     = strlen($text);
                      if($amount > $num_char) {
                      $char     = $text{$num_char - 1};
                          while($char != ' ') {
                            $char = $text{--$num_char}; // Cari spasi pada posisi 49, 48, 47, dst...
                          }
                          echo substr($text, 0, $num_char).' [...]';
                      } else {
                          echo $text;
                      }
                      ?>
                    </a>
                </span>
               <?php 
                    if ($row->stok>0) {
                      echo "<span style='color:#2bbbad; font-size:13px;'>Tersisa ".$row->stok.' buah</span>';
                    }else{
                      echo '<span style="color:#f44336 !important; font-size:13px;">Tersisa '.$row->stok.' buah</span>';
                    }
                    ;?>
                <h4 class="font-weight-bold blue-text">
                  <strong>Rp. <?php echo number_format($row->harga_jual,0,",",".");?></strong>
                </h4>
              </div>
              <!--Card content-->
              <center>
                <div class="card-footer">
                      <a href="<?php echo base_url();?>user/shopping/detail_produk/<?php echo $row->id_barang;?>" class="btn btn-success btn-sm" style="padding: 10px 20px;"><i class="fa fa-search-plus" aria-hidden="true"></i> Detail</a> 
                 
               
                    <input type="hidden" name="qty" id="<?php echo $row->id_barang;?>" class="qty" value="1" /> 
                  <!-- <input type="hidden" name="kat_id" value="<?=$id_kategori?>" /> -->
                  <?php
                   if ($row->stok>0) {
                  echo "<button type='submit' class='add_cart btn btn-sm' style='background-color: #c30f42; padding: 10px 9px;' data-produkid=".$row->id_barang." data-produknama=".$row->nama_barang." data-produkharga=".$row->harga_jual." data-produkgambar=".$row->gambar."><i class='fa fa-shopping-cart'></i> Tambahkan</button>";
                  }else{
              
                   echo  "<a class='btn btn-sm' style='background-color: #c30f42; padding: 10px 9px;' data-toggle='modal' data-target='#frameModalBottom'    data-backdrop='false'>
                          <i class='fa fa-shopping-cart'></i> Beli</a>"; 
                  }
                  ;?>

                </div>
              </center>
              <!-- </form> -->
            </div>
            <!--Card-->
          </div>
          <!--Grid column-->
       <?php } ?>
        
        </div>
        <!--Grid row-->
      </section>
      <!--Section: Products v.3-->


<!-- Paginate -->
<!-- Paginate -->
   
 <!--Pagination-->
 <div class="page">
      <nav class="d-flex justify-content-center wow fadeIn">
        <div class="row">
             <div class="col">
            <!--Tampilkan pagination-->
                <?php echo $pagination; ?>
            </div>
         </div>
        <!-- <ul class="pagination pg-blue">

          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>

          <li class="page-item active">
            <a class="page-link" href="#">1
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul> -->
      </nav>
    </div>
  <script>
</script>
