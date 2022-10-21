<?php
$conn = mysqli_connect('localhost', 'root', '', 'bangiay') or die ('Không
thể kết nối tới database'.
mysqli_connect_error());
$show="SELECT * FROM product";
$result=mysqli_query($conn,$show);
function ShowName($result){
    while($row=mysqli_fetch_row($result))
    {
        $hinh=$row[2];
        echo "<tr>";
        echo "<td class='serial'>2.</td>";
        echo  "<td class='avatar'><div class='round-img'><a href=''><img class='rounded-circle' src='images/$hinh' alt=''></a></div></td>";
        echo "<td><span class='name'>$row[1]</span> </td>";
        echo "<td> <span class='product'>$row[4]</span> </td>"; 
        echo "<td> <span class='product'>$row[5]</span> </td>";
        echo "<td><span class='count1'>$row[6]</span></td>";
        echo "<td>
                                            <a  href='edit.php' class='btn text-white btn-info'>
                                            <i class='fa fa-pencil-square-o' aria-hidden='true'></i>
                                        </a>
                                        
                                            <a class='btn text-white btn-danger' >
                                            <i class='fa fa-trash' aria-hidden='true'></i>    
                                            </a>
                                            </td>";
        echo "</tr>";
    }
}
function ShowPrice($row){
    echo $row[4];
}
function ShowDate($row){
    echo $row[5];
}
?>
<div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Sản phẩm</strong>
                                <a href="Create.php" type="button" class="btn text-white btn-success">Thêm</a>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">STT</th>
                                            <th class="avatar">Hình ảnh</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá</th>                                 
                                            <th>Ngày tạo</th>
                                            <th>Ngày cập nhật</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <!-- <tr>
                                            <td>
                                            <a  href="edit.php" class="btn text-white btn-info" >
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        
                                            <a class="btn text-white btn-danger" >
                                            <i class="fa fa-trash" aria-hidden="true"></i>    
                                            </a>
                                            </td>
                                        </tr> -->
                                        <?php echo ShowName($result); ?>
                                        <!-- <tr>
                                            <td class="serial">3.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="images/avatar/3.jpg" alt=""></a>
                                                </div>
                                            </td>
                                            <td> #5467 </td>
                                            <td>  <span class="name">Catherine Dixon</span> </td>
                                            <td> <span class="product">SSD</span> </td>
                                            <td><span class="count">250</span></td>
                                            <td>
                                            <a  href="edit.php"  class="btn  text-white btn-info" >
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        
                                            <a class="btn text-white btn-danger" >
                                            <i class="fa fa-trash" aria-hidden="true"></i>    
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial">4.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="images/avatar/4.jpg" alt=""></a>
                                                </div>
                                            </td>
                                            <td> #5466 </td>
                                            <td>  <span class="name">Mary Silva</span> </td>
                                            <td> <span class="product">Magic Mouse</span> </td>
                                            <td><span class="count">250</span></td>
                                            <td>
                                            <a href="edit.php" class="btn text-white btn-info" >
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        
                                            <a class="btn text-white btn-danger" >
                                            <i class="fa fa-trash" aria-hidden="true"></i>    
                                            </a>
                                            </td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
                  
                </div>

            </div>





        </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>