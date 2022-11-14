<?php
if (
    !empty($_GET['paymentID']) && !empty($_GET['payerID']) &&
    !empty($_GET['token']) && !empty($_GET['pid'])
) {
    $paymentID = $_GET['paymentID'];
    $payerID = $_GET['payerID'];
    $token = $_GET['token'];
    $pid = $_GET['pid'];
?>
    <div class="alert alert-success">
        <strong>Success!</strong> Your order processed successfully.
    </div>
    <table>
        <tr>
            <td>Payment Id: <?php echo $paymentID; ?></td>
            <td>Payer Id: <?php echo $payerID; ?></td>
            <td>product Id: <?php echo $pid; ?></td>
            <td><?php echo ""; ?></td>
        </tr>
    </table>
<?php
} else {
    header('Location:../index.html');
}

?>