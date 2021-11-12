<?php
include('config/db.php');
$name = '';
$brand = '';
$category = '';
$description = '';
$price = '';
$new_image = '';
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
    $new_image = $row['prd_image'];
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
  $date = $_POST['productDate'];
  $sale = $_POST['productSale'];
  $query = "UPDATE product set prd_name='$name', prd_category='$category',prd_price='$price', prd_image='$new_image', prd_description	='$description', 
  prd_quantity='$quantity',prd_brand='$brand',prd_date='$date' ,prd_sale='$sale' WHERE prd_id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Product Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: product.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">Edit Product</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="edit_product.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                  <label for="product__name-input" class="product__header">Product Name</label>
                  <input type="text" class="product__input" name="productName" required placeholder="Enter Product Name" id="product__name-input" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="product__header">Brand Name</label>
                  <select id="brand-select" style="width:10%;padding:10px 0;font-size:1.5rem;font-weight:500;" name="sltBrand">
                    <option value="blast" selected>Blast</option>
                    <option value="minimal">Minimal</option>
                    <option value="money">Money</option>
                    <option value="bestsound">Best Sound</option>
                    <option value="redbox">RedBox</option>
                  </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
              <label class="product__header" >Category Name</label>
                  <select id="category-select"style="width:10%;padding:10px 0;font-size:1.5rem;font-weight:500;" name="sltCategory"> 
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
            </div>
            <div class="col-12">
              <div class="form-group">
                  <label class="product__header" for="product__description-input">Product Description</label>
                  <input type="text" class="product__input" name="productDescription" required placeholder="Enter Product Description" id="product__description-input" value="<?php echo $description; ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                  <label class="product__header">Product Price</label>
                  <input type="text" class="product__input" name="productPrice" required placeholder="Enter Product Price" id="product__price-input" value="<?php echo $price; ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                  <label class="product__header" for="product__input-img">Product Image <small>(format: jpg, jpeg, png)</small></label>
                  <input type="file" name="productImage" class="product__input product__input-img" value="<?php echo $new_image;?>">
                  <img src="<?php echo "./upload/" .$row['prd_image'];?>" width="100px" height="100px" alt="" />
                </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                    <label class="product__header" for="product__quantity-input">Product Quantity</label>
                    <input type="number" class="product__input" name="productQuantity" required placeholder="Enter Product Quantity" id="product__quantity-input" value="<?php echo $quantity;?>">
              </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="product__header">Product Date</label>
                    <input type="text" class="product__input" name="productDate" required placeholder="Enter Date Product Create" id="product__date-input" value="<?php echo $date; ?>">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="product__header">Product Sale</label>
                    <input type="text" class="product__input" name="productSale" required placeholder="Enter Product Sale" id="product__sale-input" value="<?php echo $sale; ?>">
                </div>   
            </div>
            <div class="col-12">
                <div class="button-edit">
                    <button class="btn-success btn-create" name="btnEdit">ADD PRODUCT</button>
                </div>
            </div>
          </div>         
        </form>
      </div>
</div>

<?php include('includes/footer.php'); ?>