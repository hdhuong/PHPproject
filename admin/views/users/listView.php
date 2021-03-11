<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">
			Danh sách tài khoản
		</h2>
	</div>
</div>
<table class="table table-bordered table-hover">
	<tr>
		<td width="50px;">STT</td>
		<td width="200px;">Tên</td>
		<td>Tên đăng nhập</td>
		<td>Chức vụ</td>
		<td>Thêm</td>
	</tr>
	<?php
		$stt=0;
		foreach ($data as $value) {
		 	$stt++;
	 ?>
	 <tr>
	 	<td style="text-align: center;"><?php echo $stt; ?></td>
	 	<td><?php echo $value["name"] ?></td>
	 	<td><?php echo $value["username"] ?></td>
	 	<td><?php echo $value["position"] ?></td>
	 	<td>
	 		<a href="index.php?controller=users/edit&id=<?php echo $value["id"] ?>" class="btn btn-success btn-sm">Sửa</a>
	 		<a onclick="window.confirm('Bạn có thực sự muốn xóa ???');" href="index.php?controller=users/list&id=<?php echo $value["id"]; ?>&act=delete" class="btn btn-danger btn-sm">Xóa</a>
	 	</td>
	 </tr>
	<?php } ?>
</table>