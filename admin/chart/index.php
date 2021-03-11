<?php 

    require('db_connect.php');

    $msg = '';
    $msgClass = '';
    
    if(isset($_POST['submit'])){
        $year        = $_POST['year'];
        $domestic     = $_POST['domestic'];
        $foreigner           = $_POST['foreigner'];
        $totalcustomer           = $_POST['totalcustomer'];

        $sql = "INSERT INTO revenue(year,domestic,foreigner,totalcustomer) VALUES('$year', '$domestic', '$foreigner', '$totalcustomer')";
        $result = mysqli_query($conn, $sql);
        if($result) {
            $msg = "Thêm dữ liệu thành công";
            $msgClass="alert-success";
        }
        else {
            $msg = "Dữ liệu chưa được thêm";
            $msgClass="alert-danger";
        }
    }
 ?>


 <?php 
    // Delete Student
if (isset($_POST['del_data'])) {
	$query="DELETE FROM revenue WHERE id=".$_POST['id'];
	$result = mysqli_query($conn, $query);
	if($result){
        $msg= "Xóa dữ liệu thành công";
        $msgClass="alert-success";
	}
	else {
        $msg= "Xóa thất bại";
        $msgClass="alert-danger";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- Data Tables -->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css">

      <!-- Modal CSS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
   
    <!-- Title  -->
    <title>Biểu đồ</title>   
 </head>

  <body>
    <h2 style = "text-align: center; padding: 20px; background-color: #333; color: #fff;">Thông tin về lượng khách hàng</h2>
    <div class = "container" style = "margin-top: 40px; padding: 30px;">
    <?php
     if (isset($msg)) { ?>
        <div class="form-group">
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?>
            </div>
        </div>
        <?php
        }
	?>
  
     <button type="button" class="btn btn-info btn-sm mb-5" style="float:right" data-toggle="modal" data-target="#myModal">Thêm thông tin</button>

   

    <table id="example" class="display responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>STT</th>
                <th>Năm</th>
                <th>Khách trong nước</th>
                <th>Khách nước ngoài</th>
                <th>Tổng lượng khách</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>


<?php
    require 'db_connect.php';
    $sql = "SELECT * FROM revenue";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $i = 0;
        while($row = $result->fetch_assoc()) {
             $year        = $row['year'];
        $domestic     = $row['domestic'];
        $foreigner         = $row['foreigner'];
        $totalcustomer      = $row['totalcustomer'];
?>

            <tr>
                <td><?php $i++; echo $i; ?></td>
                <td><?php echo $year; ?></td>
                <td><?php echo $domestic; ?></td>
                <td><?php echo $foreigner; ?></td>
                <td><?php echo $totalcustomer; ?></td>
                <td>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <a href="index.php?id=<?php echo $id; ?>"><button class="btn btn-danger btn-sm" name="del_data"><i class="fas fa-trash"></i></button></a>
                    </form>
                </td>
             <?php }  ?>
            </tr>
         <?php } ?>  
     </tbody>
  </table>



  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <input type="text" name="year" class="form-control" placeholder="Năm">
            </div>
          
              <div class="form-group">
                <input type="text" name="purchase" class="form-control" placeholder="Khách trong nước ">
            </div>

              <div class="form-group">
                <input type="text" name="sale" class="form-control" placeholder="Khách nước ngoài">
            </div>

              <div class="form-group">
                <input type="text" name="lợi nhuận" class="form-control" placeholder="Tổng lu">
            </div>

            <input type="submit" value="Submit" name="submit" class="btn btn-success btn-sm">
           </form> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>



    <button class = "btn btn-primary btn-sm"><a href = "chart.php" style = "text-decoration: none; color: #fff;"><i class="fas fa-chart-bar"></i> Biểu đồ doanh thu</a></button>

    <a href="http://localhost/projectphp/admin/" class="btn btn-warning btn-sm">Trở về</a>
    <script src="https://code.jquery.com/jquery-3.4.0.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <!-- Style CSS -->
    </body>
</html>