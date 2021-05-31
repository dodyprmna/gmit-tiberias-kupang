<input type="hidden" name="id" id="id" value="<?= $perkawinan->id_perkawinan?>">
<div class="col-md-12">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>Gereja*</label>
				<input type="text" class="form-control" name="gereja" placeholder="Gereja" value="<?= $perkawinan->gereja?>" required>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Tanggal Pemberkatan*</label>
				<input type="date" class="form-control" name="tanggal_pemberkatan" value="<?= $perkawinan->tanggal_pemberkatan?>" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label><i class="fa fa-mars fa-2x" style="color: red;"></i> Data Calon Suami</label>
			</div>
		</div>
	</div>
	<div class="row ml-2">
		<div class="col-md-12">
			<div class="form-group">
				<label><i class="fa fa-circle"></i> Pribadi</label>
			</div>
		</div>
	</div>
	<div class="row ml-3">
		<div class="col-md-3">
			<div class="form-group">
				<label>Nama Lengkap*</label>
				<input class="form-control" type="text" name="nama_calon_suami" id="nama_calon_suami" placeholder="Nama Calon Suami" value="<?= $perkawinan->nama_calon_suami?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Tempat Lahir*</label>
				<input class="form-control" type="text" name="tempat_lahir_calon_suami" id="tempat_lahir_calon_suami" placeholder="Tempat Lahir" value="<?= $perkawinan->tempat_lahir_calon_suami?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Tanggal Lahir*</label>
				<input class="form-control" type="date" name="tanggal_lahir_calon_suami" id="tanggal_lahir_calon_suami" placeholder="Tanggal Lahir" value="<?= $perkawinan->tanggal_lahir_calon_suami?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Alamat Lengkap*</label>
				<textarea class="form-control" name="alamat_calon_suami" id="alamat_calon_suami" cols="3" placeholder="Alamat Lengkap" required><?= $perkawinan->alamat_calon_suami?></textarea>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Telepon*</label>
				<input class="form-control" type="number" name="telepon_calon_suami" id="telepon_calon_suami" placeholder="Telepon" value="<?= $perkawinan->telepon_calon_suami?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Agama*</label>
				<input class="form-control" type="text" name="agama_calon_suami" id="agama_calon_suami" placeholder="Agama" value="<?= $perkawinan->agama_calon_suami?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Gereja*</label>
				<input class="form-control" type="text" name="gereja_calon_suami" id="gereja_calon_suami" value="<?= $perkawinan->gereja_calon_suami?>" placeholder="Gereja" required>
			</div>
		</div>
	</div>
	<div class="row ml-2">
		<div class="col-md-12">
			<div class="form-group">
				<label><i class="fa fa-circle"></i> Ayah</label>
			</div>
		</div>
	</div>
	<div class="row ml-3">
		<div class="col-md-3">
			<div class="form-group">
				<label>Nama*</label>
				<input class="form-control" type="text" name="nama_ayah_calon_suami" id="nama_ayah_calon_suami" placeholder="Nama" value="<?= $perkawinan->nama_ayah_calon_suami?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Alamat*</label>
				<textarea class="form-control" name="alamat_ayah_calon_suami" id="alamat_ayah_calon_suami" cols="3" placeholder="Alamat" required><?= $perkawinan->alamat_ayah_calon_suami?></textarea>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Agama*</label>
				<input class="form-control" type="text" name="agama_ayah_calon_suami" id="agama_ayah_calon_suami" placeholder="Agama" value="<?= $perkawinan->agama_ayah_calon_suami?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Pekerjaan*</label>
				<input class="form-control" type="text" name="pekerjaan_ayah_calon_suami" id="pekerjaan_ayah_calon_suami" placeholder="Pekerjaan" value="<?= $perkawinan->pekerjaan_ayah_calon_suami?>" required>
			</div>
		</div>
	</div>
	<div class="row ml-2">
		<div class="col-md-12">
			<div class="form-group">
				<label><i class="fa fa-circle"></i> Ibu</label>
			</div>
		</div>
	</div>
	<div class="row ml-3">
		<div class="col-md-3">
			<div class="form-group">
				<label>Nama*</label>
				<input class="form-control" type="text" name="nama_ibu_calon_suami" id="nama_ibu_calon_suami" placeholder="Nama ibu" value="<?= $perkawinan->nama_ibu_calon_suami?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Alamat*</label>
				<textarea class="form-control" name="alamat_ibu_calon_suami" id="alamat_ibu_calon_suami" cols="3" placeholder="Alamat" required><?= $perkawinan->alamat_ibu_calon_suami?></textarea>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Agama*</label>
				<input class="form-control" type="text" name="agama_ibu_calon_suami" id="agama_ibu_calon_suami" placeholder="Agama" value="<?= $perkawinan->agama_ibu_calon_suami?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Pekerjaan*</label>
				<input class="form-control" type="text" name="pekerjaan_ibu_calon_suami" id="pekerjaan_ibu_calon_suami" placeholder="Pekerjaan" value="<?= $perkawinan->pekerjaan_ibu_calon_suami?>" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label><i class="fa fa-venus fa-2x" style="color: red;"></i> Data Calon Istri</label>
			</div>
		</div>
	</div>
	<div class="row ml-2">
		<div class="col-md-12">
			<div class="form-group">
				<label><i class="fa fa-circle"></i> Pribadi</label>
			</div>
		</div>
	</div>
	<div class="row ml-3">
		<div class="col-md-3">
			<div class="form-group">
				<label>Nama Lengkap*</label>
				<input class="form-control" type="text" name="nama_calon_istri" id="nama_calon_istri" placeholder="Nama Calon istri" value="<?= $perkawinan->nama_calon_istri?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Tempat Lahir*</label>
				<input class="form-control" type="text" name="tempat_lahir_calon_istri" id="tempat_lahir_calon_istri" placeholder="Tempat Lahir" value="<?= $perkawinan->tempat_lahir_calon_istri?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Tanggal Lahir*</label>
				<input class="form-control" type="date" name="tanggal_lahir_calon_istri" id="tanggal_lahir_calon_istri" placeholder="Tanggal Lahir" value="<?= $perkawinan->tanggal_lahir_calon_istri?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Alamat Lengkap*</label>
				<textarea class="form-control" name="alamat_calon_istri" id="alamat_calon_istri" cols="3" placeholder="Alamat Lengkap" required><?= $perkawinan->alamat_calon_istri?></textarea>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Telepon*</label>
				<input class="form-control" type="number" name="telepon_calon_istri" id="telepon_calon_istri" placeholder="Telepon" value="<?= $perkawinan->telepon_calon_istri?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Agama*</label>
				<input class="form-control" type="text" name="agama_calon_istri" id="agama_calon_istri" placeholder="Agama" value="<?= $perkawinan->agama_calon_istri?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Gereja*</label>
				<input class="form-control" type="text" name="gereja_calon_istri" id="gereja_calon_istri" value="<?= $perkawinan->gereja_calon_istri?>" placeholder="Gereja" required>
			</div>
		</div>
	</div>
	<div class="row ml-2">
		<div class="col-md-12">
			<div class="form-group">
				<label><i class="fa fa-circle"></i> Ayah</label>
			</div>
		</div>
	</div>
	<div class="row ml-3">
		<div class="col-md-3">
			<div class="form-group">
				<label>Nama*</label>
				<input class="form-control" type="text" name="nama_ayah_calon_istri" id="nama_ayah_calon_istri" placeholder="Nama" value="<?= $perkawinan->nama_ayah_calon_istri?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Alamat*</label>
				<textarea class="form-control" name="alamat_ayah_calon_istri" id="alamat_ayah_calon_istri" cols="3" placeholder="Alamat" required><?= $perkawinan->alamat_ayah_calon_istri?></textarea>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Agama*</label>
				<input class="form-control" type="text" name="agama_ayah_calon_istri" id="agama_ayah_calon_istri" placeholder="Agama" value="<?= $perkawinan->agama_ayah_calon_istri?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Pekerjaan*</label>
				<input class="form-control" type="text" name="pekerjaan_ayah_calon_istri" id="pekerjaan_ayah_calon_istri" placeholder="Pekerjaan" value="<?= $perkawinan->pekerjaan_ayah_calon_istri?>" required>
			</div>
		</div>
	</div>
	<div class="row ml-2">
		<div class="col-md-12">
			<div class="form-group">
				<label><i class="fa fa-circle"></i> Ibu</label>
			</div>
		</div>
	</div>
	<div class="row ml-3">
		<div class="col-md-3">
			<div class="form-group">
				<label>Nama*</label>
				<input class="form-control" type="text" name="nama_ibu_calon_istri" id="nama_ibu_calon_istri" placeholder="Nama ibu" value="<?= $perkawinan->nama_ibu_calon_istri?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Alamat*</label>
				<textarea class="form-control" name="alamat_ibu_calon_istri" id="alamat_ibu_calon_istri" cols="3" placeholder="Alamat" required><?= $perkawinan->alamat_ibu_calon_istri?></textarea>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Agama*</label>
				<input class="form-control" type="text" name="agama_ibu_calon_istri" id="agama_ibu_calon_istri" placeholder="Agama" value="<?= $perkawinan->agama_ibu_calon_istri?>" required>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Pekerjaan*</label>
				<input class="form-control" type="text" name="pekerjaan_ibu_calon_istri" id="pekerjaan_ibu_calon_istri" placeholder="Pekerjaan" value="<?= $perkawinan->pekerjaan_ibu_calon_istri?>" required>
			</div>
		</div>
	</div>
</div>

