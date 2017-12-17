<body>

<h3 class="text-center" >Login</h3>
<form method="post" action="<?= base_url('login/login_act');?>">
	<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4 border"><br>
			<label>Email <i class="glyphicon glyphicon-envelope"></i></label><br> 	 	
			<input type="email" name="email" placeholder="Email" class="form-control"><br>
			<label>Password <i class="glyphicon glyphicon-lock"></i></label><br> 	
			<input type="Password" name="password" placeholder="Password" class="form-control"><br>
			<input type="submit" class="btn btn-lg btn-info pull-right" value="Login">
		</div>
		<div class="col-sm-4">
		</div>
	</div>
</form>
<div class="row">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4"><br>
		<a href="index.php"><button class="btn btn-success"><i class="glyphicon glyphicon-arrow-left"></i> Halaman Utama</button></a>
	<div>
	<div class="col-sm-4">
	</div>
</div>
