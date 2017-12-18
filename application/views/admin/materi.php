<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">    
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.css">    
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <style type="text/css">
    	div.well{
    		color:white;
    	}
		a,a:active,a:visited{
			text-decoration: none;
			color: white;
		}
		a:hover{
			text-decoration: none;
			color: white;
			cursor: pointer;
		}
		a.link-modal{
			color: #000;
		}
		table{
			background-color: #fff;
		}
		th,td,tr{
			padding: 5px;
			border: 1px solid #e2e2e2;
		}
    </style>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2 admin-header text-center" style="background-color: #c62828">
			<div class="row" style="margin-top:4%">
				<span style="font-size: 15pt;"><b>Admin Panel</b></span>
			</div>
		</div>
		<div class="col-sm-10 admin-header">
			<div class="row" style="margin-top:1%">
				<div class="col-sm-3 pull-right">
					<div class="col-sm-7">
						<img src=""> Nama Admin
					</div>
					<div class="col-sm-5">
						<i class="fa fa-sign-out"></i> Log Out
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2 admin-sidebar">
			<ul style="margin-top:15%;"> 
				<a href="index.php"><li class="admin-sidebar"><b><i class="fa fa-tachometer"></i> Dashboard</b></li></a>
				<a href="#"><li class="admin-sidebar"><b><i class="fa fa-book"></i> Materi</b></li></a>
				<a href="latihan.php"><li class="admin-sidebar"><b><i class="fa fa-pencil"></i> Soal</b></li></a>
				<a href="member.php"><li class="admin-sidebar"><b><i class="fa fa-user"></i> Member</b></li></a>
			</ul>
		</div><br>
		<div class="col-sm-10">
			<div class="row">
				<div class="col-sm-12">
					<button class="btn btn-info pull-right" data-toggle="modal" data-target="#tambahData"><i class="fa fa-plus"></i> Tambah Materi</button>
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-12">
					<table class="table-hover" width="100%">
						<thead>
							<tr>
								<th width="1%" class="text-center">No</th>
								<th width="50%" class="text-center">Judul Materi</th>
								<th width="10%" class="text-center">Option</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">1</td>
								<td>Abcd</td>
								<td class="text-center">
									<a class="link-modal" data-toggle="modal" data-target="#editData"><i class="fa fa-pencil fa-lg"></i></a>&nbsp;
									<a class="link-modal" data-toggle="modal" data-target="#hapusData"><i class="fa fa-trash fa-lg"></i></a>
								</td>
							</tr>
							<tr>
								<td class="text-center">2</td>
								<td>Abcda</td>
								<td class="text-center">
									<a class="link-modal" data-toggle="modal" data-target="#editData"><i class="fa fa-pencil fa-lg"></i></a>&nbsp;
									<a class="link-modal" data-toggle="modal" data-target="#hapusData"><i class="fa fa-trash fa-lg"></i></a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Tambah Data -->
<div id="tambahData" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Materi</h4>
      </div>
      <div class="modal-body">
      	<label>Judul</label>
      	<input type="text" class="form-control">
      	<label>Materi</label>
      	<textarea class="form-control" placeholder="Soal" style="height: 150px;"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal Edit -->
<div id="editData" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Materi</h4>
      </div>
      <div class="modal-body">
      	<label>Judul</label>
      	<input type="text" class="form-control">
      	<label>Materi</label>
      	<textarea class="form-control" placeholder="Soal" style="height: 150px;"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal Hapus -->
<div id="hapusData" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus Materi ?</h4>
      </div>
      <div class="modal-body text-center">
      	<button class="btn btn-lg btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Tidak</button>
      	<button class="btn btn-lg btn-danger"><i class="fa fa-trash"></i> Hapus</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>
</html>