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
				<a href="materi.php"><li class="admin-sidebar"><b><i class="fa fa-book"></i> Materi</b></li></a>
				<a href="latihan.php"><li class="admin-sidebar"><b><i class="fa fa-pencil"></i> Soal</b></li></a>
				<a href="#"><li class="admin-sidebar"><b><i class="fa fa-user"></i> Member</b></li></a>
			</ul>
		</div><br>
		<div class="col-sm-10">
			<div class="row">
				<div class="col-sm-12">
					<table class="table-hover" width="100%">
						<thead>
							<tr>
								<th width="1%" class="text-center">No</th>
								<th width="50%" class="text-center">Nama</th>
								<th width="12%" class="text-center">Email</th>
								<th width="12%" class="text-center">Pendidikan</th>
								<th width="12%" class="text-center">Score</th>
								<th width="12%" class="text-center">Option</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">1</td>
								<td>Abcd</td>
								<td class="text-center">L@gmail.com</td>
								<td class="text-center">SMPN 123 Wwww</td>
								<td class="text-center">123123</td>
								<td class="text-center">
									<a class="link-modal" data-toggle="modal" data-target="#detailData"><i class="fa fa-eye fa-lg"></i></a>&nbsp;
									<a class="link-modal" data-toggle="modal" data-target="#hapusData"><i class="fa fa-trash fa-lg"></i></a>
								</td>
							</tr>
							<tr>
								<td class="text-center">2</td>
								<td>Babcd</td>
								<td class="text-center">P@gmail.com</td>
								<td class="text-center">SMPN 123 Wwww</td>
								<td class="text-center">123123</td>
								<td class="text-center">
									<a class="link-modal" data-toggle="modal" data-target="#detailData"><i class="fa fa-eye fa-lg"></i></a>&nbsp;
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

<!-- Modal Detail -->
<div id="detailData" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detail Member</h4>
      </div>
      <div class="modal-body">
      	<label>Nama</label>
      	<input type="text" value="Nama" disabled>
      	<label>Jenis Kelamin</label>
      	<input type="text" value="Laki-Laki" disabled>
      	<label>Email</label>
      	<input type="text" value="email@email.com" disabled>
      	<label>Status Pendidikan</label>
      	<input type="text" value="SMPN abcd" disabled>
      	<label>Tanggal Lahir</label>
      	<input type="text" value="10 - 10 - 2004" disabled>
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
        <h4 class="modal-title">Hapus Member ?</h4>
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