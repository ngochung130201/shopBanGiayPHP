<?php 
include './include/Header.php';
?>
<div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tài khoản</strong>
                                <a href="addAccout.php" type="button" class="btn text-white btn-success">Thêm</a>
                            </div>
                            <div class="table-stats order-table ov-h">
                        
                              <table class="table ">
                                    <thead>
                                        <tr>
                                        
                                            <th class="serial"></th>
                                            <th class="avatar">Avatar</th>
                                            <th>Tên tài khoản</th>
                                            <th>Email</th>                                 
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                       include './db_product.php';
                                       $sql = "SELECT * FROM `account`";
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
                                        if($row['Avatar']==null){
                                            echo "./images/noimage.jpg";
                                        }
                                        else {
                                            
                                            echo "./images/Accout/" . $row['Avatar'] ;
                                        }
                                        
                                        ?>
                                        
                                        
                                        ">
                                        </td>
                                        <td><?php echo $row['UseName'] ?></td>
                                        <td><?php echo $row['Email'] ?></td>
                                            <td>
                                            <a  href="editAccount.php?ID=<?php echo $row['ID']?>" class="btn text-white btn-info" >
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        
                                            <a  href="deleteAccount.php?ID=<?php echo $row['ID']?>"  class="btn text-white btn-danger" >
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