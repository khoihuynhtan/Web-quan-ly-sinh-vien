<?php
require_once('dbhelp.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Management</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Quản lý thông tin sinh viên
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Họ và Tên</th>
							<th>Tuổi</th>
							<th>Địa chỉ</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
<?php
$sql = 'select * from student';
	echo '<tr>
			<td>1</td>
			<td>Nguyễn Văn Thuận</td>
			<td>20</td>
			<td>Hà Nội</td>
			<td><button class="btn btn-warning">Them</button></td>
			<td><button class="btn btn-warning">Sua</button></td>
			<td><button class="btn btn-danger">Xoa</button></td>
		</tr>';
	echo '<tr>
	        <td>2</td>
			<td>Huỳnh Tấn Phát</td>
			<td>20</td>
			<td>Bình Định</td>
			<td><button class="btn btn-warning">Them</button></td>
			<td><button class="btn btn-warning">Sua</button></td>
			<td><button class="btn btn-danger">Xoa</button></td>
		</tr>';
	echo '<tr>
	        <td>3</td>
			<td>Nguyễn Tấn Huy</td>
			<td>20</td>
			<td>Tuyên Quang</td>
			<td><button class="btn btn-warning">Them</button></td>
			<td><button class="btn btn-warning">Sua</button></td>
			<td><button class="btn btn-danger">Xoa</button></td>
		</tr>';
	echo '<tr>
	        <td>4</td>
			<td>Huỳnh Tấn Phúc</td>
			<td>20</td>
			<td>Hà Nội</td>
			<td><button class="btn btn-warning">Them</button></td>
			<td><button class="btn btn-warning">Sua</button></td>
			<td><button class="btn btn-danger">Xoa</button></td>
		</tr>';
	echo '<tr>
	        <td>5</td>
			<td>Nguyễn Văn Hữu</td>
			<td>20</td>
			<td>Phú Thọ</td>
			<td><button class="btn btn-warning">Them</button></td>
			<td><button class="btn btn-warning">Sua</button></td>
			<td><button class="btn btn-danger">Xoa</button></td>
		</tr>';
?>						
					</tbody>			
				</table>
			</div>
		</div>
	</div>
</body>
</html>