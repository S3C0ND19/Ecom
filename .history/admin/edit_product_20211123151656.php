<?php
include('config/db.php');
$name = '';
$status = '';
$brand = '';
$category = '';
$description = '';
$price = '';
$new_image='';
$new_image2='';
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
    $status = $row['prd_status'];
    $brand = $row['prd_brand'];
    $category =$row['prd_cat_id'];
    $description = $row['prd_description'];
    $price = $row['prd_price'];
    $old_image = $row['prd_image'];
    $old_image2 = $row['prd_image_2'];
    $quantity = $row['prd_quantity'];
    $date = $row['prd_date'];
    $sale = $row['prd_sale'];
  }
}
if (isset($_POST['btnEdit'])) {
  $id = $_GET['id'];
  $name = $_POST['productName'];
  $status = $_POST['sltStatus'];
  $brand = $_POST['sltBrand'];
  $category = $_POST['sltCategory'];
  $description = $_POST['productDescription'];
  $price = $_POST['productPrice'];
  $new_image = $_FILES['productImage']['name'];
  $new_image2 = $_FILES['productImage2']['name'];
  $quantity = $_POST['productQuantity'];
  $date = date('j M, Y');
  $sale = $_POST['productSale'];
  if ($new_image != '' ){
    $update_filename = $_FILES['productImage']['name']; 
  }
  else{
    $update_filename = $old_image;
  }
  if ($new_image2 != ''){
    $update_filename2 = $_FILES['productImage2']['name'];
  }
  else{ 
    $update_filename2 = $old_image2;
  }
  $query = "UPDATE product set prd_name='$name', prd_status='$status',prd_price='$price', prd_image='$update_filename', prd_image_2='$update_filename2', prd_description	='$description', 
  prd_quantity='$quantity',prd_brand='$brand',prd_date='$date' ,prd_sale='$sale', prd_cat_id='$category' WHERE prd_id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Product Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: product.php');
}
if (isset($_POST['btnCancel'])){
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
                        <div class="form-group form-add-input-child">
                            <label class="product__header">Status</label>
                            <select class="form-select" name="sltStatus">
                                <option value="" selected>--Please choose an option--</option>
                                <option value="1">Hiện</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div> 
                        <div class="form-group form-add-input-child">
                            <label class="product__header">Brand</label>
                            <select class="form-select" id="brand-select" name="sltBrand">
                                <option value="<?php echo $brand; ?>"selected><?php echo $brand; ?></option>     
                                <option value="Blast">Blast</option>
                                <option value="Minimal">Minimal</option>
                                <option value="Money">Money</option>
                                <option value="Best Sound">Best Sound</option>
                                <option value="RedBox">RedBox</option>
                            </select>
                        </div>
                        <div class="form-group form-add-input-child">
                            <label class="product__header">Category</label>
                            <select class="form-select" id="category-select" name="sltCategory">
                                <option value="<?php echo $category; ?>"selected><?php 
                                    switch ($row['prd_cat_id'])
                                    {
                                        case 1 :
                                            echo 'Armchairs';
                                            break;
                                        case 2:
                                            echo 'Bath Room';
                                            break;
                                        case 3:
                                            echo 'Dining Chairs';
                                            break;
                                        case 4:
                                            echo 'Dining Tables';
                                            break;
                                        case 5 :
                                            echo 'Lightings';
                                            break;
                                           case 1 :
                                            echo 'Armchairs';
                                            break;
                                        case 2:
                                            echo 'Bath Room';
                                            break;
                                        case 3:
                                            echo 'Dining Chairs';
                                            break;
                                        case 4:
                                            echo 'Dining Tables';
                                            break;
                                        case 5 :
                                            echo 'Lightings';
                                            break;
                                        case 6 :
                                            echo 'Living Room';
                                            break;
                                        case 7:
                                            echo 'Office';
                                            break;
                                        case 8:
                                            echo 'Seating';
                                            break;
                                        case 9:
                                            echo 'Sofas';
                                            break;
                                        case 10 :
                                            echo 'Special';
                                            break;
                                        case 11 :
                                            echo 'Table';
                                            break; 
                                        default:
                                            echo 'Không tìm thấy';
                                            break;
                                    }                               
                                ?></option>  
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
                        <div class="form-group form-add-input-child ">
                            <label class="product__header">Price</label>
                            <input type="text" class="form-control product__input" name="productPrice" required placeholder="Enter Product Price" id="product__price-input" value="<?php echo $price; ?>"/>                      
                        </div>
                        <div class="form-group form-add-input-child">
                            <label class="product__header" for="product__quantity-input">Quantity</label>
                            <input type="number" class="form-control product__input" name="productQuantity" required placeholder="Enter Product Quantity" id="product__quantity-input" value="<?php echo $quantity; ?>"/>
                        </div>
                        <div class="form-group form-add-input-child">
                            <label class="product__header">Discount</label>
                            <input type="text" class="form-control product__input" name="productSale" placeholder="Discount..." id="product__sale-input" value="<?php echo $sale; ?>"/>
                        </div>
                      </div>
                      <div class="form-group">
                          <label class="product__header" for="product__description-input">Product Description</label>
                          <textarea style="height:100px;" type="text" class="form-control product__input" name="productDescription"  id="product__description-input"><?php echo $description; ?></textarea>
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
                      <div class="form-dropzone-img">
                          <div class="form-group">
                            <label  class="product__header product__header-img">Product Image 1</label>
                            <label class="dropzone" for="input-img" id="dropzoneFrom">
                              <div class="dropzone-message-text">
                                <div class="mb-3">
                                  <i class=" display-4 text-muted fas fa-cloud-upload-alt"></i>
                                </div>
                                  <h4>Click here to upload.</h4>
                                  <input multiple type="file" hidden name="productImage" autocomplete="off"  id="input-img"class="product__input product__input-img dropzone-img" />
                              </div>
                            </label>
                          </div>
                          <div class="form-group">
                            <label  class="product__header">Product Image 2</label>
                            <label class="dropzone" for="input-img2" id="dropzoneFrom2">
                                <div class="dropzone-message-text">
                                  <div class="mb-3">
                                    <i class=" display-4 text-muted fas fa-cloud-upload-alt"></i>
                                  </div>
                                    <h4>Click here to upload.</h4>
                                    <input multiple type="file" hidden name="productImage2" autocomplete="off"  id="input-img2"class="product__input product__input-img dropzone-img2" />
                                </div>
                            </label>
                          </div>
                      </div>   
                    </div>              
                 
            </div>  
            <div class="button-edit">                      
                        <button class="btn btn-danger edit" name="btnCancel">
                          <i class="fas fa-times"></i>
                          Cancel
                        </button>
                        <button type="submit"class="btn btn-success edit" name="btnEdit" >
                            <i class="far fa-save">
                              </i>
                            Save
                        </button>
                  </div>    
          </form>
        </div>
      </div>
  </div>
<?php include('includes/footer.php'); ?>