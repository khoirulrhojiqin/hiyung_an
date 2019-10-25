 <!-- JQuery DataTable Css -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo site_url ('assets/track/css/style.css')?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo site_url ('assets/front_end/data-tables/dataTables.min.css')?>" rel="stylesheet">
<style type="text/css">
  textarea
{
  width:100%;
}
.textwrapper
{
  border:1px solid #999999;
  margin:5px 0;
  padding:3px;
}
</style>
<br>
<div class="container">
<h2><center><strong>Status Transaksi</strong></center></h2>
</div><hr>

<div class="col-sm-12">
    <!-- Classic tabs -->
<!-- Nav tabs -->
 <ul class="nav nav-tabs md-tabs nav-justified" role="tablist" style="background-color: #c30f42;">
     <li class="nav-item">
         <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-truck"></i> Tracking</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-book"></i> Riwayat Transaksi</a>
     </li>
 </ul>
 <!-- Tab panels -->
 <div class="tab-content">
     <!--Panel 1-->
     <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
         <br>
         <!-- Track -->
         <div class="header">
  <!-- <h1>Shipment Track</h1> -->
</div>
    <?php
        $date = date('Y-m-d');
         $query = $this->db->query("SELECT * FROM tabel_pembeli INNER JOIN tabel_status on tabel_pembeli.id_beli=tabel_status.id_beli where tabel_status.tanggal='$date' order by tabel_pembeli.id_beli DESC")->result();

         foreach ($query as $data) { ?>
         <?php $a = $data->status;?>
         
<div class="content">
  <div class="content1" style="background-color: #d0d0d0;">
    <h2 style="color: #424242">Order Tracking: <?=$data->id_beli?></h2>
  </div>
  <div class="content2" style="background-color: #b1afb0">
    <div class="content2-header1">
      <p>Dikirim Oleh : <span>Petugas Koperasi</span></p>
    </div>
    <div class="content2-header1">
      <p>Status : <span>Pesanan 
        <?php
          if ($a=="Menunggu") {
            echo "Diterima";
          }else if ($a=="Diterima") {
            echo "Diproses";
          }else if ($a=="Diproses") {
            echo "Dikemas";
          }else if ($a=="Diantarkan") {
            echo "Dikirim";
          }else{
            echo "Sampai Tujuan";
          }
        ?>
      </span></p>
    </div>
    <div class="content2-header1">
      <p>Diterima Pada : <span><?= date('d F Y'); ?></span></p>
    </div>
    <div class="clear"></div>
  </div>
  <div class="content3">
    <div class="shipment">

      <?php 
         
         if ($a == "Menunggu" OR $a == "Diterima" OR $a == "Diproses" OR $a == "Diantarkan" OR $a == "Selesai") {
           echo "<div class='confirm'>
                <div class='imgcircle'>
                    <img src='".site_url()."assets/track/images/confirm.png' alt='order diterima'>
                </div>
                <span class='line'></span>
                <p>Pesanan Diterima</p>
                </div>";  
         }
         ?>
      
      <?php 
      if ($a == "Diterima" OR $a == "Diproses" OR $a == "Diantarkan" OR $a == "Selesai") {
        echo "<div class='process'>
                <div class='imgcircle'>
                    <img src='".site_url()."assets/track/images/process.png' alt='order diproses'>
                </div>
                <span class='line'></span>
                <p>Pesanan Diproses</p>
                </div>";
      }else{
        echo "<div class='process'>
                <div class='imgcircle2'>
                    <img src='".site_url()."assets/track/images/process.png' alt='order diproses'>
                </div>
                <span class='line2'></span>
                <p>Pesanan Diproses</p>
                </div>";
      }
      ?>
      
       <?php 
      if ($a == "Diproses" OR $a == "Diantarkan" OR $a == "Selesai") {
        echo "<div class='quality'>
                <div class='imgcircle'>
                    <img src='".site_url()."assets/track/images/quality.png' alt='produk dikemas'>
                </div>
                <span class='line'></span>
                <p>Produk Dikemas</p>
                </div>";
      }else{
        echo "<div class='quality'>
                <div class='imgcircle2'>
                    <img src='".site_url()."assets/track/images/quality.png' alt='produk dikemas'>
                </div>
                <span class='line2'></span>
                <p>Produk Dikemas</p>
                </div>";
      }
      ?>

      <?php 
      if ($a == "Diantarkan" OR $a == "Selesai") {
        echo "<div class='dispatch'>
                <div class='imgcircle'>
                    <img src='".site_url()."assets/track/images/dispatch.png' alt='produk dikirim'>
                </div>
                <span class='line'></span>
                <p>Produk Dikirim</p>
                </div>";
      }else{
        echo "<div class='dispatch'>
                <div class='imgcircle2'>
                    <img src='".site_url()."assets/track/images/dispatch.png' alt='produk dikirim'>
                </div>
                <span class='line2'></span>
                <p>Produk Dikirim</p>
                </div>";
      }
      ?>

       <?php 
      if ($a == "Selesai") {
        echo "<div class='delivery'>
                <div class='imgcircle'>
                    <img src='".site_url()."assets/track/images/delivery.png' alt='produk diterima'>
                </div>
                <p>Produk Diterima</p>
                </div>";
      }else{
        echo "<div class='delivery'>
                <div class='imgcircle2'>
                    <img src='".site_url()."assets/track/images/delivery.png' alt='produk diterima'>
                </div>
                <p>Produk Diterima</p>
                </div>";
      }
      ?>
      <div class="clear"></div>
    </div>
  </div>
</div>
<?php } ?>
<br>
         <!-- End Track -->
             <!--  <a class="nav-link waves-effect" id="print_button" style="margin-left: 80%; margin-bottom: -50px;">
                <i class="fa fa-print"></i>
                <span class="clearfix d-none d-sm-inline-block"> Cetak </span>
              </a>
            <div class="card-body PrintArea">
              <img src="<?php echo base_url("assets/images/coopmart.png");?>" width="60px"><hr>
              <h5><strong>Invoice</strong></h5>
              <table width="70%">
                <tr>
                  <td style="font-weight: bold;" width="90px">No Order</td>
                  <td><?php echo $this->session->userdata('order'); ?></td>
                  <td style="font-weight: bold;" width="90px">Pembayaran</td>
                  <td><?php echo $this->session->userdata('transaksi'); ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;" width="90px">Tanggal</td>
                    <td><?php echo date("d F Y"); ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;" width="90px">Member</td>
                    <td><?php echo $this->session->userdata('ses_nama'); ?></td>
                </tr>
              </table><br>
              <table width="100%">
                <tr bgcolor="#F8F8F8">
                  <td style="font-weight: bold;">Nama Barang</td>
                  <td style="font-weight: bold;">harga</td>
                  <td style="font-weight: bold;">Qty</td>
                  <td style="font-weight: bold;">Total</td>
                </tr>
                <?php 
                $total=0;
                $id_beli = $this->session->userdata('order');
                $data = $this->db->query("SELECT * from tabel_detail_order inner join tabel_barang on tabel_detail_order.id_barang=tabel_barang.id_barang where id_beli='$id_beli'")->result();
                ?>
                <?php foreach ($data as $isi) {$total +=$isi->total;?>
                <tr>
                  <td><?php echo $isi->nama_barang;?></td>
                  <td><?php echo $isi->harga;?></td>
                  <td><?php echo $isi->qty;?></td>
                  <td><?php echo $isi->total;?></td>
                </tr>
              <?php } ?>
              <tr bgcolor="silver">
                <td style="font-weight: bold;">Sub Total</td>
                <td></td>
                <td></td>
                <td style="font-weight: bold;"><?=number_format($total,2,',','.');?></td>
              </tr>
              </table>
        </div> -->
        </div>
     <!--/.Panel 1-->
     <!--Panel 2-->
     <div class="tab-pane fade" id="panel6" role="tabpanel">
         <br>
              <h3>Daftar Riwayat Transaksi</h3> 
              <table width="100%" class="table" id="dtBasicExample" cellspacing="0">
                <thead>
                <tr bgcolor="#F8F8F8">
                  <td style="font-weight: bold;">#</td>
                  <td style="font-weight: bold;">Nama Barang</td>
                  <td style="font-weight: bold;">Harga</td>
                  <td style="font-weight: bold;">Qty</td>
                  <td style="font-weight: bold;">Total</td>
                  <td style="font-weight: bold;">Total Harga</td>
                  <td style="font-weight: bold;">Tanggal</td>
                </tr>
              </thead>
              <tbody>
                <?php 
                $total=0;
                $no = 1;
                $id_user = $this->session->userdata('ses_id');
                ?>
                <?php foreach ($history as $isi) {$total +=$isi->total;?>
                  <?php if ($isi->id_users=$id_user) { ?>
                
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?php echo $isi->nama_barang2;?></td>
                    <td><?php echo $isi->harga2;?></td>
                    <td><?php echo $isi->qty2;?></td>
                    <td><?php echo $isi->total2;?></td>
                    <td><?php echo number_format($isi->total_sum,2,',','.');?></td>
                    <td><?php echo date('d-m-Y',strtotime($isi->created_at));?></td>
                  </tr>
                
                <?php } ?>
              <?php } ?>


              </tbody>
              <tfoot>
                    <tr bgcolor="silver">
                      <td style="font-weight: bold;" colspan="2">Sub Total</td>
                      <td style="font-weight: bold;" align="right" colspan="4"><?=number_format($total,2,',','.');?></td>
                      <td></td>
                    </tr>
                </tfoot>
            </table>

            
     </div>
     <!--/.Panel 2-->
 </div>
<!-- Classic tabs -->
</div>
<br>
    <!--Panel-->
  <script>
    $("#print_button").click(function(){
    	$("div.PrintArea").printArea();
    });
    // tab
  </script>