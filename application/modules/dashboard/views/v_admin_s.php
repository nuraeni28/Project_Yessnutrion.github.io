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
              <h1 style="padding-top:20px;padding-left:20px;">Seller Data
              <small>(Penjual)</small>
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
            <a href="<?= base_url('dashboard/add')?>" class="btn btn-success btn-flat" style="margin-bottom:20px;"><i class="fa fa-user-plus"></i>Create</a>
            </div>
                <table id="patient">
                    <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Name</th>
                          <th scope="col">Gender</th>
                          <th scope="col">Age</th>
                          <th scope="col">Email</th>    
                          <th scope="col">Username</th>    
                          <th scope="col">Action</th>    
                        </tr>
                      </thead>
                      <tbody>
                       <?php 
                       $no=1;
                        foreach ($row ->result() as $key => $data) :?>
                        <tr>
                        <td scope="row"><?= $no++; ?></td>
                        <td><?= $data->fullname ?></td>
                        <td><?= $data->gender?></td>
                        <td><?= $data->age ?></td>
                        <td><?= $data->email ?></td>
                         <td><?= $data->username ?></td>
                         <form action="<?=base_url('dashboard/del')?>" method="post">
                         <td class="text-center">
                         <input type="hidden" name = "user_id" value="<?=$data->id?>">
                         <a href="<?= base_url('dashboard/simpan_edit/'.$data->id)?>" class="btn btn-primary btn-xs"> <i class="fa fa-pencil"></i> Update</a>
                         <button onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> Delete</button>
                         </td> 
                        </form>


    </tr>
    <?php endforeach ?>
                      </tbody>
                  </table>
              </div>
            </div>
        </div>
      </main>

  </body>
</html>
