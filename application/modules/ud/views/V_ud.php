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
                                <h1 class="h4 text-gray-900 mb-4">Edit Data</h1>
                            </div>
                            
                                        <form action="<?= base_url();?>ud/ubahData" method="post">
                                <input type="hidden" name="id" value="<?= $member['id'] ?>">
                                <div class="form-group">
                                            <label for="username">Username</label>
                                                <input type="text" class="form-control form-control-user" 
                                                    id="username" name="username" placeholder="Enter Username..." value="<?= $member['username'] ?>">
                                            </div>
                                            <div class="form-group">
                                            <label for="password">Password</label>
                                                <input type="text" class="form-control form-control-user"
                                                    id="password" name="password" placeholder="Enter Password..." value="<?= $member['password'] ?>">
                                            </div>
                                            <div class="form-group">
                                            <label for="nama">Nama</label>
                                                <input type="text" class="form-control form-control-user"
                                                    id="nama" name="nama" placeholder="Enter Nama..."  value="<?= $member['nama'] ?>">
                                            </div>
                                            <div class="form-group">
                                            <label for="nos">NO. Identitas</label>
                                                <input type="text" class="form-control form-control-user"
                                                    id="no" name="no" placeholder="Enter No. identitas..."  value="<?= $member['no'] ?>">
                                            </div>
                                            <div class="form-group">
                                            <label for="asal">Asal</label>
                                                <input type="text" class="form-control form-control-user"
                                                    id="asal" name="asal" placeholder="Enter asal..."  value="<?= $member['asal'] ?>">
                                            </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
