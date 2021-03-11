<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">
			Sửa thông tin
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
				<form action="index.php?controller=users/edit&act=edit&id=<?php echo $value["id"] ;?>" method="post">
					<table class="table" style="margin-top: 50px">
					<tr>
						<td width="200px">
							<b>Tên người dùng</b>
						</td>
						<td>
							<input type="text" name="name" placeholder="Tên người dùng" class="form-control">
						</td>
					</tr>
					<tr>
						<td><b>Tên đăng nhập</b></td>
						<td>
							<input type="text" name="username" value="<?php echo $value["username"] ?>" class="form-control " readonly>
						</td>
					</tr>
					<tr>
						<td><b>Mật khẩu</b></td>
						<td>
							<input type="password" name="password1" placeholder="Mật khẩu" class="form-control">
						</td>
					</tr>
					<tr>
						<td><b>Chức vụ</b></td>
						<td>
							<input type="text" name="position" placeholder="Chức vụ" class="form-control">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" value="Cập nhật" name="edit" class="btn btn-primary">
							<a href="index.php?controller=users/list" class="btn btn-success">Quay Lại</a>
						</td>
					</tr>
				</table>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<img src="../public/img/icons8-edit-500.png">
	</div>
</div>