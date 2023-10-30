<div id="footer">
    <div class="holder">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-3">
                <h4>Pages</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">About us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="cart.php">Cart</a></li>
                </ul>
                
                <hr class="hidden-md hidden-lg hidden-sm">
            </div>

            <div class="com-sm-6 col-md-3">
                <h4>Top Products Categories</h4>

                <ul>
                    <?php 
                            $get_p_categories = "select * from product_categories";

                            $run_p_categories = mysqli_query($db, $get_p_categories);
                        
                            while($row_p_categories=mysqli_fetch_array($run_p_categories)){
                                $p_category_id = $row_p_categories['p_category_id'];
                                $p_category_title = $row_p_categories['p_category_title'];
                                echo "
                                    <li>
                                        <a href ='shop.php?p_categories=$p_category_id'>
                                            $p_category_title
                                        </a>

                                    </li>
                                ";

                            }
                        
                    ?>
                </ul>
                <hr class="hidden-md hidden-lg">
            </div>

            <div class="col-sm-6 col-md-3">
                <h4>Keep In Touch</h4>
                <p class="social">
                    <a href="#" class="fa-brands fa-facebook-f"></a>
                    <a href="#" class="fa-brands fa-instagram"></a>
                    <a href="#" class="fa-brands fa-square-google-plus"></a>
                </p>
            </div>
                

        </div>
    </div>
</div>

<div id="copyright">
    <div class="holder row justify-content-center">
        <div class="col-md-6">
            <p class="pull-left">
                &copy; Home Furniture
            </p>
        </div>
    </div>
</div>