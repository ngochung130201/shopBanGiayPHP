<?php
include './include/Header.php'
?>
<div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Sản phẩm</strong>
                                <a href="addProduct.php" type="button" class="btn text-white btn-success">Thêm</a>
                            </div>
                            <div class="table-stats order-table ov-h">                      
                              <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial"></th>
                                            <th class="avatar">Hình ảnh</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá Cũ</th>                                 
                                            <th>Giá mới</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                       include './db_product.php';
                                       $sql = "SELECT * FROM `product`";
                                       $result = mysqli_query($conn, $sql);
                                       while ($row = mysqli_fetch_assoc($result)){
                                        ?>
                                        <tr>
                                            <td>
                                            <input type="checkbox" >
                                            </td>
                                        <td>  
                                        <img src="
                                        <?php
                                        if($row['Image']==null){
                                            echo "./images/noimage.jpg";
                                        }
                                        else {  
                                            echo "./images/product/" . $row['Image'] ;
                                        }              
                                        ?>
                                        ">
                                        </td>
                                        <td><?php echo $row['Title'] ?></td>
                                        <td><?php echo $row['Price'] ?></td>
                                        <td><?php echo $row['PriceNew'] ?></td>
                                            <td>
                                            <a  href="editProduct.php?ID=<?php echo $row['ID']?>" class="btn text-white btn-info" >
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        
                                            <a  href="deleteProduct.php?ID=<?php echo $row['ID']?>"  class="btn text-white btn-danger" >
                                            <i class="fa fa-trash" aria-hidden="true"></i>    
                                            </a>
                                            </td>
                                        </tr>

                                        <?php
                                       }
                                       ?>   
                                    </tbody>
                                </table>                      
                            </div> 
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>