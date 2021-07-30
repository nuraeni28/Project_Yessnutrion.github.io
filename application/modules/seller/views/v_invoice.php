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
              <h1 style="padding-top:20px;padding-left:20px;">Invoice Products
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
            </div>
                <table id="patient">
                    <thead>
                        <tr>
                        <th>ID Invoice</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Date Order</th>
                        <th>Payment Limit</th>
                       
                        </tr>
                      </thead>
                      <tbody>
                     <?php foreach($invoice as $inv): ?>
                        <tr>
                            <td><?php echo $inv->id ?></td>
                            <td><?php echo $inv->nama ?></td>
                            <td><?php echo $inv->alamat ?></td>
                            <td><?php echo $inv->tgl_pesan ?></td>
                            <td><?php echo $inv->batas_bayar?></td>
                            
                        </tr>
                    <?php endforeach; ?>
                       </table>
              </div>
            </div>
      </main>

  </body>
</html>
