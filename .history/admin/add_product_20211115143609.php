<?php

include('./config/db.php');

if (isset($_POST['btncreate'])) {
  $name = $_POST['productName'];
  $brand = $_POST['sltBrand'];
  $category = $_POST['sltCategory'];
  $description = $_POST['productDescription'];
  $price = $_POST['productPrice'];
  $new_image = $_FILES['productImage']['name'];
  $quantity = $_POST['productQuantity'];
  $date = date('j M, Y');
  $sale = $_POST['productSale'];
    $query = "INSERT INTO product (prd_name, prd_category, prd_price, prd_image, prd_description, prd_quantity, prd_brand, prd_date, prd_sale) VALUES ('$name','$category' ,'$price','$new_image', '$description', '$quantity','$brand', '$date', '$sale')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }
    $_SESSION['message'] = 'Update Product Success';
    $_SESSION['message_type'] = 'success';
    header('Location: product.php');
  }
?>
<?php include('includes/header.php'); ?>
  <div class="content">
    <?php include('includes/navbar.php'); ?>
    <div class="modal-main">
        <div class="modal-header">
            <h2 class="modal-title">ADD PRODUCT</h2>
        </div>
        <div class="modal-body">
            <form action="add_product.php" class="form-add-product" method="POST" enctype="multipart/form-data">
                <div class="form-content-add">
                    <div class="form-group">
                        <label for="product__name-input" class="product__header">Product Name</label>
                        <input type="text" class="product__input" name="productName" required placeholder="Enter Product Name" id="product__name-input" />
                    </div>
                    <div class="form-group">
                        <label class="product__header">Brand</label>
                        <select class="form-select" id="brand-select" name="sltBrand">
                            <option value="" selected>--Please choose an option--</option>
                            <option value="blast">Blast</option>
                            <option value="minimal">Minimal</option>
                            <option value="money">Money</option>
                            <option value="bestsound">Best Sound</option>
                            <option value="redbox">RedBox</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="product__header">Category</label>
                        <select class="form-select" id="category-select" name="sltCategory">
                            <option value="" selected>--Please choose an option--</option>
                            <option value="Armchairs">Armchairs</option>
                            <option value="Bath Room">Bath Room</option>
                            <option value="Dining Chairs">Dining Chairs</option>
                            <option value="Dining Tables">Dining Tables</option>
                            <option value="Lightings">Lightings</option>
                            <option value="Living Room">Living Room</option>
                            <option value="Office">Office</option>
                            <option value="Seating">Seating</option>
                            <option value="Sofas">Sofas</option>
                            <option value="Special">Special</option>
                            <option value="Table">Table</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="product__header" for="product__description-input">Description</label>
                        <textarea type="text" class="product__input" name="productDescription" placeholder="Enter Product Description" id="product__description-input"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="product__header">Price</label>
                        <input type="text" class="product__input" name="productPrice" required placeholder="Enter Product Price" id="product__price-input" />
                    </div>
                    <div class="form-group">
                        <label class="product__header" for="product__input-img">Image <small>(format: jpg, jpeg, png)</small></label>
                        <input type="file" name="productImage" class="product__input product__input-img" />
                        <input type="hidden" name="productImage_old" class="product__input product__input-img" />
                    </div>
                    <div class="form-group">
                        <label class="product__header" for="product__quantity-input">Quantity</label>
                        <input type="number" class="product__input" name="productQuantity" required placeholder="Enter Product Quantity" id="product__quantity-input" />
                    </div>
                    <div class="form-group">
                        <label class="product__header">Discount</label>
                        <input type="text" class="product__input" name="productSale" placeholder="Discount..." id="product__sale-input" />
                    </div>
                    <div class="button-create">
                        <input type="submit" name="btncreate" class="btn-create" value="ADD PRODUCT" />
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
<?php include('includes/footer.php'); ?>
