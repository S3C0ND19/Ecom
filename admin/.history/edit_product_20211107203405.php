<?php include('config/db.php'); ?>

<?php include('includes/header.php'); ?>
<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-product-form" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="e_product_name" class="form-control" placeholder="Enter Product Name">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Brand Name</label>
                <select class="form-control brand_list" name="e_brand_id">
                  <option value="">Select Brand</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Category Name</label>
                <select class="form-control category_list" name="e_category_id">
                  <option value="">Select Category</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Description</label>
                <textarea class="form-control" name="e_product_desc" placeholder="Enter product desc"></textarea>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Qty</label>
                <input type="number" name="e_product_qty" class="form-control" placeholder="Enter Product Quantity">
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