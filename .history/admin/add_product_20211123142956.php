<?php

include('./config/db.php');

if (isset($_POST['btncreate'])) {
  $name = $_POST['productName'];
  $status = $_POST['sltStatus'];
  $price = $_POST['productPrice'];
  $old_product = $_POST['productOldPrice'];
  $new_image = $_FILES['productImage']['name'];
  $new_image2 = $_FILES['productImage2']['name'];
  $description = $_POST['productDescription'];
  $quantity = $_POST['productQuantity'];
  $brand = $_POST['sltBrand'];
  $date = date('j M, Y');
  $sale = $_POST['productSale'];
  $category = $_POST['sltCategory'];
    $query = "INSERT INTO product (prd_name,prd_status,prd_price, prd_price_old, prd_image, prd_image_2, prd_description, prd_quantity, prd_brand, prd_date, prd_sale, prd_cat_id) VALUES ('$name','$status','$price','$old_product' ,'$new_image','$new_image2', '$description', '$quantity','$brand', '$date', '$sale' , '$category')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }
    $_SESSION['message'] = 'Update Product Success';
    $_SESSION['message_type'] = 'success';
    header('Location: product.php');
  }
  if (isset($_POST['btnCancel'])){
    header('Location: product.php');
  }
  ?>
?>
<?php include('includes/header.php'); ?>
  <div class="content">
    <?php include('includes/navbar.php'); ?>
    <div class="modal-main">
        <div class="content__header">
                <h3 class="content__title">Add Product</h3>
                <div class="cotent__header-nav">
                    <a href="index.php" class="content__header-nav-link">Dashboard / Product</a> 
                </div>
        </div>
        <div class="modal-body">
            <form action="add_product.php" class="form-add-product" method="POST" enctype="multipart/form-data">
                <div class="form-content-add">                   
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
                          <input type="text" class="form-control product__input" name="productName" placeholder="Enter Product Name" id="product__name-input" />
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
                                <option value="1">Armchairs</option>
                                <option value="2">Bath Room</option>
                                <option value="3">Dining Chairs</option>
                                <option value="4">Dining Tables</option>
                                <option value="5">Lightings</option>
                                <option value="6">Living Room</option>
                                <option value="7">Office</option>
                                <option value="8">Seating</option>
                                <option value="9">Sofas</option>
                                <option value="10">Special</option>
                                <option value="11">Table</option>
                            </select>
                        </div>
                      </div>                    
                      <div class="form-add-wrapper">
                        <div class="form-group form-add-select-child ">
                            <label class="product__header">Old Price</label>
                            <input type="text" class="form-control product__input" name="productOldPrice" placeholder="Old Price"/>                      
                        </div> 
                        <div class="form-group form-add-select-child ">
                            <label class="product__header">New Price</label>
                            <input type="text" class="form-control product__input" name="productPrice" placeholder=" New Price"/>                      
                        </div> 
                      </div>
                      <div class="form-add-wrapper">
                        <div class="form-group form-add-input-child">
                            <label class="product__header">Status</label>
                            <select class="form-select" name="sltStatus">
                                <option value="" selected>--Please choose an option--</option>
                                <option value="1">Hiện</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>                                        
                        <div class="form-group form-add-input-child">
                            <label class="product__header">Quantity</label>
                            <input type="number" class="form-control product__input" name="productQuantity" placeholder="Enter Product Quantity" />
                        </div>
                        <div class="form-group form-add-input-child">
                            <label class="product__header">Discount</label>
                            <input type="text" class="form-control product__input" name="productSale" placeholder="Discount..."  />
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
                        <label  class="product__header product__header-img">Product Image 1</label>
                        <label class="dropzone" for="input-img" id="dropzoneFrom">
                            <div class="dropzone-message-text">
                              <div class="mb-3">
                                <i class=" display-4 text-muted fas fa-cloud-upload-alt"></i>
                              </div>
                                <h4>Drop files here or click to upload.</h4>
                                <input multiple type="file" hidden name="productImage" autocomplete="off"  id="input-img"class="product__input product__input-img dropzone-img" />
                            </div>
                        </label>
                      </div>
                      <div class="form-group">
                        <label  class="product__header">Product Image 2</label>
                        <label class="dropzone" for="input-img" id="dropzoneFrom">
                            <div class="dropzone-message-text">
                              <div class="mb-3">
                                <i class=" display-4 text-muted fas fa-cloud-upload-alt"></i>
                              </div>
                                <h4>Drop files here or click to upload.</h4>
                                <input multiple type="file" hidden name="productImage2" autocomplete="off"  id="input-img"class="product__input product__input-img dropzone-img" />
                            </div>
                        </label>
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
