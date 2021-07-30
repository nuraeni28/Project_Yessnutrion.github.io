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
              <h1 style="padding-top:20px;padding-left:20px;">Patients
              <small>(Pasien)</small>
              </h1>
            </div>
          </div>

          <!-- MAIN TITLE ENDS HERE -->

  
          <!-- MAIN CARDS STARTS HERE -->
          <div class="main__cards_1">
            <div class="card_1">
            <h3 style="padding-bottom:20px;">Add Patient</h3>
            <?php
                if(!$this->session->flashdata('Info') == ''){
               echo $this->session->flashdata('Info'); }
            ?>
              <div class="card_inner_1s">
              <div class="pull-right">
            <a href="<?= base_url('dashboard')?>" class="btn btn-warning btn-flat" style="margin-bottom:20px;"><i class="fa fa-undo"></i>Back</a>
            </div>
            
            <div class="box-body">
              <div class="row">
               <div class="col-md-4"style="margin-left:320px;">
               <form action="dashboard/add" method="POST">
               <?php echo form_open('dashboard/add'); ?>
                  <div class="form-group">
                      <label for="name"><strong>Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Name">
                      <?= form_error('name');?>	
                  </div>
                  <div class="form-group">
                  <label for="gender">Gender</label>
                  <br>
                  <label for="male">Male</label>
                  <input type="radio" name="gender" id="male" required value="male" checked>
                  <label for="female">&ensp;Female</label>
                  <input type="radio" name="gender" id="female" required value="female">
                  </div>
                  <div class="form-group">
                      <label for="age">Age</label>
                      <input type="text" class="form-control" name="age" placeholder="Age">
                      <?= form_error('age');?>	
                  </div>
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" name="email" placeholder="Email">
                      <?= form_error('email');?>	
                  </div>
                  <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" name="username" placeholder="Username">
                      <?= form_error('username');?>	
                  </div>
                  <div class="form-group">
                      <label for="pass">Password</label>
                      <input type="password" class="form-control" name="pass" placeholder="Password">
                      <?= form_error('pass');?>	
                  </div>
                  <div class="form-group">
                      <label for="repeat_pass">Repeat Password</label>
                      <input type="password" class="form-control" name="repeat_pass" placeholder="Repeat Password">
                      <?= form_error('age');?>	
                  </div>
                  <div class="form-group">
                  <label>Regist As</label>
                      <select name="as" id="sebagai" class="form-control">
                      <option value="1">Patient</option>
                      </select>
              </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-success btn-flat">Submit</button>
                      <button type="reset"  class="btn btn-secondary btn-flat">Reset</button>
                  </div>
               </form>
            </div>
              </div>
              </div>
              
      
           
            