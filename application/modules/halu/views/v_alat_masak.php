<section class="section products" style="padding-top:0px; margin-top:0px;">
      <div class="col-3-of-4">
        <form action="">
          <div class="item">
            <label for="sort-by">Sort By</label>
            <select name="sort-by" id="sort-by">
              <option value="title" selected="selected">Name</option>
              <option value="number">Price</option>
              <option value="search_api_relevance">Relevance</option>
              <option value="created">Newness</option>
            </select>
          </div>
          <div class="item">
            <label for="order-by">Order</label>
            <select name="order-by" id="sort-by">
              <option value="ASC" selected="selected">ASC</option>
              <option value="DESC">DESC</option>
            </select>
          </div>
          <a href="">Apply</a>
        </form>
        <div class="product-layout">
        <?php foreach ($Alat_Masak as $brg) : ?>
          <div class="product">
            <div class="img-container">
              <img src="<?php echo base_url().'/upload/'.$brg->gambar ?>"
               alt="" />
              <div class="addCart">
              <?php echo anchor('halu/tambah_ke_keranjang/' .$brg->id_barang, '<i class="fas fa-shopping-cart"></i>') ?>
              </div>

              <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><?php echo anchor('halu/detail/' .$brg->id_barang, '<i class="far fa-eye"></i>')?></span>
                <span><i class="fas fa-sliders-h"></i></span>
              </ul>
            </div>
            <div class="bottom">
              <h5 class="card-text"><?php echo $brg->nama_barang ?></h5>
              <small><?php echo $brg->keterangan ?></small><br><br>
              <div class="price">
                <span>Rp. <?php echo number_format($brg->harga, 0,',','.') ?> </span>
              </div>
            </div>
          </div>
          <?php endforeach; ?>          
        </div>

        <!-- PAGINATION -->
        <ul class="pagination">
          <span>1</span>
          <span>2</span>
          <span class="icon">››</span>
          <span class="last">Last »</span>
        </ul>
      </div>
    </div>
  </section>