<div class="col-md-6">
	<input type="hidden" name="id" id="id" value="<?= $user->id_user?>">
	<div class="form-group">
		<label>Nama User</label>
		<input type="text" name="nama_user" id="nama_user" class="form-control" value="<?= $user->nama_user?>" required>
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" id="username" class="form-control" value="<?= $user->username?>" required>
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat" id="alamat" class="form-control" value="<?= $user->alamat?>" required>
	</div>
</div>
<div class="col-md-6">
<div class="form-group">
		<label>Nomor Telepon</label>
		<input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control" value="<?= $user->nomor_telepon?>" required>
	</div>
	<div class="form-group">
		<label>Status User</label>
		<select class="form-control select2" id="status_user" name="status_user" required>
			<option value="0" <?php if($user->status_user == 0)echo "selected";?>>Tidak Aktif</option>
			<option value="1" <?php if($user->status_user == 1)echo "selected";?>>Aktif</option>
		</select>
	</div>
	<div class="form-group">
		<label>Role Akses</label>
		<select class="form-control select2" id="role" name="role" required>
			<?php foreach($role as $row):?>
			<option value="<?= $row->id_role?>" <?php if($user->fk_id_role == $row->id_role) echo "selected";?>><?= $row->nama_role?></option>
			<?php endforeach;?>		
		</select>
	</div>
</div>