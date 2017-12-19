<body>

<h3 style="margin-left: 20px;">Profile</h3>
<div class="container">
	<div class="row">
		<div class="col-sm-12 border"><br>
			<div class="col-sm-12">
				<label class="pull-left" style="padding-top:10px;">Last Online : </label>
				<a href="<?=base_url('member/fitur/profil/ubah');?>"><button class="btn btn-info pull-right">Edit Profile</button></a>
				<span class="pull-right">&nbsp;</span>
				<a href="<?=base_url('member/fitur/profil/ubahfoto');?>"><button class="btn btn-info pull-right">Edit Foto</button></a>
			</div>
			<div class="col-sm-12 profile-head" style="background-image: url('<?= base_url("assets/img/member/".$member->idMember."/".$member->fotoSampul);?>');">
			</div>
			<div class="row">
				<div class="col-sm-2 profile-foto">
					<div class="circle-avatar" style="background-image: url('<?= base_url("assets/img/member/".$member->idMember."/".$member->foto);?>');"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 profile-bottom">
					<label><b class="glyphicon glyphicon-user"></b> Nama Lengkap</label> : <?=$member->namaMember; ?><br>
					<label><b class="glyphicon glyphicon-king"></b> Ranking #1 </label><br>
				</div>
				<div class="col-sm-5 profile-bottom">
					<label><b class="glyphicon glyphicon-education"></b> Status Pendidikan</label> : <?=$member->statusPendidikan; ?><br>
					<label><b class="glyphicon glyphicon-calendar"></b> Tanggal Lahir</label> : <?=$member->tglLahir; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4"><br>
			<a href="<?php echo base_url('member/fitur'); ?>"><button class="btn btn-success"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</button></a>
		<div>
	</div>
</div>
