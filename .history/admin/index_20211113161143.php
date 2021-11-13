<?php include('includes/header.php'); ?>
<div class="content">
        <nav class="navbar-admin">
          <div class="menu">
            <p class="navbar__menu-heading">MENU</p>
            <ul class="navbar__menu">
            <li class="navbar__menu-item">
              <div class="navbar__menu-item-wrapper">
                <i class="navbar__menu-icon fas fa-user-tie active"></i>
                <a href="#" class="navbar__menu-link active">Dashboard</a>
              </div>
              <i class=" navbar__menu-icon fas fa-caret-right"></i>
            </li>
            <li class="navbar__menu-item">
              <div class="navbar__menu-item-wrapper">
                <i class=" navbar__menu-icon fas fa-scroll"></i>
                <a href="category.php" class="navbar__menu-link">Quản lý danh mục</a>
              </div>
              <i class=" navbar__menu-icon fas fa-caret-right"></i>
            </li>
            <li class="navbar__menu-item">
              <div class="navbar__menu-item-wrapper">
                <i class=" navbar__menu-icon fas fa-couch"></i>
                <a href="product.php" class="navbar__menu-link">Quản lí sản phẩm</a>
              </div>             
              <i class=" navbar__menu-icon fas fa-caret-right"></i>
            </li>
            <li class="navbar__menu-item">
              <div class="navbar__menu-item-wrapper">
                <i class=" navbar__menu-icon fas fa-couch"></i>
                <a href="brand.php" class="navbar__menu-link">Quản lí thương hiệu</a>
              </div>             
              <i class=" navbar__menu-icon fas fa-caret-right"></i>
            </li>
            <li class="navbar__menu-item">
              <div class="navbar__menu-item-wrapper">
                <i class=" navbar__menu-icon  fab fa-wpforms"></i>
                <a href="#" class="navbar__menu-link">Quản lí đơn đặt hàng</a>
              </div>              
              <i class=" navbar__menu-icon fas fa-caret-right"></i>
            </li>
            <li class="navbar__menu-item">
              <div class="navbar__menu-item-wrapper">
                <i class="navbar__menu-icon fas fa-user-tie"></i>
                <a href="#" class="navbar__menu-link">Quản lí User | Admin</a>
              </div>           
              <i class=" navbar__menu-icon fas fa-caret-right"></i>
            </li>
            </ul>      
          </div> 
          <div class="features">
            <p class="navbar__menu-heading">MENU</p>
            <ul class="navbar__menu">
            <li class="navbar__menu-item">
              <div class="navbar__menu-item-wrapper">
                <i class="navbar__menu-icon fas fa-user-tie"></i>
                <a href="#" class="navbar__menu-link">Dashboard</a>
              </div>
              <i class=" navbar__menu-icon fas fa-caret-right"></i>
            </li>
            <li class="navbar__menu-item">
              <div class="navbar__menu-item-wrapper">
                <i class=" navbar__menu-icon fas fa-scroll"></i>
                <a href="#" class="navbar__menu-link">Quản lý danh mục</a>
              </div>
              <i class=" navbar__menu-icon fas fa-caret-right"></i>
            </li>
            <li class="navbar__menu-item">
              <div class="navbar__menu-item-wrapper">
                <i class=" navbar__menu-icon fas fa-couch"></i>
                <a href="#" class="navbar__menu-link">Quản lí sản phẩm</a>
              </div>             
              <i class=" navbar__menu-icon fas fa-caret-right"></i>
            </li>
            <li class="navbar__menu-item">
              <div class="navbar__menu-item-wrapper">
                <i class=" navbar__menu-icon  fab fa-wpforms"></i>
                <a href="#" class="navbar__menu-link">Forms</a>
              </div>              
              <i class=" navbar__menu-icon fas fa-caret-right"></i>
            </li>
            <li class="navbar__menu-item">
              <div class="navbar__menu-item-wrapper">
                <i class="navbar__menu-icon fas fa-user-tie"></i>
                <a href="#" class="navbar__menu-link">Tables</a>
              </div>           
              <i class=" navbar__menu-icon fas fa-caret-right"></i>
            </li>
            </ul>      
          </div> 
        </nav>
        <div class="content-main">
            <?php if (isset($_SESSION['message'])) { ?>
            <div style="font-size:1.5rem; font-weight: 500;" class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset(); } ?>
            <div class="content__header">
                <h3 class="content__title">Product List</h3>
                <button type="button" class="btnAdd">Add Product</button>            
            </div>
            <div class="content__table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="row" style="font-size:1.5rem; padding-bottom:20px; font-weight:500;">Image</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Product Name</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Price</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Category</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Sale</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Date</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM product";
                                $result_tasks = mysqli_query($conn, $query);    
                                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                            <tr style="border-bottom: 1px solid #dee2e6; ">
                                <td>
                                    <img src="<?php echo "./upload/" .$row['prd_image'];?>" width="60px" height="60px" alt="" style="transform: translateY(15px);">     
                                </td>
                                <td style="padding-bottom: 25px;font-size:1.5rem;"><?php echo $row['prd_name']; ?></td>
                                <td style="font-size:1.5rem"><?php echo $row['prd_price']; ?></td>
                                <td style="font-size:1.5rem"><?php echo $row['prd_category']; ?></td>
                                <td style="font-size:1.5rem" ><?php echo $row['prd_sale']; ?></td>
                                <td style="font-size:1.5rem"><?php echo $row['prd_date']; ?></td>
                                <td>
                                    <a style="font-size:1.5rem; margin-right:20px;" href="edit_product.php?id=<?php echo $row['prd_id']?>" class="btn btn-sm ">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a style="font-size:1.5rem" href="delete_product.php?id=<?php echo $row['prd_id']?>" class="btn btn-sm">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>