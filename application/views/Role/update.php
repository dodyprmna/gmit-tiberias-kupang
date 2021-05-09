<div class="col-md-6">
	<input type="hidden" name="id" id="id" value="<?= $role->id_role ?>">
	<div class="form-group">
		<label>Nama Role</label>
		<input class="form-control" type="text" name="nama_role" id="nama_role" value="<?= $role->nama_role ?>" required>
	</div>
	<div class="form-group">
		<label>Status Role</label>
		<select class="form-control" name="status_role" id="status_role">
			<option value="1" <?php if ($role->status_role == 1) echo "selected"; ?>>Aktif</option>
			<option value="0" <?php if ($role->status_role == 0) echo "selected"; ?>>Tidak Aktif</option>
		</select>
	</div>
</div>
<div class="col-md-6">
	<div class="form-group">
		<div class="row">
			<div class="col-md-6">
				<label>Akses Role</label>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<input type="checkbox" style="margin-right: 7px" name="akses_role[]" value="1" <?php if (in_array('1', explode(',', $role->akses_role))) echo "checked"; ?>> Dashboard
			</div>
			<div class="col-md-4">
				<input type="checkbox" style="margin-right: 7px" name="akses_role[]" value="2" <?php if (in_array('2', explode(',', $role->akses_role))) echo "checked"; ?>> Program Kerja
			</div>
			<div class="col-md-4">
				<input type="checkbox" style="margin-right: 7px" name="akses_role[]" value="3" <?php if (in_array('3', explode(',', $role->akses_role))) echo "checked"; ?>> Kegiatan
			</div>
			<div class="col-md-4">
				<input type="checkbox" style="margin-right: 7px" name="akses_role[]" value="4" <?php if (in_array('4', explode(',', $role->akses_role))) echo "checked"; ?>> Kegiatan (Insert Update)
			</div>
			<div class="col-md-4">
				<input type="checkbox" style="margin-right: 7px" name="akses_role[]" value="5" <?php if (in_array('5', explode(',', $role->akses_role))) echo "checked"; ?>> Detail Kegiatan
			</div>
			<div class="col-md-4">
				<input type="checkbox" style="margin-right: 7px" name="akses_role[]" value="6" <?php if (in_array('6', explode(',', $role->akses_role))) echo "checked"; ?>> Kinerja Kegiatan
			</div>
			<div class="col-md-4">
				<input type="checkbox" style="margin-right: 7px" name="akses_role[]" value="7" <?php if (in_array('7', explode(',', $role->akses_role))) echo "checked"; ?>> Prestasi
			</div>
			<div class="col-md-4">
				<input type="checkbox" style="margin-right: 7px" name="akses_role[]" value="8" <?php if (in_array('8', explode(',', $role->akses_role))) echo "checked"; ?>> Prestasi (Proses)
			</div>
			<div class="col-md-4">
				<input type="checkbox" style="margin-right: 7px" name="akses_role[]" value="9" <?php if (in_array('9', explode(',', $role->akses_role))) echo "checked"; ?>> Capaian Kegiatan
			</div>
			<div class="col-md-4">
				<input type="checkbox" style="margin-right: 7px" name="akses_role[]" value="10" <?php if (in_array('10', explode(',', $role->akses_role))) echo "checked"; ?>> Master User
			</div>
			<div class="col-md-4">
				<input type="checkbox" style="margin-right: 7px" name="akses_role[]" value="11" <?php if (in_array('11', explode(',', $role->akses_role))) echo "checked"; ?>> Master Role
			</div>
			<div class="col-md-4">
				<input type="checkbox" style="margin-right: 7px" name="akses_role[]" value="12" <?php if (in_array('12', explode(',', $role->akses_role))) echo "checked"; ?>> Budgeting
			</div>
			<div class="col-md-4">
				<input type="checkbox" style="margin-right: 7px" name="akses_role[]" value="13" <?php if (in_array('13', explode(',', $role->akses_role))) echo "checked"; ?>> Report
			</div>
		</div>
	</div>
</div>