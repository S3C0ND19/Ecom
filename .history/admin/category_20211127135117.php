<?php include('config/db.php'); ?>
<?php include('includes/header.php'); ?>
    <div class="content">
      <?php include('includes/navbar.php'); ?>
        <div class="content-main">
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="toast-mess-container">
                <button class=" alert-toast-message alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                        <i  onclick="deleteAlert()"  class=" alert-toast-message-icon ti-close"></i>
                    </button>
               </div>
            <?php session_unset(); } ?>
            <div class="content__header">
                <h3 class="content__title">Category</h3>
                <div class="cotent__header-nav">
                    <a href="index.php" class="content__header-nav-link">Dashboard / Category</a> 
                </div>       
            </div>
            <div class="content__table">
                <div class="table-responsive">
                    <button type="button" class="btnAdd"> + Add New Category</button>      
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="row" class="table-header-value">Image</th>
                                <th scope="row" class="table-header-value" >Name</th>
                                <th scope="row" class="table-header-value" >Description</th>
                                <th scope="row" class="table-header-value" >Status</th>
                                <th scope="row" class="table-header-value" >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM category";
                                $result_tasks = mysqli_query($conn, $query);    
                                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                            <tr style="border-bottom: 1px solid #dee2e6; ">
                                <td>
                                    <img src="<?php echo "./upload/" .$row['cat_image'];?>" width="60px" height="60px" alt="" >     
                                </td>
                                <td style="font-size:1.5rem;"><?php echo $row['cat_name']; ?></td>
                                <td style="font-size:1.5rem;"><?php echo $row['cat_description']; ?></td>                              
                                <td>
                                    <span class="textfill"> 
                                        <?php 
                                            if($row["cat_status"] == 1)
                                                echo "Hiện";
                                            else
                                                echo "Ẩn";
                                        ?>
                                     </span>                               
                                </td>
                                <td>
                                    <a style="font-size:1.5rem; margin-right:20px;" href="edit_category.php?id=<?php echo $row['cat_id']?>" class="btn btn-sm ">
                                        <span class="iconify" data-icon="uil:pen"></span>
                                    </a>
                                    <a style="font-size:1.5rem" href="delete_category.php?id=<?php echo $row['cat_id']?>" class="btn btn-sm" onclick="return confirm('Are you sure you want to delete this category?');">
                                        <span class="iconify trash" data-icon="uil:trash-alt"></span>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
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
                                            <option value="" selected>--Please choose an option--</option> 
                                            <option value="Armchairs">Armchairs</option>
                                            <option value="Bath Room">Bath Room</option>
                                            <option value="Dining Chairs">Dining Chairs</option>
                                            <option value="Dining Tables" >Dining Tables</option>
                                            <option value="Lightings">Lightings</option>
                                            <option value="Living Room">Living Room</option>
                                            <option value="Office">Office</option>
                                            <option value="Seating" >Seating</option>
                                            <option value="Sofas">Sofas</option>
                                            <option value="Special">Special</option>
                                            <option value="Table" >Table</option>
                                        </select>
                                <div>                               
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