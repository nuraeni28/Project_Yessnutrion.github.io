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
    <link rel="stylesheet" href="<?= base_url('assets/dashboard/css/style.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/dashboard/css/side.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/dashboard/css/patient.css')?>" />
    
    
    
    <script src="https://kit.fontawesome.com/a0fa40e485.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
   
    <link href="https://fonts.googleapis.com/css2?family=Viaoda+Libre&display=swap" rel="stylesheet">   
    
    <title>DASHBOARD</title>
  </head>
  <body id="body">
      <style>
    .button {
    border: none;
    color: white;
    padding: 5px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
 
  }
      </style>
    <div class="container">
      <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="navbar__left">
          <a class="active_link" href="#">Admin</a>
        </div>
        <div class="navbar__right">
          <a href="#">
            <i class="fa fa-search" aria-hidden="true"></i>
          </a>
          <a href="#">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
          </a>
          <a href="#">
            <img width="30" src="assets/avatar.svg" alt="" />
            <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
          </a>
        </div>
      </nav>

      <main>
        <div class="main__container">
          <!-- MAIN TITLE STARTS HERE -->

          <div class="main__title">
            <i class="fas fa-hospital-user fa-2x text-lightblue" aria-hidden="true"></i>
            <div class="main__greeting">
              <h1>Patients Data</h1>
            </div>
          </div>

          <!-- MAIN TITLE ENDS HERE -->

          <!-- MAIN CARDS STARTS HERE -->
          <div class="main__cards_1">
            <div class="card_1">
              <div class="card_inner_1s">
                <table id="patient">
                <?php
                  if(!$this->session->flashdata('Info') == ''){
                    echo $this->session->flashdata('Info');
                  } ?>
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
                        foreach ($row->result() as $key => $data) :?>
                        <tr>
                        <td scope="row"><?= $no++; ?></td>
                        <td><?= $data->fullname ?></td>
                        <td><?= $data->gender?></td>
                        <td><?= $data->age ?></td>
                        <td><?= $data->email ?></td>
                         <td><?= $data->username ?></td>
                         <td class="text-center">
                         <a href="" class="button" style="background-color:#008CBA;"> <i class="fa fa-pencil"></i> Update</a>
                         <a href="" class="button" style="background-color:#f44336;"> <i class="fa fa-trash"></i> Delete</a>
                         </td> 


    </tr>
    <?php endforeach ?>
                      </tbody>
                  </table>
              </div>
            </div>
        </div>
      </main>

      <div id="sidebar" style="background-color: #64C5B1;">
        <div class="sidebar__title">
          <div class="sidebar__img">
            <h1 style="font-family: 'Viaoda Libre', cursive; padding-top:20px;">YESS<span style="color: red;">NUTRION!</h1>
          </div>
          <i
            onclick="closeSidebar()"
            class="fa fa-times"
            id="sidebarIcon"
            aria-hidden="true"
          ></i>
        </div>

        <div class="sidebar__menu">
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-home"></i>
            <a href="#">Dashboard</a>
          </div>
          <h2>MNG</h2>
          <div class="sidebar__link">
            <i class="fas fa-hospital-user"></i>
            <a href="#">Patient Management</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-building-o"></i>
            <a href="#">Company Management</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-wrench"></i>
            <a href="#">Employee Management</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-archive"></i>
            <a href="#">Warehouse</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-handshake-o"></i>
            <a href="#">Contracts</a>
          </div>
          <h2>LEAVE</h2>
          <div class="sidebar__link">
            <i class="fa fa-question"></i>
            <a href="#">Requests</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-sign-out"></i>
            <a href="#">Leave Policy</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-calendar-check-o"></i>
            <a href="#">Special Days</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-files-o"></i>
            <a href="#">Apply for leave</a>
          </div>
          <h2>PAYROLL</h2>
          <div class="sidebar__link">
            <i class="fa fa-money"></i>
            <a href="#">Payroll</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-briefcase"></i>
            <a href="#">Paygrade</a>
          </div>
          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a href="#">Log out</a>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
