<?php include('config/db.php'); ?>
<?php include('includes/header.php'); ?>    
    <div class="content">
        <?php include('includes/navbar.php'); ?>
        <div class="content-main">
            <div class="content__header">
                <h3 class="content__title">Order Details</h3>
                <div class="cotent__header-nav">
                    <a href="index.php" class="content__header-nav-link">Dashboard / Order</a> 
                </div>
            </div>
            <div class="content-table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="row" class="table-header-value">Order ID</th>
                                <th scope="row" class="table-header-value">Product Image</th>
                                <th scope="row" class="table-header-value"></th>
                                <th scope="row" class="table-header-value">FirstName</th>
                                <th scope="row" class="table-header-value">LastName</th>
                                <th scope="row" class="table-header-value">Address</th>
                                <th scope="row" class="table-header-value">City</th>
                                <th scope="row" class="table-header-value">Email</th>
                                <th scope="row" class="table-header-value">Phone</th>

                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>