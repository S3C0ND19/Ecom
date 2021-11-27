<?php include('includes/header.php'); ?>
  <div class="content">
      <?php include('includes/navbar.php'); ?>
    <div class="modal-main">
      <div class="modal-header">
        <h2 class="modal-title">Update Order</h2>
      </div>
      <div class="modal-body">
        <form action="edit_order.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="product__header">Order Name</label>
              </div>
            </div>
            <div class="col-12">
                <div class="button-edit">
                        <button class="btn btn-danger edit" name="btnCancel">
                          <i class="fas fa-times"></i>
                          Cancel</button>
                        <button class="btn btn-success edit" name="btnEdit">
                        <i class="far fa-save"></i>
                          Save</button>
                </div>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
<?php include('includes/footer.php'); ?>