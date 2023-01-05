<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Konsultasi Hukum</h1>
			</div>
			<div class="col-sm-6">
				
			</div>
		</div>
	</div><!-- /.container-fluid -->

</section>

<!-- Main content -->
<section class="content">
<?php $this->view('massages')  ?>
	<!-- general form elements -->
	<div class="col col-md-12">

		<div class="card card-success">
			<div class="card-header">
				<h3 class="card-title">Form Konsultasi Hukum</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php echo form_open_multipart('konsultasi/process') ?>
				<div class="card-body">
					<div class="form-group ">
						<label for="InputJudul">Nama Lengkap</label>
						<input type="hidden" name="id" value="<?=$row->id_konsultasi?>">
						<input type="hidden" name="status" value="Dibuat">
						<input type="text" name="nama_lengkap" value="<?=$row->nama_lengkap?>" class="form-control"
							id="InputJudul" required>
					</div>



					<div class="form-group">
						<label>Agama</label>
						<select name="agama" class="form-control">
							<?php $agama =  $row->agama ?>
							<option value="" ></option>
							<option value="islam" <?= $agama == 'islam' ? 'selected' : null ?>>Islam</option>
							<option value="kristen" <?= $agama == 'kristen' ? 'selected' : null ?>>Kristen</option>
							<option value="katolik" <?= $agama == 'katolik' ? 'selected' : null ?>>Katolik</option>
							<option value="hindu" <?= $agama == 'hindu' ? 'selected' : null ?>>Hindu</option>
							<option value="buddha" <?= $agama == 'buddha' ? 'selected' : null ?>>Buddha</option>
							<option value="konghucu" <?= $agama == 'konghucu' ? 'selected' : null ?>>Konghucu</option>
						</select>
					</div>


					<div class="form-group">
						<label for="InputTahun">Alamat</label>
						<input type="text" name="alamat" value="<?=$row->alamat ?>" class="form-control" id="InputTahun">
					</div>

					<div class="form-group">
						<label for="InputTahun">Kelurahan</label>
						<input type="text" name="kelurahan" value="<?=$row->kelurahan ?>" class="form-control"
							id="InputTahun">
					</div>

					<div class="form-group">
						<label for="InputTahun">Kota/Kabupaten</label>
						<input type="text" name="kota" value="<?=$row->kota ?>" class="form-control"
							id="InputTahun">
					</div>

					<div class="form-group">
						<label>Kebangsaan</label>
						<select name="kebangsaan" class="form-control">
							<?php $kebangsaan =  $row->kebangsaan ?>
							<option value="" ></option>
							<option value="WNI" <?= $kebangsaan == 'WNI' ? 'selected' : null ?>>WNI</option>
							<option value="WNA" <?= $kebangsaan == 'WNA' ? 'selected' : null ?>>WNA</option>
						</select>
					</div>

					<div class="form-group">
						<label for="InputStatus">Umur</label>
						<input type="number" name="umur" value="<?=$row->umur ?>" class="form-control"
							id="InputStatus">
					</div>


					<div class="form-group">
						<label>Jenis Kelamin</label>
						<select name="jenis_kelamin" class="form-control">
							<?php $jenis_kelamin =  $row->jenis_kelamin ?>
							<option value="" ></option>
							<option value="L" <?= $jenis_kelamin == 'L' ? 'selected' : null ?>>Laki-Laki</option>
							<option value="P" <?= $jenis_kelamin == 'P' ? 'selected' : null ?>>Perempuan</option>
						</select>
					</div>



					<div class="form-group">
						<label>Status Perkawinan</label>
						<select name="status_perkawinan" class="form-control">
							<?php $status_perkawinan =  $row->status_perkawinan ?>
							<option value="" ></option>
							<option value="belum kawin" <?= $status_perkawinan == 'belum kawin' ? 'selected' : null ?>>Belum Kawin</option>
							<option value="kawin" <?= $status_perkawinan == 'kawin' ? 'selected' : null ?>>Kawin</option>
							<option value="cerai hidup" <?= $status_perkawinan == 'cerai hidup' ? 'selected' : null ?>>Cerai Hidup</option>
							<option value="cerai mati" <?= $status_perkawinan == 'cerai mati' ? 'selected' : null ?>>Cerai Mati</option>
						</select>
					</div>

					<div class="form-group">
						<label>Pendidikan</label>
						<select name="pendidikan" class="form-control">
							<?php $pendidikan =  $row->pendidikan ?>
							<option value="" ></option>
							<option value="SD" <?= $pendidikan == 'SD' ? 'selected' : null ?>>SD</option>
							<option value="SMP" <?= $pendidikan == 'SMP' ? 'selected' : null ?>>SMP</option>
							<option value="SMA" <?= $pendidikan == 'SMA' ? 'selected' : null ?>>SMA</option>
							<option value="Diploma" <?= $pendidikan == 'Diploma' ? 'selected' : null ?>>Diploma</option>
							<option value="Sarjana" <?= $pendidikan == 'Sarjana' ? 'selected' : null ?>>Sarjana</option>
							<option value="Magister" <?= $pendidikan == 'Magister' ? 'selected' : null ?>>Magister</option>
							<option value="Doktor" <?= $pendidikan == 'Doktor' ? 'selected' : null ?>>Doktor</option>
							<option value="Pondok Pesantren" <?= $pendidikan == 'Pondok Pesantren' ? 'selected' : null ?>>Pondok Pesantren</option>
							<option value="Nonformal" <?= $pendidikan == 'Nonformal' ? 'selected' : null ?>>Nonformal</option>
						</select>
					</div>

					<div class="form-group">
						<label for="InputStatus">Pekerjaan</label>
						<input type="text" name="pekerjaan" value="<?=$row->pekerjaan ?>" class="form-control"
							id="InputStatus">
					</div>
					<div class="form-group">
						<label for="InputStatus">Rata-Rata Pengeluaran</label>
						<input type="number" name="rata_rata_pengeluaran" value="<?=$row->rata_rata_pengeluaran ?>" class="form-control"
							id="InputStatus" placeholder="Rp.">
							<small>(Dalam Hitungan Bulan)</small>
					</div>
					<div class="form-group">
						<label for="InputStatus">Jumlah Tanggungan</label>
						<input type="number" name="jumlah_tanggungan" value="<?=$row->jumlah_tanggungan ?>" class="form-control"
							id="InputStatus">
					</div>
				
					<div class="form-group">
						<label>Jenis Masalah</label>
						<select name="jenis_masalah" class="form-control">
							<?php $jenis_masalah =  $row->jenis_masalah ?>
							<option value="" ></option>
							<option value="Keluarga" <?= $jenis_masalah == 'Keluarga' ? 'selected' : null ?>>Keluarga</option>
							<option value="Bisnis" <?= $jenis_masalah == 'Bisnis' ? 'selected' : null ?>>Bisnis</option>
							<option value="Hutang Piutang" <?= $jenis_masalah == 'Hutang Piutang' ? 'selected' : null ?>>Hutang Piutang</option>
							<option value="Teknologi Informasi" <?= $jenis_masalah == 'Teknologi Informasi' ? 'selected' : null ?>>Teknologi Informasi</option>
							<option value="Ketenagakerjaan" <?= $jenis_masalah == 'Ketenagakerjaan' ? 'selected' : null ?>>Ketenagakerjaan</option>
							<option value="Pertanahan dan Properti" <?= $jenis_masalah == 'Pertanahan dan Properti' ? 'selected' : null ?>>Pertanahan dan Properti</option>
							<option value="Pidana dan Laporan Polisi" <?= $jenis_masalah == 'Pidana dan Laporan Polisi' ? 'selected' : null ?>>Pidana dan Laporan Polisi</option>
							<option value="Kekayaan Intelektual" <?= $jenis_masalah == 'Kekayaan Intelektual' ? 'selected' : null ?>>Kekayaan Intelektual</option>
						</select>
					</div>

					<div class="form-group">
						<label for="InputStatus">Jelaskan Kronologi Masalah</label>
						<textarea type="text" name="masalah_kasus" rows="4" value="" class="form-control"
							id="InputStatus" placeholder="tulis dengan jelas ..."><?=$row->masalah_kasus ?></textarea>
					</div>
					<div class="form-group">
						<label for="InputStatus">Penanganan Yang Sudah di Lakukan</label>
						<textarea type="text" name="penanganan"  value="" class="form-control"
							id="InputStatus" placeholder="kosongkan bila belum pernah ditangani sebelumnya ..."><?=$row->penanganan ?></textarea>
					</div>

					<div class="form-group">
					<label for="InputStatus">Status</label>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio"  value="Diproses"   id="customRadio1" name="status" <?php if($row->status = ['Diproses'] == 'Diproses' ) echo 'checked' ?>>
                          <label for="customRadio1" class="custom-control-label">Diproses</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" value="Dibuat"  id="customRadio2" name="status" <?php if($row->status = ['Dibuat'] == 'Dibuat' ) echo 'checked' ?>>
                          <label for="customRadio2" class="custom-control-label">Dibuat</label>
                        </div>
					</div>

					<!-- /.card-body -->
					<div class="card-footer">
						<button type="submit" name="<?=$page?>" class="btn btn-success">
							<i class="fa fa-paper-plane"></i> Kirim
						</button>
						<button type="reset" class="btn btn-secondary">Reset</button>
					</div>
			<?php echo form_close() ?>
		</div>
		<!-- /.card -->
	</div>

	</div>
	</div>
	</div>

	<!-- /.card-body -->
	</div>

	<!-- /.card -->
	</div>
	<!-- /.col -->
	</div>

	<!-- /.row -->
</section>
