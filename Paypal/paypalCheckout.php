<?php
include('config.php');
$productName = "Producto demostración";
$currency = "MXN";
$productPrice = 10;
$productId = 587965;
$orderNumber = 567;
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Demo Paypal Express Checkout</title>
</head>

<body>
    <div class="container">
        <h2>Demo Paypal Express Checkout Demo con PHP</h2>
        <br>
        <table class="table">
            <tr>
                <td style="width:150px"><img src="demo_product.png" style="width:50px" /></td>
                <td style="width:150px"><?php echo $productPrice; ?> €</td>
                <td style="width:150px">
                    <?php include 'paypalCheckout.php'; ?>
                </td>
            </tr>
        </table>
    </div>
</body


