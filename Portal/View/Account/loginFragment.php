<div id = "loginFragment">

    <ul class = "login">
        <?php
        if (isset($_SESSION['username'])) {
            $loginUserName = $_SESSION['username'];
            ?>
            <li class = "login_text"><a href = "../Account/myInfo.php"><?php echo 'welcome ' . $loginUserName; ?></a></li>

            <li class = "wish"><a href = "../../Controller/LogoutController.php">Logout</a></li>
            <div class = 'clearfix'></div>
        </ul>

        <div class = "cart_bg">
            <ul class = "cart">
                <i class = "cart_icon"></i><p class = "cart_desc">$1459.50<br><span class = "yellow">2 items</span></p>
                <div class = 'clearfix'></div>
            </ul>
            <ul class = "product_control_buttons">
                <li><a href = "#"><img src = "../../Content/images/close.png" alt = ""/></a></li>
                <li><a href = "#">Edit</a></li>
            </ul>
            <div class = 'clearfix'></div>
        </div>
        <ul class = "quick_access">
            <li class = "view_cart"><a href = "checkout.php">View Cart</a></li>
            <li class = "check"><a href = "checkout.php">Checkout</a></li>
            <div class = 'clearfix'></div>
        </ul>
 
    <?php
} else {
    ?>


    <li class = "login_text"><a href = "../Account/login.php">Login</a></li>

    <li class = "wish"><a href = "../Account/register.php">Register</a></li>
    <div class = 'clearfix'></div>
    </ul>       
    
    <?php
}
?>
 </div>
