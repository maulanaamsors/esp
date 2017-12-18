<body>

<h3 class="text-center" >Register</h3>
<div class="row">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4 border"><br>
	<form action="<?php echo base_url('login/register');?>" method="post">
		<font color="red"> <?php echo validation_errors();?> </font>
		
		<?php if($this->session->flashdata('info')):?>
			<br><div class="alert alert-success alert-dismissible" role="alert"> 
				<button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <?php echo $this->session->flashdata('info'); ?>  
			</div>
		<?php endif;?>
		<?php if($this->session->flashdata('peringatan')):?>
			<br><div class="alert alert-danger alert-dismissible" role="alert"> 
				<button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <?php echo $this->session->flashdata('peringatan'); ?>  
			</div>
		<?php endif;?>

		<h4><b> Akun </b></h4>
		<label>Email <i class="glyphicon glyphicon-envelope"></i></label><br> 	 	
		<input type="email" name="email" placeholder="Email" class="form-control" value="<?php echo set_value('email')?>"><br>
		<label>Password <i class="glyphicon glyphicon-lock"></i></label><br> 	
		<input type="Password" name="password" placeholder="Password" class="form-control" value="<?php echo set_value('password')?>"><br>
		<h4><b> Data Pribadi </b></h4>
		<label>Nama Lengkap <i class="glyphicon glyphicon-user"></i></label><br>
		<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" value="<?php echo set_value('nama')?>"><br>
		<label>Tanggal Lahir <i class="glyphicon glyphicon-calendar"></i></label><br> 	
		<input type="text" name="tanggal" placeholder="" class="form-control"  value="<?php echo set_value('tanggal')?>"><br>
		<label>Status Pendidikan <i class="glyphicon glyphicon-education"></i></label><br>
		<input type="text" name="status" placeholder="Status Pendidikan" class="form-control" value="<?php echo set_value('status')?>"><br>
		<input type="submit" class="btn btn-lg btn-info pull-right" value="Buat Akun" name="simpanregister">
	</form>
	</div>
	<div class="col-sm-4">
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4"><br>
		<a href="<?php echo base_url('');?>" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left"></i> Halaman Utama</button>
	<div>
	<div class="col-sm-4">
	</div>
</div>
