
<body>

<h3 class="text-center" >Ubah Profile</h3>
<form action="profile.php">
<div class="row">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4 border"><br>
		<label>Nama Lengkap <i class="glyphicon glyphicon-user"></i></label><br>
		<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control"><br>
		<label>Tanggal Lahir <i class="glyphicon glyphicon-calendar"></i></label><br> 	
		<input type="text" name="tanggal" placeholder="" class="form-control"><br>
		<label>Status Pendidikan <i class="glyphicon glyphicon-education"></i></label><br>
		<input type="text" name="status" placeholder="Status Pendidikan" class="form-control"><br>
		<input type="submit" class="btn btn-info pull-right" value="Simpan">
	</div>
	<div class="col-sm-4">
	</div>
</div>
</form>
<div class="row">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4"><br>
		<a href="<?=base_url('member/fitur/profil');?>"><button class="btn btn-success"><i class="glyphicon glyphicon-arrow-left"></i> Profile</button></a>
	<div>
	<div class="col-sm-4">
	</div>
</div>


