<link rel="stylesheet" href="assets/css/intlTelInput.css">
<link rel="stylesheet" href="assets/css/demo.css">

<section class="ftco-section">
    <div class="container">

        <div class=" row justify-content-center">
            <div class="col-lg-7">
                <div class="card o-hidden border-0 shadow-lg  my-5 ">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!--  <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="<?= base_url('assets/') ?>images/Logo Jakarta Raya.png" width="20%" height="20%" align="text-center">
                                    </div>
                                    <div class="text-center">
                                        <b class="mb-4" style="font-size: 20px; color: black;">SURAT PENGANTAR</h2>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <hr>
                                    <form class="user" method="post" action="<?= base_url('registration'); ?>">
                                        <!-- Drop done -->
                                        <div class="form-group">
                                            <label class="labeltitle" for="Jenis Surat">Jenis Surat</label>
                                            <select class="custom-select " id="Jenis Surat" name='Jenis Surat'>
                                                <option selected value="" disabled selected>Jenis Surat</option>
                                                <option value="Domisili">Surat Keterangan Domisili</option>
                                                <option value="Nikah">Surat Keterangan Pengantar Nikah</option>
                                                <option value="Perbaikan Nama">Surat Keterangan Perbaikan Nama</option>
                                                <option value="Perbaikan Tanggal Lahir">Surat Keterangan Perbaikan Tanggal Lahir</option>
                                                <option value="Penerbitan PBB">Surat Keterangan Penerbitan PBB</option>
                                                <option value="Akta Kematian">Surat Keterangan Akta Kematian</option>
                                                <option value="Legalisir">Surat Keterangan Legalisir</option>
                                                <option value="Usaha">Surat Keterangan Usaha</option>
                                                <option value="Lainnya">Lainnya</option> Surat Keterangan Lainnya
                                            </select>
                                            <?= form_error('Jenis Surat', '<small class="text-danger  pl-3">', '</small>'); ?>
                                        </div>
                                        <!-- end drop done -->
                                        <div class="form-group">
                                            <label for="Nama Lengkap">Nama Lengkap</label>
                                            <input type="text" class="form-control " value="<?= set_value('Nama Lengkap'); ?>" id="Nama Lengkap" name="Nama Lengkap" placeholder="Nama Lengkap">
                                            <?= form_error('Nama Lengkap', '<small class="text-danger  pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group ">
                                            <label for="No. Hp">No. Hp</label>
                                            <input onfocus=" (this.type='tel' )" onblur="(this.type='text')" value="<?= set_value('Nomor Handphone'); ?>" placeholder="Nomor Handphone" class="form-control" value="<?= set_value('Nomor Handphone'); ?>" id="Nomor Handphone" name="Nomor Handphone">
                                            <?= form_error('Nomor Handphone', '<small class="text-danger  pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group ">
                                            <label for="No. Telepon Rumah">No. Telepon Rumah</label>
                                            <input onfocus=" (this.type='tel' )" onblur="(this.type='text')" value="<?= set_value('Nomor. Telepon Rumah'); ?>" placeholder="Nomor. Telepon Rumah" class="form-control" value="<?= set_value('Nomor. Telepon Rumah'); ?>" id="Nomor. Telepon Rumah" name="Nomor. Telepon Rumah">
                                            <?= form_error('Nomor. Telepon Rumah', '<small class="text-danger  pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="firstname">NIK</label>
                                            <input type="text" class="form-control " value="<?= set_value('firstname'); ?>" id="Nomor Induk Kependudukan" name="Nomor Induk Kependudukan" placeholder="Nomor Induk Kependudukan">
                                            <?= form_error('Nomor Induk Kependudukan', '<small class="text-danger  pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">No. KK</label>
                                            <input type="text" class="form-control " value="<?= set_value('lastname'); ?>" id="Nomor Kartu Keluarga" name="Nomor Kartu Keluarga" placeholder="Nomor Kartu Keluarga">
                                            <?= form_error('Nomor Kartu Keluarga', '<small class="text-danger  pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="birtday">Tanggal Kelahiran</label>
                                            <input type="date" class="form-control" required="required" id="" name="Tanggal Kelahiran" value="<?= set_value('birtday'); ?>" placeholder="Tanggal Kelahiran" />
                                            <!-- <input class="form-control  onfocus=" (this.type='date' )" onblur="(this.type='text')" value="<?= set_value('birtday'); ?>" id="birtday" name="birtday" placeholder="Date of birthdays"> -->
                                            <?= form_error('birtday', '<small class="text-danger  pl-3">', '</small>'); ?>
                                        </div>
                                        <div class=" form-group">
                                            <label for="company">Tempat Kelahiran</label>
                                            <input type="text" class="form-control  " id="Tempat Kelahiran" value="<?= set_value('country'); ?>" name="Tempat Kelahiran" placeholder="Tempat Kelahiran">
                                            <?= form_error('Tempat Kelahiran', '<small class="text-danger  pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label class="labeltitle" for="registrantype">Jenis Kelamin</label>
                                            <select class="custom-select " id="registrantype" name='registrantype'>
                                                <option selected value="" disabled selected>Jenis Kelamin</option>
                                                <option value="Laki - laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <?= form_error('Jenis Kelamin', '<small class="text-danger  pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label class="labeltitle" for="registrantype">Agama</label>
                                            <select class="custom-select " id="registrantype" name='registrantype'>
                                                <option selected value="" disabled selected>Agama</option>
                                                <option value="Islam">Agama Islam</option>
                                                <option value="Kristen Protestan">Agama Kristen Protestan</option>
                                                <option value="Katolik">Agama Katolik</option>
                                                <option value="Hindu">Agama Hindu</option>
                                                <option value="Buddha">Agama Buddha</option>
                                                <option value="Kong Hu Cu">Agama Kong Hu Cu</option>
                                            </select>
                                            <?= form_error('Agama', '<small class="text-danger  pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="country">Pekerjaan</label>
                                            <input type="text" class="form-control" id="Pekerjaan" value="<?= set_value('country'); ?>" name="Pekerjaan" placeholder="Pekerjaan">
                                            <?= form_error('Pekerjaan', '<small class="text-danger  pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="Kewarganegaraan">Kewarganegaraan</label>
                                            <input type="text" class="form-control " value="<?= set_value('Kewarganegaraan'); ?>" id="Kewarganegaraan" name="Kewarganegaraan" placeholder="Kewarganegaraan">
                                            <?= form_error('Kewarganegaraan', '<small class="text-danger  pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="Alamat">Alamat</label>
                                            <textarea name="Alamat" class="form-control" rows="2"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>foto 1</label>
                                                    <br>
                                                    <input type="file" name="" id="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>foto 1</label>
                                                    <br>
                                                    <input type="file" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <button type="submit" acation="<?= base_url('sirep/'); ?>" class="btn btn-primary btn-user btn-block">
                                            Kirim
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js" />
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
        <script src="assets/js/intlTelInput.js"></script>
        <script>
            var input = document.querySelector("#phone");
            window.intlTelInput(input, {
                // allowDropdown: false,
                // autoHideDialCode: false,
                // autoPlaceholder: "off",
                dropdownContainer: document.body,
                // excludeCountries: ["us"],
                // formatOnDisplay: false,
                // geoIpLookup: function(callback) {
                //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                //     var countryCode = (resp && resp.country) ? resp.country : "";
                //     callback(countryCode);
                //   });
                // },
                // hiddenInput: "full_number",
                // initialCountry: "auto",
                // localizedCountries: { 'de': 'Deutschland' },
                // nationalMode: false,
                // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                // placeholderNumberType: "MOBILE",
                // preferredCountries: ['cn', 'jp'],
                // separateDialCode: true,
                utilsScript: "assets/js/utils.js",
            });

            // $('#birtday').attr("placeholder", "Date of birthdays");



            // https://github.com/uxsolutions/bootstrap-datepicker

            $('.dateselect').datepicker({
                format: 'mm/dd/yyyy',
                // startDate: '-3d'
            });
        </script>