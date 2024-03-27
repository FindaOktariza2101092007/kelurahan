@extends('pages.pemohon.layouts.default')

@section('title')

@endsection

@section('content')
    <section class="section">


        <div class="section-body">
            <div class="card">
                <div class="card-body">
                <div class="container">

		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="blue" id="wizardProfile">
		                    <form action="" method="">
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Form Permohonan Surat Keterangan Usaha</h3>
									<p class="category">Lengkapi Data Diri</p>
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
			                            <li>
											<a href="#address" data-toggle="tab">
												<div class="icon-circle">
                                                    <i class="fas fa-users"></i>
												</div>
												3
											</a>
										</li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">

		                            	<div class="row">
		                                    <div class="col-sm-12">
		                                        <h5 class="info-text"> Cek Kelengkapan Data Diri </h5>
		                                    </div>
		                                    <div class="col-md-6">
		                                    	<div class="form-group">
		                                            <label>NIK</label>
		                                            <input type="text" class="form-control" placeholder="0027689346802200">
		                                        </div>
		                                    </div>
                                            <div class="col-md-6">
		                                    <div class="form-group">
                                                <label>Jenis Kelamin</label><br>
                                                <select class="form-control" name="jenis_kelamin"  size="1">
                                                    <option value="">Laki-laki</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            </div>
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Nama Lengkap</label>
		                                            <input type="text" class="form-control" placeholder="Budi Setiawan">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="status_nikah">Status Pernikahan</label>
                                                <select class="form-control" size="1" id="status_nikah">
                                                    <option value="">Belum Menikah</option>
                                                    <option value="Belum Menikah">Belum Menikah</option>
                                                    <option value="Menikah">Menikah</option>
                                                </select>
                                             </div>
		                                    </div>


                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label for="tempat">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="no_hp" placeholder="Padang">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="agama">Agama</label>
                                                <select class="form-control" size="1"id="agama">
                                                    <option value="">Islam</option>
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
                                                        placeholder="10/10/2002">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label for="pekerjaan">Pekerjaan</label>
                                                    <select class="form-control" size="1"id="pekerjaan">
                                                        <option value="">Mahasiswa</option>
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
		                                        <h5 class="info-text"> No.Hp dan Alamat </h5>
		                                    </div>
		                                    <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="no_hp">No Hp</label>
                                                <input type="text" class="form-control" id="no_hp"
                                                    placeholder="082198456834">
                                            </div>
		                                    </div>
		                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kelurahan">Kelurahan</label>
                                                <select class="form-control" id="kelurahan" size="1">
                                                    <option value="">Balai Baru</option>
                                                    <option value="1">Balai Baru</option>
                                                            <option value="2">Napar</option>
                                                            <option value="3">Balai Gadang</option>
                                                </select>
                                            </div>
		                                    </div>
		                                    <div class="col-md-6">
                                                 <div class="form-group">
                                                        <label for="provinsi">Provinsi</label>
                                                        <select class="form-control" id="provinsi" size="1">
                                                            <option value="">Sumatera Barat</option>
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
                                                    placeholder="001">
                                            </div>
		                                    </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label for="kota">Kabupaten/Kota</label>
                                                    <select class="form-control" id="kota" size="1">
                                                        <option value="">Payakumbuh</option>
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
                                                    placeholder="001">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group ">
                                                <label for="kecamatan">Kecamatan</label>
                                                <select class="form-control" id="kecamatan"  size="1">
                                                    <option value="">Payakumbuh Utara</option>
                                                    <option value="1">Payakumbuh Barat</option>
                                                    <option value="2">Payakumbuh Utara</option>
                                                    <option value="3">Payakumbuh Timur</option>
                                                    <option value="2">Lamposi Tigo Nagori</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nama_jalan">Nama Jalan</label>
                                                <textarea class="form-control" id="nama_jalan" rows="3" placeholder="Jln. Veteran No.70"></textarea>
                                            </div>
                                            </div>
		                                </div>
		                            </div>


		                            <div class="tab-pane" id="address">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h5 class="info-text"> Persyaratan</h5>
		                                    </div>
		                                    <div class="col-md-6">
		                                    	<div class="form-group">
		                                            <label>Bidang Usaha</label>
		                                            <input type="text" name="asal" class="form-control" placeholder="Bidang Usaha">
		                                        </div>
		                                    </div>
                                            <div class="col-md-6">
		                                    	<div class="form-group">
		                                            <label>Keperluan Usaha</label>
		                                            <input type="text" name="asal" class="form-control" placeholder="Keperluan Usaha">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
                                            <label for="formFile" class="form-label">Upload KTP</label>
                                                <input class="form-control" type="file" id="formFile">
		                                    </div>
                                            <div class="col-md-6">
                                            <label for="formFile" class="form-label">Upload KK</label>
                                                <input class="form-control" type="file" id="formFile">
		                                    </div>
                                            <div class="col-md-6">
                                            <label for="formFile" class="form-label">Upload Surat Keterangan RT/RW</label>
                                                <input class="form-control" type="file" id="formFile">
		                                    </div>
                                            <div class="col-md-6">
                                            <label for="formFile" class="form-label">Upload Surat Keterangan Domisili</label>
                                                <input class="form-control" type="file" id="formFile">
		                                    </div>




		                                </div>
                                        <br>
                                            <br>
                                        <div class="col-md-12">
                                            <input type="checkbox" id="dataBenar" name="dataBenar">
                                            <label for="dataBenar">Apakah Data yang Anda isi Sudah Benar?</label>

                                        </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
		                                <input type='button' class='btn btn-finish btn-fill btn-primary btn-wd' data-toggle="modal" data-target="#exampleModal" name='ajukan' value='Ajukan Permohonan' />
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


    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <b>Permohonan Anda akan kami proses dalam 3 hari masa kerja</b>
                            </div>
                            <div class="modal-footer justify-content-center">

                            <a href="/menulayanan" class="btn btn-primary">Oke</a>
                            </div>
                            </div>
                        </div>
                        </div>




            </div>

@endsection
