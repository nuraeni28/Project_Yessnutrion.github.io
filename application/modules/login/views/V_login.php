<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-lg-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Sign In</h1>
                            </div>
                            <?php
                            if(isset($_GET['alert'])){
                                if($_GET['alert']= 'gagal'){
                                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    <strong>GAGAL!</strong>LOGIN.
                                  </div>";
                                }
                            }
                            ?>
                            <?= validation_errors();?>
                            <form class="user" method="POST" action="<?= base_url('Login/login_aksi');?>">
                                <div class="form-group">
                                <label for="username">Username</label>
                                    <input type="text" class="form-control form-control-user"
                                        id="username" name="username" placeholder="Enter Username...">
                                </div>
                                <div class="form-group">
                                <label for="username">Password</label>
                                    <input type="password" class="form-control form-control-user"
                                        id="password" name="password" placeholder="Enter Password...">
                                </div>
                                <div class="form-group">
                                    <label for="sebagai">Login sebagai: </label>
                                    <select name="sebagai" id="sebagai" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="member">Member</option>
                                </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('Register');?>">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
