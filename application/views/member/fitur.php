<body>

<h3 class="text-center">Sandi <?=$sandi->sandi?></h3>
<div class="row">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8 border"><br>
		<div class="row">
			<div class="col-sm-12 text-center">
				<a href="<?=base_url('member/fitur/materi');?>">
				<div class="col-sm-4">
					<div class="well" style="background-color: #1565C0; color: white;">
						<img src="<?= base_url('assets/img/materi.png');?>" height="100px">
						<h3>Materi</h3>
					</div>
				</div>
				</a>
				<a href="<?=base_url('member/fitur/kuis');?>">
				<div class="col-sm-4">
					<div class="well" style="background-color: #4CAF50; color: white;">
						<img src="<?= base_url('assets/img/latihan.png');?>" height="100px">
						<h3>Latihan</h3>
					</div>
				</div>
				</a>
				<a href="<?=base_url('member/fitur/profil');?>">
				<div class="col-sm-4">
					<div class="well" style="background-color: #FBC02D; color: white;">
						<div class="row">
							<div class="col-sm-6">
								<div class="circle-avatar" style="background-image: url('<?= base_url("assets/img/gambar.jpg");?>'); border: 3px solid"></div>
							</div>
						</div>
						<div class="row">
							<h3>Profile</h3>
						</div>
					</div>
				</div>
				</a>
			</div>
		<div class="row">
			<div class="col-sm-12">
					<div class="col-sm-2">
						<a href="<?=base_url('member/logout');?>" class="btn btn-sm pull-right btn-danger"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out
						</a>
					</div>
				<div class="col-sm-4 pull-right">
					Ranking-mu : #4 <a href="ranking.php"><button class="btn btn-sm pull-right btn-success">Lihat Ranking</button></a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
	</div>
	<div class="col-sm-4"><br>
		<a href="<?=base_url('');?>"><button class="btn btn-success"><i class="glyphicon glyphicon-arrow-left"></i> Halaman Utama</button></a>
	<div>
</div>

