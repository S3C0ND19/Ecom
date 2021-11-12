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
                  <label for="product__name-input" class="product__header">Product Name</label>
                  <input type="text" class="product__input" name="productName" required placeholder="Enter Product Name" id="product__name-input">
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
                  <label class="product__header" for="product__input-img">Product Image <small>(format: jpg, jpeg, png)</small></label>
                  <input type="file" name="productImage" class="product__input product__input-img">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                    <label class="product__header" for="product__quantity-input">Product Quantity</label>
                    <input type="number" class="product__input" name="productQuantity" required placeholder="Enter Product Quantity" id="product__quantity-input">
              </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="product__header">Product Date</label>
                    <input type="text" class="product__input" name="productDate" required placeholder="Enter Date Product Create" id="product__date-input">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="product__header">Product Sale</label>
                    <input type="text" class="product__input" name="productSale" required placeholder="Enter Product Sale" id="product__sale-input">
                </div>   
            </div>
            <div class="col-12">
                <div class="button-edit">
                    <input type="submit" name="btnEdit" class="btn-create" value="UPDATE PRODUCT">
                </div>
            </div>
          </div>         
        </form>
      </div>
</div>

<?php include('includes/footer.php'); ?>