<?php
  ob_start();
 include('config/db.php');
  if (!isset($_SESSION["login"])){
    header("Location: login.php");
  }
?>
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
        <div class="product">
            <?php if (isset($_SESSION['message'])) { ?>
            <div style="font-size:1.5rem; font-weight: 500;" class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset(); } ?>
            <div class="product_header">
                <h3 class="product__title">Product List</h3>
                <button type="button" class="btnAdd">Add Product</button>            
            </div>
            <div class="product__table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="row" style="font-size:1.5rem; padding-bottom:20px; font-weight:500;">Image</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Product Name</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Price</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Quantity</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Sale</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Date</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Action</th>
                            </tr>
                        </thead>
                        <tbody id="product_list">
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
                                <td style="font-size:1.5rem"><?php echo $row['prd_quantity']; ?></td>
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
    <div class="modal modal__add-product js-modal">
        <div class="modal__container js-modal-container">
            <div class="modal-content">
                <div class="modal-close js-modal-close">
                    <i class="modal-close-icon fas fa-times"></i>
                </div>
                <div class="box-content">
                    <div class="form-wrapper active" >
                        <div class="modal-heading">
                            <h2 class="modal-heading__text">ADD PRODUCT</h2>
                        </div>
                        <form action="add_product.php" class="form-add-product" method="POST" enctype="multipart/form-data"> 
                            <div class="form-content">
                                <div class="form-group">
                                    <label for="product__name-input" class="product__header">Product Name</label>
                                    <input type="text" class="product__input" name="productName" required placeholder="Enter Product Name" id="product__name-input">
                                </div>
                                <div class="form-group">
                                        <label class="product__header">Brand Name</label>
                                        <select  class="form-select" id="brand-select" name="sltBrand">
                                            <option value="blast" selected>Blast</option>
                                            <option value="minimal">Minimal</option>
                                            <option value="money">Money</option>
                                            <option value="bestsound">Best Sound</option>
                                            <option value="redbox">RedBox</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                        <label class="product__header">Category Name</label>
                                        <select class="form-select"id="category-select" name="sltCategory"> 
                                            <option value="armchairs" selected>Armchairs</option>
                                            <option value="bath_room">Bath Room</option>
                                            <option value="dining_chairs">Dining Chairs</option>
                                            <option value="dining_tables" >Dining Tables</option>
                                            <option value="lighting">Lightings</option>
                                            <option value="living_room">Living Room</option>
                                            <option value="office">Office</option>
                                            <option value="seating" >Seating</option>
                                            <option value="sofas">Sofas</option>
                                            <option value="special">Special</option>
                                            <option value="table" >Table</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label class="product__header" for="product__description-input">Product Description</label>
                                    <textarea type="text" class="product__input" name="productDescription" required placeholder="Enter Product Description" id="product__description-input"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="product__header">Product Price</label>
                                    <input type="text" class="product__input" name="productPrice" required placeholder="Enter Product Price" id="product__price-input">
                                </div>
                                <div class="form-group">
                                    <label class="product__header" for="product__input-img">Product Image <small>(format: jpg, jpeg, png)</small></label>
                                    <input type="file" name="productImage" class="product__input product__input-img">
                                    <input type="hidden" name="productImage_old" class="product__input product__input-img">
                                </div>
                                <div class="form-group">
                                    <label class="product__header" for="product__quantity-input">Product Quantity</label>
                                    <input type="number" class="product__input" name="productQuantity" required placeholder="Enter Product Quantity" id="product__quantity-input">
                                </div>
                                <div class="form-group">
                                    <label class="product__header">Product Date</label>
                                    <input type="text" class="product__input" name="productDate" required placeholder="Enter Date Product Create" id="product__date-input">
                                </div>
                                <div class="form-group">
                                    <label class="product__header">Product Sale</label>
                                    <input type="text" class="product__input" name="productSale" required placeholder="Enter Product Sale" id="product__sale-input">
                                </div>       
                                <div class="button-create">
                                    <input type="submit" name="btncreate" class="btn-create" value="ADD PRODUCT">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>