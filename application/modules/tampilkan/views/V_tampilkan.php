<!DOCTYPE html>
<html lang="en">
<head>
    <title>DATA PADA DATABASE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Data User</h2>
        <p>Anda dapat mengelola data user</p>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama</th>
                    <th>NO. identitas</th>
                    <th>Asal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($member as $u) :
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $u['username'] ?></td>
                        <td><?= $u['password'] ?></td>
                        <td><?= $u['nama'] ?></td>
                        <td><?= $u['no'] ?></td>
                        <td><?= $u['asal'] ?></td>
                        <td><a href="<?= base_url()?>ud/hapus/<?= $u['id'] ?>" class="btn btn-danger">Hapus</a>
                            <a href="" class="btn btn-warning">Detail</a>
                            <a href="<?= base_url()?>ud/formEdit/<?= $u['id'] ?>" class="btn btn-primary">Ubah</a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>