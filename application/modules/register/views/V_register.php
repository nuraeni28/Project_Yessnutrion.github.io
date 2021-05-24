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
                                <h1 class="h4 text-gray-900 mb-4">Sign Up</h1>
                            </div>
                            
                            <form class="user" method="POST" action="<?= base_url('Register/add');?>">
                                <div class="form-group">
                                <label for="username">Username</label>
                                    <input type="text" class="form-control form-control-user"
                                        id="username" name="username" placeholder="Enter Username...">
                                </div>
                                <div class="form-group">
                                <label for="password">Password</label>
                                    <input type="password" class="form-control form-control-user"
                                        id="password" name="password" placeholder="Enter Password...">
                                </div>
                                <div class="form-group">
                                <label for="nama">Nama</label>
                                    <input type="text" class="form-control form-control-user"
                                        id="nama" name="nama" placeholder="Enter Nama...">
                                </div>
                                <div class="form-group">
                                <label for="nos">NO. Identitas</label>
                                    <input type="text" class="form-control form-control-user"
                                        id="no" name="no" placeholder="Enter No. identitas...">
                                </div>
                                <div class="form-group">
                                <label for="asal">Asal</label>
                                    <input type="text" class="form-control form-control-user"
                                        id="asal" name="asal" placeholder="Enter asal...">
                                </div>
                                <div class="form-group">
                                    <label for="sebagai">Daftar Sebagai: </label>
                                    <input type="password" class="form-control form-control-user"
                                        placeholder="Member" readonly>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                   Daftar
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('Login');?>">I have account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
