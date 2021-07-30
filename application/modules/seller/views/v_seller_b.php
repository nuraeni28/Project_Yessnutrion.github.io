<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
  
    <link rel="stylesheet" href="<?= base_url('assets/dashboard/css/patient.css')?>" />
    
    
    
    <script src="https://kit.fontawesome.com/a0fa40e485.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
   
    <link href="https://fonts.googleapis.com/css2?family=Viaoda+Libre&display=swap" rel="stylesheet">   
    
    <title>DASHBOARD</title>
  </head>
 

      <main>
        <div class="main__container">
          <!-- MAIN TITLE STARTS HERE -->

          <div class="main__title">
            <div class="main__greeting">
              <h1 style="padding-top:20px;padding-left:20px;">Detail Products
              </h1>
            </div>
          </div>

          <!-- MAIN TITLE ENDS HERE -->

          <!-- MAIN CARDS STARTS HERE -->
          <div class="main__cards_1">
            <div class="card_1">
              <div class="card_inner_1s">
            <?php
                if(!$this->session->flashdata('Info') == ''){
               echo $this->session->flashdata('Info'); }
            ?>
              <div class="pull-right">
            <a href="" data-toggle="modal" data-target="#tambah_barang" class="btn btn-success btn-flat" style="margin-bottom:20px;"><i class="fa fa-plus"></i>Add Product</a>
            </div>
                <table id="patient">
                    <thead>
                        <tr>
                        <th>NO</th>
                        <th>Product Name</th>
                        <th>Information</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Image</th>
                        <th colspan="3">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php 
                       $no=1;
                       foreach($barang as $brg) : ?>
                   
                       <tr>
                           <td><?php echo $no++ ?></td>
                           <td><?php echo $brg->nama_barang ?></td>
                           <td><?php echo $brg->keterangan ?></td>
                           <td><?php echo $brg->kategori ?></td>
                           <td><?php echo $brg->harga ?></td>
                           <td><?php echo $brg->stok ?></td>
                           <td><img src="<?=base_url('upload/'.$brg->gambar) ?>" style="width:100px;height:100px;"></td>
                           <td><?php echo anchor('seller/product/edit/' .$brg->id_barang, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
                           <td><?php echo anchor('seller/product/hapus/' .$brg->id_barang, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?></td>
                       </tr>
                   
                       <?php endforeach; ?>
                   
                       </table>
              </div>
            </div>
        </div>
        <!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('seller/product/tambah_aksi')?>" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control">
        </div>

        <div class="form-group">
            <label">Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
        </div>

        <div class="form-group">
            <label">Kategori</label>
            <input type="text" name="kategori" class="form-control">
        </div>

        <div class="form-group">
            <label">Harga</label>
            <input type="text" name="harga" class="form-control">
        </div>

        <div class="form-group">
            <label">Stok</label>
            <input type="text" name="stok" class="form-control">
        </div>

        <div class="form-group">
            <label">Gambar Produk</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
      </main>

  </body>
</html>
