<?php
$amount = isset($_GET['amount']) ? (int)$_GET['amount'] : 0;
$qrUrl = "https://img.vietqr.io/image/mbbank-0398569036-compact2.jpg?amount={$amount}&addInfo=Thanh%20toan%20don%20hang&accountName=Thanh%20Toan%20Hoa%20Don";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>QR Thanh toán</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container text-center mt-5">
    <h2>Quét mã QR để thanh toán</h2>
    <p>Số tiền: <strong><?= number_format($amount, 0, ',', '.') ?>đ</strong></p>
    <img src="<?= $qrUrl ?>" alt="QR Thanh toán" class="img-fluid" style="max-width:300px;">
    <div class="mt-4">
        <a href="trangchu.php" class="btn btn-primary">Về Trang chủ</a>
    </div>
</body>
</html>
