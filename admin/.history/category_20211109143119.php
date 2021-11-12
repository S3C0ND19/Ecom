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
            <h3 class="product__title">Categories List</h3>
            <button type="button" class="btn btn-primary btnAdd">Add Category</button>            
        </div>
        <div class="table-responsive">
            <table class=" myFormat table table-striped table-sm">
            <thead>
                <tr>
                <th style="font-size:1.5rem">#</th>
                <th style="font-size:1.5rem">Name</th>
                <th style="font-size:1.5rem">Quantity</th>
                <th style="font-size:1.5rem">Description</th>
                <th style="font-size:1.5rem">Image</th>
                <th style="font-size:1.5rem">Status</th>
                <th style="font-size:1.5rem">Action</th>
                </tr>
            </thead>
            <tbody id="product_list">
                <?php
                    $query = "SELECT * FROM category";
                    $result_tasks = mysqli_query($conn, $query);    
                    while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                <tr>
                    <td style="font-size:1.5rem"><?php echo $row['cat_id']; ?></td>
                    <td style="font-size:1.5rem"><?php echo $row['cat_name']; ?></td>
                    <td style="font-size:1.5rem"><?php echo $row['cat_quantity']; ?></td>
                    <td style="font-size:1.5rem"><?php echo $row['cat_description']; ?></td>
                    <td>
                        <img src="<?php echo "./upload/" .$row['cat_image'];?>" width="100px" height="100px" alt="" />
                    </td>
                    <td style="font-size:1.5rem">
                        <?php 
					        if($row["cat_status"] == 1)
						        echo "Hiện";
					        else
						        echo "Ẩn";
				    ?>
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info">
                            <i class="fas fa-marker"></i>
                        </a>
                        <a href="delete_category.php?id=<?php echo $row['cat_id']?>" class="btn btn-sm btn-danger">
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
                            <h2 class="modal-heading__text">ADD CATEGORY</h2>
                        </div>
                        <form action="add_category.php" class="form-add-product" method="POST" enctype="multipart/form-data"> 
                            <div class="form-content">
                                <div class="form-group">
                                    <label class="product__header">Category Name</label>
                                        <select id="category-select" name="sltCategory" style="width:100%; padding:7px; font-size:1.7rem"> 
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
                                <div>
                                <div class="form-group" style="margin:10px 0;">
                                    <label class="product__header" for="product__quantity-input">Category Quantity</label>
                                    <input type="numbber" class="product__input" name="categogyQuantity" required placeholder="Enter Category Quantity" id="product__quantity-input">
                                </div>
                                <div class="form-group " style="margin:10px 0;">
                                    <label class="product__header" for="product__description-input">Category Description</label>
                                    <input type="text" class="product__input" name="categoryDescription" required placeholder="Enter Category Description" id="product__description-input">
                                </div>   
                                <div class="form-group">
                                    <label class="product__header" for="product__input-img">Category Image <small>(format: jpg, jpeg, png)</small></label>
                                    <input type="file" name="categoryImage" class="product__input product__input-img">
                                </div>
                                <div class="form-group" style="margin:10px 0;">
                                    <label class="product__header">Category Status</label>
                                        <select id="category__status-select" name="sltStatus" style="width:100%; padding:7px; font-size:1.7rem"> 
                                            <option value="1" selected>Hiện</option>
                                            <option value="0">Ẩn</option>
                                        </select>                               
                                </div>    
                                <div class="button-create">
                                    <input type="submit" name="btncreate" class="btn-create" value="ADD CATEGORY">
                                </div>                             
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>