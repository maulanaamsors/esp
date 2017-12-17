<body>

<div class="col-sm-12 index">
	<div class="row">
		<div class="col-sm-6 text-center">
			<br>
			<h1 style="color:white;">E-Learning Sandi Pramuka</h1>
		</div>
	</div>
	<div class="row container">
		<div class="col-xs-2">
		</div>
		<form method="post" action="<?=base_url('member/fitur');?>">
			<input type="hidden" value="morse" name="sandi">
			<button class="col-xs-4 index-sandi btn btn-lg btn-sandi">
				<center>
					<h3>Morse</h3>
					<img src="<?=base_url('assets/img/peluit.png');?>" class="img-responsive">
				</center>
			</button>
		</form>
		<div class="col-xs-2">
		</div>
		<form method="post" action="<?=base_url('member/fitur');?>">
			<input type="hidden" value="semaphore" name="sandi">
			<button type="submit" class="col-xs-4 index-sandi btn btn-lg btn-sandi">
				<center>
					<h3>Semaphore</h3>
					<img src="<?=base_url('assets/img/bendera.png');?>" class="img-responsive">
				</center>
			</button>
			
		</form>
	</div>
</div>



