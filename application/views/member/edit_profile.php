
<body>

<h3 class="text-center" >Ubah Profile</h3>
<form action="" method="post">
<div class="row">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4 border"><br>
		<?php if($this->session->flashdata('info')):?>
			<br><div class="alert alert-success alert-dismissible" role="alert"> 
				<button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <?php echo $this->session->flashdata('info'); ?>  
			</div>
		<?php endif;?>
		<label>Nama Lengkap <i class="glyphicon glyphicon-user"></i></label><br>
		<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" value="<?=$member->namaMember?>"><br>
		<label>Tanggal Lahir <i class="glyphicon glyphicon-calendar"></i></label><br> 	
		<div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
			<input class="form-control" type="text" name="tanggal" readonly="readonly"   value="<?php echo set_value('tanggal')?>">
			<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		</div><br>
		<label>Status Pendidikan <i class="glyphicon glyphicon-education"></i></label><br>
		<input type="text" name="status" placeholder="Status Pendidikan" class="form-control" value="<?=$member->statusPendidikan?>"><br>
		<input type="submit" class="btn btn-info pull-right" value="Simpan" name="simpan">
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