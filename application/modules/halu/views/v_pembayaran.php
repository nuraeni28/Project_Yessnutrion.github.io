<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                    $grand_total = 0;
                    if ($keranjang = $this->cart->contents())
                    {
                        foreach ($keranjang as $item)
                        {
                            $grand_total = $grand_total + $item['subtotal'];
                        }
                    echo "<h5>Total Belanja Yang Anda Harus Bayar :Rp. " .number_format($grand_total ,0,',','.');
                     ?>
            </div><br><br>

            <h4>Input Alamat Pengiriman dan Pembayaran</he4><br><br>

            <form method="post" action="<?php echo base_url('halu/proses_pesanan') ?> ">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Nomor telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepeon Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                   <select class="form-control">
                       <option>JNE</option>
                       <option>JNT</option>
                       <option>TIKI</option>
                   </select>
                </div>

                <div class="form-group">
                    <label>Pilih Bank</label>
                   <select class="form-control">
                       <option>BCA     - XXXXXXXXX</option>
                       <option>BNI     - XXXXXXXXX</option>
                       <option>Mandiri - XXXXXXXXX</option>
                   </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
            </form>
            <?php
                    }else
                    {
                        echo "<h5>Keranjang Belanja Anda Masih Kosong";
                    }
            ?>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>