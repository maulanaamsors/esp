<body>

<h3 class="text-center" >Login</h3>
<form method="post" action="<?= base_url('login/login_act');?>">
	<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4 border"><br>
			<?php if($this->session->flashdata('peringatan')):?>
				<br><div class="alert alert-danger alert-dismissible" role="alert"> 
					<button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <?php echo $this->session->flashdata('peringatan'); ?>  
				</div>
			<?php endif;?>
			<label>Email <i class="glyphicon glyphicon-envelope"></i></label><br> 	 	
			<input type="email" name="email" placeholder="Email" class="form-control"><br>
			<label>Password <i class="glyphicon glyphicon-lock"></i></label><br> 	
			<input type="Password" name="password" placeholder="Password" class="form-control"><br>
			<input type="submit" class="btn btn-lg btn-info pull-right" value="Login">
			<span class="pull-right">&nbsp;&nbsp;</span>
			<a href="<?= base_url('login/register');?>" class="pull-right" style="margin-top:25px;">Registrasi</a>
		</div>
		<div class="col-sm-4">
		</div>
	</div>
</form>
<div class="row">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4"><br>
		<a href="<?=base_url('') ?>"><button class="btn btn-success"><i class="glyphicon glyphicon-arrow-left"></i> Halaman Utama</button></a>
	<div>
	<div class="col-sm-4">
	</div>
</div>
