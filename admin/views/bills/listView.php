<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">
			Danh sách hóa đơn
		</h2>
	</div>
</div>

<table class="table table-bordered table-hover">
	<tr>
		<td width="50px;">STT</td>
		<td width="200px;">Thời gian mua hàng</td>
		<td>Tổng số tiền mua</td>
		<td>Mã khách hàng</td>
		<td>Mã nhân viên</td>
	</tr>
	<?php
		$stt=0;
		foreach ($data as $value) {
		 	$stt++;
	 ?>
	 <tr>
	 	<td style="text-align: center;"><?php echo $stt; ?></td>
	 	<td><?php echo $value["time"] ?></td>
	 	<td><?php echo $value["totalAmount"] ?></td>
	 	<td><?php echo $value["idClient"] ?></td>
	 	<td><?php echo $value["idStaff"] ?></td>
	
	 </tr>
	<?php } ?>
</table>
<a href="index.php?controller=bills/list&act=sort" class="btn btn-primary">
	Sắp xếp
</a>