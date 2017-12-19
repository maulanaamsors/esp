
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
		<div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
			<input class="form-control" type="text" name="tanggal" readonly="readonly"   value="<?php echo set_value('tanggal')?>">
			<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		</div><br>
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