<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>Data Diri</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- CSS Files -->
    <link href="assets/css/wizard/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/wizard/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/wizard/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/wizard/themify-icons.css" rel="stylesheet">
	</head>
	<body>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="blue" id="wizardProfile">
		                    <form action="" method="">
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Data Diri</h3>
									<p class="category">Lengkapi Data Diri Terlebih Dahulu</p>
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#about" data-toggle="tab">
												<div class="icon-circle">
                                                <i class="fas fa-users"></i>
												</div>
												1
											</a>
										</li>
			                            <li>
											<a href="#account" data-toggle="tab">
												<div class="icon-circle">
                                                <i class="fas fa-users"></i>
												</div>
												2
											</a>
										</li>
			                            <!-- <li>
											<a href="#address" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-map"></i>
												</div>
												Address
											</a>
										</li> -->
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">

		                            	<div class="row">
		                                    <div class="col-sm-12">
		                                        <h5 class="info-text">  </h5>
		                                    </div>
		                                    <div class="col-md-6">
		                                    	<div class="form-group">
		                                            <label>NIK</label>
		                                            <input type="text" class="form-control" placeholder="NIK">
		                                        </div>
		                                    </div>
                                            <div class="col-md-6">
		                                    <div class="form-group">
                                                <label>Jenis Kelamin</label><br>
                                                <select class="form-control" name="jenis_kelamin">
                                                    <option value="">Pilih Jenis Kelamin</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            </div>
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Nama Lengkap</label>
		                                            <input type="text" class="form-control" placeholder="Nama Lengkap">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="status_nikah">Status Pernikahan</label>
                                                <select class="form-control" id="status_nikah">
                                                    <option value="">Pilih Status Nikah</option>
                                                    <option value="Belum Menikah">Belum Menikah</option>
                                                    <option value="Menikah">Menikah</option>
                                                </select>
                                             </div>
		                                    </div>


                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label for="tempat">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="no_hp" placeholder="Masukkan Tempat Lahir">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="agama">Agama</label>
                                                <select class="form-control" id="agama">
                                                    <option value="">Pilih Agama</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Buddha">Buddha</option>
                                                    <option value="Konghucu">Konghucu</option>
                                                </select>
                                            </div>
                                            </div>

                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="tanggal_lahir"
                                                        placeholder="Masukkan Tanggal Lahir">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label for="pekerjaan">Pekerjaan</label>
                                                    <select class="form-control" id="pekerjaan">
                                                        <option value="">Pilih Jenis Pekerjaan</option>
                                                        <option value="Mahasiswa">Mahasiswa</option>
                                                        <option value="PNS">PNS</option>
                                                        <option value="Wiraswasta">Wiraswasta</option>
                                                    </select>
                                                </div>
                                            </div>
		                                </div>

		                            </div>
		                            <div class="tab-pane" id="account">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h5 class="info-text"> </h5>
		                                    </div>
		                                    <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="no_hp">No Hp</label>
                                                <input type="text" class="form-control" id="no_hp"
                                                    placeholder="Masukkan No Hp">
                                            </div>
		                                    </div>
		                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kelurahan">Kelurahan</label>
                                                <select class="form-control" id="kelurahan">
                                                    <option value="">Pilih Kelurahan</option>
                                                    <option value="1">Balai Baru</option>
                                                            <option value="2">Napar</option>
                                                            <option value="3">Balai Gadang</option>
                                                </select>
                                            </div>
		                                    </div>
		                                    <div class="col-md-6">
                                                 <div class="form-group">
                                                        <label for="provinsi">Provinsi</label>
                                                        <select class="form-control" id="provinsi">
                                                            <option value="">Pilih Provinsi</option>
                                                            <option value="Sumatera Barat">Sumatera Barat</option>
                                                            <option value="Sumatera Utara">Sumatera Utara</option>
                                                            <option value="Sumatera Selatan">Sumatera Selatan</option>

                                                        </select>
                                                </div>
		                                    </div>
		                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="rw">RW</label>
                                                <input type="text" class="form-control" id="rw"
                                                    placeholder="Masukkan RW">
                                            </div>
		                                    </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label for="kota">Kabupaten/Kota</label>
                                                    <select class="form-control" id="kota">
                                                        <option value="">Pilih Kabupaten/Kota</option>
                                                        <option value="Payakumbuh">Payakumbuh</option>
                                                        <option value="Padang">Padang</option>
                                                        <option value="Bukittinggi">Bukittinggi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="rt">RT</label>
                                                <input type="text" class="form-control" id="rt"
                                                    placeholder="Masukkan RT">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group ">
                                                <label for="kecamatan">Kecamatan</label>
                                                <select class="form-control" id="kecamatan">
                                                    <option value="">Pilih Kecamatan</option>
                                                    <option value="1">Payakumbuh Barat</option>
                                                    <option value="2">Payakumbuh Selatan</option>
                                                    <option value="3">Payakumbuh Timur</option>
                                                    <option value="2">Lamposi Tigo Nagori</option>
                                                </select>
                                            </div>
                                            </div>

                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nama_jalan">Nama Jalan</label>
                                                <textarea class="form-control" id="nama_jalan" rows="3" placeholder="Masukkan Nama Jalan"></textarea>
                                            </div>
		                                </div>
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Apakah data yang anda isi sudah benar?</label>
                                          </div>
		                            </div>


		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
		                                <input type='button' class='btn btn-finish btn-fill btn-primary btn-wd' data-toggle="modal" data-target="#processingModal"name='simpan' value='Simpan' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->


	</div>

    <div class="modal fade" id="processingModal" tabindex="-1" role="dialog" aria-labelledby="processingModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    Data Berhasil di Simpan
                </div>
                <div class="modal-footer">

                    <a href="/menulayanan" class="btn btn-primary">Oke</a>
                </div>
            </div>
        </div>
    </div>

</body>

	<!--   Core JS Files   -->
	<script src="assets/js/wizard/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/wizard/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/wizard/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/wizard/demo.js" type="text/javascript"></script>
	<script src="assets/js/wizard/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="assets/js/wizard/jquery.validate.min.js" type="text/javascript"></script>

</html>
