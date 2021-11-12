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
            <h3 class="product__title">Brand List</h3>
            <button type="button" class="btn btn-primary btnAdd">Add Brand</button>            
        </div>
        <div class="table-responsive">
            <table class=" myFormat table table-striped table-sm">
            <thead>
                <tr>
                <th  style="font-size:1.5rem">#</th>
                <th  style="font-size:1.5rem">Name</th>
                <th  style="font-size:1.5rem">Image</th>
                <th style="font-size:1.5rem">Action</th>
                </tr>
            </thead>
            <tbody id="product_list">
                <?php
                    $query = "SELECT * FROM brand";
                    $result_tasks = mysqli_query($conn, $query);    
                    while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                <tr>
                    <td style="font-size:1.5rem"><?php echo $row['brand_id']; ?></td>
                    <td style="font-size:1.5rem"><?php echo $row['brand_name']; ?></td>
                    <td>
                        <img src="<?php echo "./upload/" .$row['brand_img'];?>" width="100px" height="100px" alt="" />
                    </td>
                    <td>
                        <a  style="font-size:1.5rem" href="#" class="btn btn-sm btn-info btnEditBrand ">
                            <i class="fas fa-marker"></i>
                        </a>
                        <a  style="font-size:1.5rem" href="delete_brand.php?id=<?php echo $row['brand_id']?>" class="btn btn-sm btn-danger">
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
                            <h2 class="modal-heading__text">ADD BRAND</h2>
                        </div>
                        <form action="add_brand.php" class="form-add-product" method="POST" enctype="multipart/form-data"> 
                            <div class="form-content">
                                <div class="form-group">
                                    <label class="product__header">Brand Name</label>
                                    <select id="brand-select" name="sltBrand">
                                        <option value="blast" selected>Blast</option>
                                        <option value="minimal">Minimal</option>
                                        <option value="money">Money</option>
                                        <option value="bestsound" >Best Sound</option>
                                        <option value="redbox">RedBox</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="product__header" for="product__input-img">Brand Image <small>(format: jpg, jpeg, png)</small></label>
                                    <input type="file" name="brandImage" class="product__input product__input-img">
                                </div>      
                                <div class="button-create">
                                    <input type="submit" name="btncreate" class="btn-create" value="ADD BRAND">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit -->
    <div class=" modal__edit-product js-modal">
        <div class="modal__container js-modal-container">
            <div class="modal-content">
                <div class="modal-close js-modal-close">
                    <i class="modal-close-icon fas fa-times"></i>
                </div>
                <div class="box-content">
                    <div class="form-wrapper active" >
                        <div class="modal-heading">
                            <h2 class="modal-heading__text">ADD BRAND</h2>
                        </div>
                        <form action="add_brand.php" class="form-add-product" method="POST" enctype="multipart/form-data"> 
                            <div class="form-content">
                                <div class="form-group">
                                    <label class="product__header">Brand Name</label>
                                    <select id="brand-select" name="sltBrand">
                                        <option value="blast" selected>Blast</option>
                                        <option value="minimal">Minimal</option>
                                        <option value="money">Money</option>
                                        <option value="bestsound" >Best Sound</option>
                                        <option value="redbox">RedBox</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="product__header" for="product__input-img">Brand Image <small>(format: jpg, jpeg, png)</small></label>
                                    <input type="file" name="brandImage" class="product__input product__input-img">
                                </div>      
                                <div class="button-create">
                                    <input type="submit" name="btncreate" class="btn-create" value="ADD BRAND">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>