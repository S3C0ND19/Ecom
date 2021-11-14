<?php include('config/db.php'); ?>
<?php include('includes/header.php'); ?>
    <div class="content">
      <?php include('includes/navbar.php'); ?>
        <div class="content-main">
            <?php if (isset($_SESSION['message'])) { ?>
            <div style="font-size:1.5rem; font-weight: 500;" class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']?>
                <button type="button" class="close btn-close" onclick="deleteAlert()"  aria-label="Close"></button>
            </div>
            <?php session_unset(); } ?>
            <div class="content__header">
                <h3 class="content__title">Product</h3>
                <div class="cotent__header-nav">
                    <a href="index.php" class="content__header-nav-link">Dashboard / Product</a> 
                </div>
            </div>
            <div class="content__table">
                <div class="table-responsive">
                    <button type="button" class="btnAdd"> + Add New Product</button>        
                    <table class="table table-hover">                        
                        <thead>
                            <tr>
                                <th scope="row" style="font-size:1.5rem; padding-bottom:20px; font-weight:500;">Image</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Product Name</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Price</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Category</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Discount</th>
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
                                        <span class="iconify" data-icon="uil:pen"></span>
                                    </a>
                                    <a style="font-size:1.5rem" href="delete_product.php?id=<?php echo $row['prd_id']?>" class="btn btn-sm" onclick="return confirm('Are you sure you want to delete this product?');">
                                        <span class="iconify trash" data-icon="uil:trash-alt"></span>
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
                                            <option value="Armchairs" selected>Armchairs</option>
                                            <option value="Bath Room">Bath Room</option>
                                            <option value="Dining Chairs">Dining Chairs</option>
                                            <option value="Dining Tables" >Dining Tables</option>
                                            <option value="Lightings">Lightings</option>
                                            <option value="Living Room">Living Room</option>
                                            <option value="Office">Office</option>
                                            <option value="Seating" >Seating</option>
                                            <option value="Sofas">Sofas</option>
                                            <option value="Special">Special</option>
                                            <option value="Table">Table</option>
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
                                    <label class="product__header">Discount</label>
                                    <input type="text" class="product__input" name="productSale" required placeholder="Discount..." id="product__sale-input">
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