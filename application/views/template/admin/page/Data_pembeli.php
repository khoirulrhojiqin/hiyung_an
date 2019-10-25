<?php echo $this->session->flashdata('notifsimpan');?>
<?php echo $this->session->flashdata('notifubah');?>
<?php echo $this->session->flashdata('notifhapus');?>
<style type="text/css">
    #inlist{overflow:hidden; }
    #inlist:hover {overflow-x: scroll; overflow-y: hidden;}
    .del{
    background-color: #EF3535;
     }
</style>
<div class="block-header">
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA ORDER
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <!-- <li class="dropdown">
                                    <div class="button">
                                        <button type="button" class="a btn bg-pink btn-circle-lg waves-effect waves-circle waves-float" data-toggle="modal" data-target="#defaultModal">
                                            <i class="material-icons">add</i>
                                        </button>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive" id="inlist">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Status</th>
                                            <th>Alamat</th>
                                            <th>Telp.</th>
                                            <th>Pembayaran</th>
                                            <th style="width: 150%">Aksi</th>
                                        </tr>
                                    </thead>                             
                                    <tbody>
                                        <?php $no=1; foreach($beli as $row): ?>
                                        <tr>   
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $row->nip; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td>
                                                 <?php if ($row->status=='Menunggu') {
                                                        echo "<form action='terima_beli' method='post'>
                                                              <input type='hidden' name='id_status' value='$row->id_status'>
                                                              <input type='hidden' name='status' value='Diterima'>
                                                              <button type='submit' class='btn-link' data-toggle='tooltip' data-placement='right' title='Klik untuk menerima'><span class='label label-warning'>$row->status</span></button>
                                                              </form>
                                                             ";
                                                    }else if($row->status=='Diterima'){
                                                        echo "<form action='terima_beli' method='post'>
                                                              <input type='hidden' name='id_status' value='$row->id_status'>
                                                              <input type='hidden' name='status' value='Diproses'>
                                                              <button type='submit' class='btn-link' data-toggle='tooltip' data-placement='right' title='Klik untuk memproses'><span class='label label-primary'>$row->status</span></button>
                                                              </form>";
                                                    }else if ($row->status=='Diproses') {
                                                        echo "<form action='terima_beli' method='post'>
                                                          <input type='hidden' name='id_status' value='$row->id_status'>
                                                          <input type='hidden' name='status' value='Diantarkan'>
                                                          <button type='submit' class='btn-link' data-toggle='tooltip' data-placement='right' title='Klik untuk status mengantar'><span class='label bg-indigo'>$row->status</span></button>
                                                          </form>";
                                                    }else if ($row->status=='Diantarkan') {
                                                        echo "<form action='terima_beli' method='post'>
                                                          <input type='hidden' name='id_status' value='$row->id_status'>
                                                          <input type='hidden' name='status' value='Selesai'>
                                                          <button type='submit' class='btn-link' data-toggle='tooltip' data-placement='right' title='Klik untuk untuk status selesai'><span class='label bg-teal'>$row->status</span></button>
                                                          </form>";
                                                    }else{
                                                        echo "<span class='label label-success'>$row->status</span>";
                                                    }
                                                    ?> 
                                            </td>
                                            <td><?php echo $row->alamat; ?></td>
                                            <td><?php echo $row->telp; ?></td>
                                            <td><?php echo $row->jns_transaksi; ?></td>
                                            
                                            <td>
                                                <a 
                                                href="javascript:;"
                                                data-id_beli="<?php echo $row->id_beli; ?>"
                                                data-nip="<?php echo $row->nip; ?>"
                                                data-nama="<?php echo $row->nama; ?>"
                                                data-alamat="<?php echo $row->alamat; ?>"
                                                data-telp="<?php echo $row->telp; ?>"
                                                data-jns_transaksi="<?php echo $row->jns_transaksi; ?>"
                                                data-nama_barang="<?php echo $row->nama_barang2; ?>"
                                                data-qty="<?php echo $row->qty2; ?>"
                                                data-harga="<?php echo $row->harga2; ?>"
                                                data-total="<?php echo $row->total2; ?>"
                                                data-total_bayar="<?php echo 'Rp.'.number_format($row->total_sum,2,',','.'); ?> "
                                                data-total_belanja="<?php echo $row->total_belanja; ?>"
                                                data-toggle="modal" data-target="#editModal">                                           
                                                <button type="button" class="btn bg-cyan btn-circle waves-effect waves-circle waves-float" data-target="#ubah-data">
                                                     <i class="material-icons">zoom_in</i>
                                                </button>
                                                </a> 
                                                <!-- print -->
                                                <a type="button" data-id_beli_print="<?php echo $row->id_beli; ?>" class="btn bg-green btn-circle waves-effect waves-circle waves-float print" target="_blank">
                                                     <i class="material-icons">print</i>
                                                </a>
                                                <!-- end print -->
                                                <?php if ($this->session->userdata('akses') == 'admin') { ?>
                                                <!-- Tombol Delete -->
                                                <button type="button" class=" del btn bg-pink btn-circle waves-effect waves-circle waves-float" data-id='<?=$row->id; ?>'>
                                                <div class="js-sweetalert"> <i class="material-icons">delete</i></div>
                                                </button> 
                                                <!-- </div> -->                                                
                                                <?php }?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
               
         
         <!-- ============ MODAL ADD BARANG ===============-->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="defaultModalLabel">Detail Order</h3>
                    <h3>
                     #Total Belanja <input type="text" id="total_belanja" style="border: none;" readonly>   
                    </h3>
                </div>
            <div class="modal-body">
                <form>                
                <div class="col-md-6"> 
                <div class="row clearfix">                    
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label"">
                        <label>ID</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group" style="margin-bottom: -25px;">
                                            <div class="form-line">
                                                <input type="text" id="id_beli" name="id_beli" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>NIP</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <input type="text" id="nip" name="nip" class="form-control" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>

                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Nama</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <input type="text" id="nama" name="nama" class="form-control" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Tujuan</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Telp</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <input type="text" id="telp" name="telp" class="form-control" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Bayar</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <input type="text" id="jns_transaksi" name="jns_transaksi" class="form-control" placeholder="Jenis Transaksi" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>
                </div>
                <div class="col-md-6"> 
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Produk</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <textarea id="nama_barang" name="nama_barang" class="form-control"readonly rows="8px"></textarea>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>QTY</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <input type="text" id="qty" name="qty" class="form-control" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Harga</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <input type="text" id="harga" name="harga" class="form-control" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Total</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <input type="text" id="total" name="total" class="form-control" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>
                <h4>
                 <u>Sub Total</u> : <input type="text" id="total_bayar" style="border: none;" readonly>   
                </h4>
                </div>
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn bg-grey btn-link waves-effect" data-dismiss="modal">Keluar</button>
                </div>
            </form>
            </div> 
            </div>
            </div>       
        <!--END MODAL ADD BARANG-->
         
        <!-- End Modal Edit user -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            <!-- #END# Exportable Table -->
            <!-- script Hapus barang -->
            <script type="text/javascript">
                $('.del').click(function() {
                    var id = $(this).data('id');
                   swal({
                          title: "Peringatan!",
                          text: "Anda yakin ?",
                          type: "warning",
                          showCancelButton: true,
                          closeOnConfirm: false,
                          showLoaderOnConfirm: true
                        }, function () {
                          $.ajax({
                            url : "<?= base_url('Admin/hapus_beli/') ?>"+id,
                            type : 'GET',
                            datatype : 'JSON',
                            success : function(data){
                                var a = JSON.parse(data);
                                if (a.respon.execute) {
                                    location.reload();
                                }
                            },
                            error : function(data) {
                                // body...
                            }
                          })
                        });
                })
            </script>
<!-- Script Edit user -->
        <script>
        $(document).ready(function() {
            // Untuk sunting
            $('#editModal').on('show.bs.modal', function (event) {
                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                var modal          = $(this)
                var no = 1;                
 
                // Isi nilai pada field
                modal.find('#id_beli').attr("value",div.data('id_beli'));
                modal.find('#nip').attr("value",div.data('nip'));
                modal.find('#nama').attr("value",div.data('nama'));
                modal.find('#alamat').attr("value",div.data('alamat'));
                modal.find('#telp').attr("value",div.data('telp'));
                modal.find('#jns_transaksi').attr("value",div.data('jns_transaksi'));
                modal.find('#nama_barang').val(div.data('nama_barang'));
                modal.find('#qty').attr("value",div.data('qty'));
                modal.find('#harga').attr("value",div.data('harga'));
                modal.find('#total').attr("value",div.data('total'));
                modal.find('#total_bayar').attr("value",div.data('total_bayar'));
                modal.find('#total_belanja').attr("value",div.data('total_belanja'));
            });
        });
    </script>
    
            
   <script>
    function numberWithCommas(number) {
        var parts = number.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
    }

    function printContent(data){
        var html= '';
        var tgl = '<?php echo date('d F Y')?>';
        var jam = '<?php echo date('h:m:s A')?>';
        var subtotal = 0;
        $.each(data, function(index, value) {
         var sVal = value.total;
         var iNum = parseFloat(sVal);
         subtotal += iNum;
         html += `
                
                    Produk : `+value.nama_barang+`<br>
                    Qty : `+value.qty+`&nbsp;|&nbsp;
                    Harga : `+value.harga+`&nbsp;|&nbsp;
                    Total : `+value.total+`&nbsp;
                    <hr style="margin-top: 0; margin-bottom: 10">`
        });
       $('<iframe>', {
        name: 'myiframe',
        class: 'printFrame'
      })
      .appendTo('body')
      .contents().find('body')
      .append(`<div id="printArea"><br>
            <hr style="margin-top: 0; margin-bottom: 0; border: 1px solid #969494;">
            <b>STRUK PENJUALAN</b><br>
            <b>TOKO OMI COOP MART</b><br>
            <table width="100%;">
                <tr>
                <td>No. `+data[0].id_beli+`</td>   
                <td align='right' style='font-size:12px'>`+tgl+`</td>
                </tr>
                <tr>
                <td>Pel. `+data[0].id_user+`</td>  
                <td align='right' style='font-size:12px'>`+jam+`<br></td>
                <tr>
            <table>
            <hr style="margin-top: 0; margin-bottom: 5; border: 1px solid #969494;">
            `+html+`
            Sub Total : Rp.`+numberWithCommas(subtotal)+`
        </div>`);
      
          window.frames['myiframe'].focus();
          window.frames['myiframe'].print();

          setTimeout(() => { $(".printFrame").remove(); }, 0);    
    }
            $('.print').click(function() {
                var id = $(this).data('id_beli_print');
                // Isi nilai pada field
                 $.ajax({
                    url: "<?php echo base_url('Admin/data_belis/') ?>"+id,
                    type : 'POST',
                    datatype : 'JSON',
                    success: function(data) {                        
                        var a = JSON.parse(data);
                        if (a[0].respon.length>0) {                            
                            printContent(a[0].respon);   
                        }
                        else{
                            swal('Peringatan!', 'Status masih menunggu...', 'warning');
                        }
                        // console.log(a[0].execute);
                        
                    }
                });
            });
    
    </script>
    <!-- Script Print order -->
      