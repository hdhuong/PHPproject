<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">
			Danh sách khách hàng
		</h2>
	</div>
</div>

	<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET" action="">

			
              <input type="text" class="form-control bg-light border-0 small" placeholder="Nội dung tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2" name="keyword">

            
               <input type="submit" value="Tìm kiếm"class="btn btn-primary">
             
              </div>
            </div>
        </form>
          <hr>
<table class="table table-bordered table-hover">
	<tr>
		<td width="50px;">STT</td>
		<td width="200px;">Tên khách hàng</td>
		<td>Ngày sinh</td>
		<td>Địa chỉ</td>
		<td>Số điện thoại</td>
		<td>Loại</td>
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
	 	<td><?php echo $value["dob"] ?></td>
	 	<td><?php echo $value["address"] ?></td>
	 	<td><?php echo $value["phoneNumber"] ?></td>
	 	<td><?php echo $value["type"] ?></td>

	 	<td>
	 		<a href="index.php?controller=customers/edit&id=<?php echo $value["id"] ?>" class="btn btn-success btn-sm">Sửa</a>
	 		<a onclick="window.confirm('Bạn có thực sự muốn xóa ???');" href="index.php?controller=customers/list&id=<?php echo $value["id"]; ?>&act=delete" class="btn btn-danger btn-sm">Xóa</a>
	 	</td>
	 </tr>
	<?php } ?>
</table>