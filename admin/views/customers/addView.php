<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">
			Thêm khách hàng
		</h2>
	</div>
</div>
<div class="row">
	<div class="col-md-7">
		<div class="panel panel-primary">
			<div class="panel-heading">	
			</div>
			<div class="panel-body">
			<?php if(isset($_GET["err"]) && $_GET["err"]=="false"){?>
				<div class="alert alert-danger">
					Nhập lại mật khẩu không đúng
				</div>
			<?php } ?>
				<form action="index.php?controller=customers/add&act=add" method="post">
					<table class="table" style="margin-top: 50px">
					<tr>
						<td width="200px">
							<b>Tên khách hàng</b>
						</td>
						<td>
							<input type="text" name="name" placeholder="Tên khách hàng" class="form-control">
						</td>
					</tr>
					<tr>
						<td><b>Ngày sinh</b></td>
						<td>
							<input type="text" name="dob" placeholder="Ngày sinh" class="form-control">
						</td>
					</tr>
					<tr>
						<td><b>Địa chỉ</b></td>
						<td>
							<input type="text" name="address" placeholder="Địa chỉ" class="form-control">
						</td>
					</tr>
					<tr>
						<td><b>Số điện thoại</b></td>
						<td>
							<input type="text" name="phoneNumber" placeholder="Số điện thoại" class="form-control">
						</td>
					</tr>
					<tr>
						<td><b>Email</b></td>
						<td>
							<input type="text" name="email" placeholder="Email" class="form-control">
						</td>
					</tr>
					<tr>
						<td><b>Loại</b></td>
						<td>
							<input type="text" name="type" placeholder="Loại khách hàng" class="form-control">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" value="Thêm" name="add" class="btn btn-primary">
							<a href="index.php?controller=customers/list" class="btn btn-success">Quay Lại</a>
						</td>
					</tr>
				</table>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<img src="../public/img/kisspng-computer-icons-clip-art-icon-design-user-portable-add-user-5b9792dfd05d05.4520688315366601918535.png">
	</div>
</div>