<?php
include('config/db.php');
$name = '';
$brand = '';
$category = '';
$description = '';
$price = '';
$new_image='';
$quantity = '';
$date = '';
$sale = '';
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM product WHERE prd_id = $id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $name = $row['prd_name'];
    $description = $row['prd_description'];
    $price = $row['prd_price'];
    $old_image = $row['prd_image'];
    $quantity = $row['prd_quantity'];
    $date = $row['prd_date'];
    $sale = $row['prd_sale'];
  }
}
if (isset($_POST['btnEdit'])) {
  $id = $_GET['id'];
  $name = $_POST['productName'];
  $brand = $_POST['sltBrand'];
  $category = $_POST['sltCategory'];
  $description = $_POST['productDescription'];
  $price = $_POST['productPrice'];
  $new_image = $_FILES['productImage']['name'];
  $quantity = $_POST['productQuantity'];
  $date = date('j M, Y');
  $sale = $_POST['productSale'];
  if ($new_image != ''){
    $update_filename = $_FILES['productImage']['name'];
  }
  else{
    $update_filename = $old_image;
  }
  $query = "UPDATE product set prd_name='$name', prd_category='$category',prd_price='$price', prd_image='$update_filename', prd_description	='$description', 
  prd_quantity='$quantity',prd_brand='$brand',prd_date='$date' ,prd_sale='$sale' WHERE prd_id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Product Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: product.php');
}
?>
<?php include('includes/header.php'); ?>
  <div class="content">
      <?php include('includes/navbar.php'); ?>
      <div class="modal-main">
        <div class="content__header">
          <h3 class="content__title">Edit Product</h3>
            <div class="cotent__header-nav">
              <a href="index.php" class="content__header-nav-link">Dashboard / Product</a> 
            </div>
        </div>
        <div class="modal-body">
          <form action="edit_product.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-content-edit">                   
                  <div class="form-add-input">
                    <div class="form-add-heading">
                      <div class="form-add-description">
                        <span class="form-add-description-number">01</span>
                        <div class="form-add-description-details">
                          <p>Billing Info</p>
                          <span>Fill all infomation below</span> 
                        </div>
                      </div>
                      <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="form-add-content">
                      <div class="form-group">
                          <label for="product__name-input" class="product__header">Product Name</label>
                          <input type="text" class="form-control product__input" name="productName" required placeholder="Enter Product Name" id="product__name-input" value="<?php echo $name; ?>" />
                      </div>  
                      <div class="form-add-wrapper">
                        <div class="form-group form-add-select-child">
                            <label class="product__header">Brand</label>
                            <select class="form-select" id="brand-select" name="sltBrand">
                                <option value="" selected>--Please choose an option--</option>
                                <option value="Blast">Blast</option>
                                <option value="Minimal">Minimal</option>
                                <option value="Money">Money</option>
                                <option value="Best Sound">Best Sound</option>
                                <option value="RedBox">RedBox</option>
                            </select>
                        </div>
                        <div class="form-group form-add-select-child">
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
                      </div>                    
                      <div class="form-add-wrapper">
                        <div class="form-group form-add-input-child ">
                            <label class="product__header">Price</label>
                            <input type="text" class="form-control product__input" name="productPrice" required placeholder="Enter Product Price" id="product__price-input" />                      
                        </div>
                        <div class="form-group form-add-input-child">
                            <label class="product__header" for="product__quantity-input">Quantity</label>
                            <input type="number" class="form-control product__input" name="productQuantity" required placeholder="Enter Product Quantity" id="product__quantity-input" />
                        </div>
                        <div class="form-group form-add-input-child">
                            <label class="product__header">Discount</label>
                            <input type="text" class="form-control product__input" name="productSale" placeholder="Discount..." id="product__sale-input" />
                        </div>
                      </div>
                      <div class="form-group">
                          <label class="product__header" for="product__description-input">Product Description</label>
                          <textarea style="height:100px;" type="text" class="form-control product__input" name="productDescription"  id="product__description-input"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-add-files">
                    <div class="form-add-heading">
                      <div class="form-add-description">
                        <span class="form-add-description-number">02</span>
                        <div class="form-add-description-details">
                          <p>Product Image</p>
                          <span>Fill all infomation below</span> 
                        </div>
                      </div>
                      <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="form-add-content">
                      <div class="form-group">
                        <label  class="product__header">Product Image 1</label>
                        <input multiple type="file" name="productImage" autocomplete="off"  class="product__input product__input-img" />
                       
                          <!-- <div class="dropzone" id="dropzoneFrom">
                            <div class="dropzone-message" tabindex="0" >
                               
                                <div class="dropzone-message-text">
                                  <div class="mb-3">
                                  <i class=" display-4 text-muted fas fa-cloud-upload-alt"></i>
                                  </div>
                                  <h4>Drop files here or click to upload.</h4>
                                </div>
                            </div>
                          </div> -->
                      </div>
                      <div class="form-group">
                        <label  class="product__header">Product Image 2</label>
                        <input multiple type="file" name="productImage2" autocomplete="off"  class="product__input product__input-img" />
                      </div>
                    </div>   
                  </div>              
                  <div class="button-edit">                      
                        <button class="btn btn-danger edit" name="btnCancel">
                          <i class="fas fa-times"></i>
                          Cancel
                        </button>
                        <button type="submit"class="btn btn-success edit" name="btncreate" >
                            <i class="far fa-save">
                              </i>
                            Save
                        </button>
                    </div>
            </div>      
          </form>
        </div>
      </div>
  </div>
<?php include('includes/footer.php'); ?>