<?php include('config/db.php'); ?>
<?php include('includes/header.php'); ?>
    <div class="product">
        <h3 class="product__title">Product List</h3>        
        <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th>#</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody id="product_list">
                <tr>
                <!-- <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>eLECTRONCS</td>
                <td>aPPLE</td>
                <td>aPPLE</td> -->
                <td>
                    <a class="btn btn-sm btn-info btnEdit">Edit</a>
                    <a class="btn btn-sm btn-danger">Delete</a>
                </td>
                </tr>
            </tbody>
            </table>
        </div>

        <!-- add -->
        
    </div>
<?php include('includes/footer.php'); ?>