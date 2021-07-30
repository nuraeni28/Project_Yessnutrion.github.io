<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
    <title>Register</title>
    <link rel="stylesheet" href="<?= base_url('assets/register/css/style_1.css')?>">

  </head>
  <body>    
  <form action="register/add" method="POST">

    <section class="login py-5">
        <div class="container py-3">
            <div class="card">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 py-5">
                    <img src="<?= base_url('assets/register/img/1.png')?>" class="img-fluid" style="margin-top:400px;">
                </div>
                <?php echo form_open('register/add'); ?>
				
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="row">
                        <div class="offset-1 col-lg-9 col-md-9 col-sm-11 col-12">
                            <h1 class="font-weight-bold pb-5 pt-5">Sign Up</h1>
                            <label for="name"><strong>Name</label>
                            <input type="text" class="inp1 pb-2 pl-4" name="name" placeholder="Name">
                            <?= form_error('name');?>	
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="offset-1 col-lg-9 col-md-9 col-sm-11 col-12">
                            <label for="gender">Gender</label>
                            <br>
                            <label for="male">Male</label>
                            <input type="radio" name="gender" id="male" required value="male" checked>
                            <label for="female">&ensp;Female</label>
                            <input type="radio" name="gender" id="female" required value="female">
                        </div>
                    </div>
                     <div class="row pt-5">
                        <div class="offset-1 col-lg-9 col-md-9 col-sm-11 col-12">
                            <label for="age">Age</label>
                            <br>
                            <input type="text" class="inp1 pb-2 pl-4" name="age" placeholder="Age">
                            <?= form_error('age');?>	
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="offset-1 col-lg-9 col-md-9 col-sm-11 col-12">
                            <label for="email">Email</label>
                            <input type="text" class="inp1 pb-2 pl-4" name="email" placeholder="Email">
                            <?= form_error('email');?>	
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="offset-1 col-lg-9 col-md-9 col-sm-11 col-12">
                        <label for="username">Username</label>
                            <input type="text" class="inp1 pb-2 pl-4" name="username" placeholder="Username">
                            <?= form_error('username');?>	
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="offset-1 col-lg-9 col-md-9 col-sm-11 col-12">
                        <label for="pass">Password</label>
                            <input type="password" class="inp1 pb-2 pl-4" name="pass" placeholder="Password">
                            <?= form_error('pass');?>	
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="offset-1 col-lg-9 col-md-9 col-sm-11 col-12">
                        <label for="repeat-pass">Repeat Password</label>
                            <input type="password" class="inp1 pb-2 pl-4" name="repeat_pass" placeholder="Repeat Password">
                            <?= form_error('repeat_pass');?>	
                        </div>
                    </div>
                    <div class="row pt-5">
                     <div class="offset-1 col-lg-9 col-md-9 col-sm-11 col-12">
                        <label>Regist As</label>
						<select name="as" id="sebagai" class="form-control">
							<option value="1">Patient</option>
							<option value="2">Nutrition</option>
							<option value="3">Seller</option>
							</select>
                    </div>
                    </div>
                    <div class="row pt-3">
                        <div class="offset-1 col-lg-9">
                            <p class="my-4"><input type="checkbox"> Remember Me </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-1 col-lg-9">
                            <input type="submit" value="Sign Up" class="p-3 my-3 font-weight-bold btn-primary">
                        </div>
                    </div>
                    </form>
                    
                </div>
            </div>
        </div>
        </div>
    </section>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>