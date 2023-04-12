<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register Karyawan</title>
</head>
<body>
<div class="card-body">
<form action="simpanreg.php"method="POST">
    <div class="container">
            <div class="row vh-100 d-flex justify-content-center align-items-center">
                <div class="col-md-7 col-lg-5">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <h3 class="mb-5 mt-3 text-center text-success">R E G I S T E R</h3>

                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="">NIK</label>
                                    <input type="text" name="nik" class="form-control" placeholder="Masukan NIK Anda!">
                                </div>
                                <div class="mb-3">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama_karyawan" class="form-control" placeholder="Masukan Nama Anda!">
                                </div>
                                <div class="mb-3">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat_karyawan" class="form-control" placeholder="Masukan Alamat Anda!">
                                </div>
                                <div class="mb-3">
                                    <label for="">NO Telp</label>
                                    <input type="text" name="telp_karyawan" class="form-control" placeholder="Masukan NO Telp Anda!">
                                </div>
                                <div class="mb-3">
                                    <label for="">Gender</label>
                                    <input type="text" name="gender_karyawan" class="form-control" placeholder="Masukan Gender Anda!">
                                </div>
                                <div class="mb-3">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda!">
                                </div>
                                <div class="mb-3">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda!">
                                </div>
                                <div class="d-grid gap-2 text-center">
                                    <button class="btn btn-success">REGISTER</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>