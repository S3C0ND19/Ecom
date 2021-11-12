<?php include('config/db.php'); ?>
<?php include('includes/header.php'); ?>
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
            <button type="button" class="btn btn-primary btnAdd">Add Product</button>            
        </div>
        <div class="table-responsive">
            <table class=" myFormat table table-striped table-sm">
            <thead>
                <tr>
                <th  style="font-size:1.5rem">Id</th>
                <th  style="font-size:1.5rem">Name</th>
                <th  style="font-size:1.5rem">Category</th>
                <th  style="font-size:1.5rem">Price</th>
                <th  style="font-size:1.5rem">Image</th>
                <th  style="font-size:1.5rem">Quantity</th>
                <th  style="font-size:1.5rem">Brand</th>
                <th  style="font-size:1.5rem">Sale</th>
                <th  style="font-size:1.5rem">Date</th>
                <!-- <th>Category</th> -->
                <!-- <th>Brand</th> -->
                <th style="font-size:1.5rem">Action</th>
                </tr>
            </thead>
            <tbody id="product_list">
                <?php
                    $query = "SELECT * FROM product";
                    $result_tasks = mysqli_query($conn, $query);    
                    while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                <tr>
                    <td style="font-size:1.5rem"><?php echo $row['prd_id']; ?></td>
                    <td style="font-size:1.5rem"><?php echo $row['prd_name']; ?></td>
                    <td style="font-size:1.5rem"><?php echo $row['prd_category']; ?></td>
                    <td style="font-size:1.5rem"><?php echo $row['prd_price']; ?></td>
                    <td>
                        <img src="<?php echo "./upload/" .$row['prd_image'];?>" width="100px" height="100px" alt=""/>     
                    </td>
                    <td style="font-size:1.5rem"><?php echo $row['prd_quantity']; ?></td>
                    <td style="font-size:1.5rem"><?php echo $row['prd_brand']; ?></td>
                    <td style="font-size:1.5rem" ><?php echo $row['prd_sale']; ?></td>
                    <td style="font-size:1.5rem"><?php echo $row['prd_date']; ?></td>
                    <td>
                        <a style="font-size:1.5rem" href="edit_product.php?id=<?php echo $row['prd_id']?>" class="btn btn-sm btn-info">
                            <i class="fas fa-marker"></i>
                        </a>
                        <a style="font-size:1.5rem" href="delete_product.php?id=<?php echo $row['prd_id']?>" class="btn btn-sm btn-danger">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
          <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
    <!-- Add -->
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
                                        <select id="brand-select" name="sltBrand">
                                            <option value="blast" selected>Blast</option>
                                            <option value="minimal">Minimal</option>
                                            <option value="money">Money</option>
                                            <option value="bestsound">Best Sound</option>
                                            <option value="redbox">RedBox</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                        <label class="product__header">Category Name</label>
                                        <select id="category-select" name="sltCategory"> 
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
                                    <input type="text" class="product__input" name="productDescription" required placeholder="Enter Product Description" id="product__description-input">
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