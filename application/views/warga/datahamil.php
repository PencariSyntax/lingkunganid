<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>bootstrap.min.css">
    <title>Registrasi Warga</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container">
            <a class="navbar-brand" href="#">Lingkungan.id | Warga</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Beranda<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Lingkungan.id</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header bg-primary text-center text-white">
                Pendataan Rumah dan Kepala Keluarga <?= $hamil; ?>
            </div>
            <div class="card-body">
                <form action="<?= base_url('warga/'); ?>" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap :</label>
                                <span class="text-danger" style="font-size: 18px">*</span>
                                <input type="text" name="nama_lengkap" class="form-control rounded-pill" id="" placeholder="Muhamad Reza Palupi">
                            </div>
                            <div class="form-group">
                                <label>Alamat :</label>
                                <span class="text-danger" style="font-size: 18px">*</span>
                                <input type="text" name="alamat" class="form-control rounded-pill" id="" placeholder="Jalan Merak No.8">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>RT :</label>
                                        <input type="text" name="rt" class="form-control rounded-pill" id="" placeholder="014">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>RW :</label>
                                        <input type="text" name="rw" class="form-control rounded-pill" id="" placeholder="008">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Anggota Keluarga :</label>
                                <input type="text" name="jml_anggota" class="form-control rounded-pill" id="" placeholder="5">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jumlah Bayi</label>
                                        <input type="text" name="jml_bayi" class="form-control rounded-pill" id="" placeholder="1">
                                        <i class="form-text" style="font-size: 12px;">Umur dibawah 1 tahun</i>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Jumlah Balita</label>
                                    <input type="text" name="jml_balita" class="form-control rounded-pill" id="" placeholder="1">
                                    <i class="form-text" style="font-size: 12px;">Umur diantara 1 - 5 tahun</i>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jumlah Anak</label>
                                        <input type="text" name="jml_anak" class="form-control rounded-pill" id="" placeholder="3">
                                        <i class="form-text" style="font-size: 12px;">Umur dibawah 5 - 17 tahun</i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jumlah Dewasa</label>
                                        <input type="text" name="jml_dewasa" class="form-control rounded-pill" id="" placeholder="2">
                                        <i class="form-text" style="font-size: 12px;">Umur dibawah 18 - 60 tahun</i>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label style="font-size: 13.3px;">Jumlah Wanita Menyusui</label>
                                    <input type="text" name="jml_wanita_menyusui" class="form-control rounded-pill" id="" placeholder="2">
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jumlah Wanita Hamil</label>
                                        <input type="text" name="jml_hamil" class="form-control rounded-pill" id="" placeholder="1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Jumlah Lansia</label>
                                        <input type="text" name="jml_lansia" class="form-control rounded-pill" id="" placeholder="1">
                                        <i class="form-text" style="font-size: 12px;">Umur diatas 60 tahun</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-warning btn-block rounded-pill">Masukan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>