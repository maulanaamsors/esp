<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">    
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.css">    
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

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
				<a href="#"><li class="admin-sidebar"><b><i class="fa fa-tachometer"></i> Dashboard</b></li></a>
				<a href="materi.php"><li class="admin-sidebar"><b><i class="fa fa-book"></i> Materi</b></li></a>
				<a href="latihan.php"><li class="admin-sidebar"><b><i class="fa fa-pencil"></i> Soal</b></li></a>
				<a href="member.php"><li class="admin-sidebar"><b><i class="fa fa-user"></i> Member</b></li></a>
			</ul>
		</div><br>
		<div class="col-sm-10">
			<div class="col-sm-4">
				<div class="well" style="background-color: #1565C0">
					<i class="fa fa-users fa-5x" aria-hidden="true"></i>
					<span class="fa-3x pull-right" aria-hidden="true">5</span><br><br>
					<b>Online Members</b>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="well" style="background-color: #4CAF50">
					<i class="fa fa-book fa-5x" aria-hidden="true"></i>
					<span class="fa-3x pull-right" aria-hidden="true">5</span><br><br>
					<b>Jumlah Materi</b>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="well" style="background-color: #FBC02D">
					<i class="fa fa-pencil fa-5x" aria-hidden="true"></i>
					<span class="fa-3x pull-right" aria-hidden="true">5</span><br><br>
					<b>Jumlah Soal</b>
				</div>
			</div>
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<div class="well admin-ranking-header">
					<i class="fa fa-trophy fa-lg" aria-hidden="true"></i>
					<span class="fa-lg" aria-hidden="true">Ranking Terkini</span><br><br>
				</div>
				<div class="well admin-ranking-konten">
					<center>
					<table class="table-striped table-admin" style="color:#000" width="100%">
						<thead>
							<tr>
								<th width="15%" class="text-center">Ranking</th>
								<th width="65%" class="text-center">Nama</th>
								<th width="30%" class="text-center">Score</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">#1</td>
								<td>Nama</td>
								<td>123123</td>
							</tr>
							<tr>
								<td class="text-center">#2</td>
								<td>Nama</td>
								<td>123123</td>
							</tr>
							<tr>
								<td class="text-center">#3</td>
								<td>Nama</td>
								<td>123123</td>
							</tr>
							<tr>
								<td class="text-center">#4</td>
								<td>Nama</td>
								<td>123123</td>
							</tr>
							<tr>
								<td class="text-center">#5</td>
								<td>Nama</td>
								<td>123123</td>
							</tr>
							<!--sampe 5 besar aja, ga usah semua-->
						</tbody>
					</table>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>