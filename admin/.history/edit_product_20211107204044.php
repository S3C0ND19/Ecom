<?php include('config/db.php'); ?>

<?php include('includes/header.php'); ?>
<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="edit_product.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="productName" class="form-control" placeholder="Enter Product Name">
              </div>
            </div>
            <div class="col-12">
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
            </div>
            <div class="col-12">
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
            </div>
            <div class="col-12">
              <div class="form-group">
                  <label class="product__header" for="product__description-input">Product Description</label>
                  <input type="text" class="product__input" name="productDescription" required placeholder="Enter Product Description" id="product__description-input">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                  <label class="product__header">Product Price</label>
                  <input type="text" class="product__input" name="productPrice" required placeholder="Enter Product Price" id="product__price-input">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Price</label>
                <input type="number" name="e_product_price" class="form-control" placeholder="Enter Product Price">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Keywords <small>(eg: apple, iphone, mobile)</small></label>
                <input type="text" name="e_product_keywords" class="form-control" placeholder="Enter Product Keywords">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
                <input type="file" name="e_product_image" class="form-control">
                <img src="../product_images/1.0x0.jpg" class="img-fluid" width="50">
              </div>
            </div>
            <input type="hidden" name="pid">
            <input type="hidden" name="edit_product" value="1">
            <div class="col-12">
              <button type="button" class="btn btn-primary submit-edit-product">Add Product</button>
            </div>
          </div>         
        </form>
      </div>
</div>

<?php include('includes/footer.php'); ?>