<?php
$conn = new mysqli("localhost", "root", "", "banhang");
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Xử lý xóa sản phẩm theo id
if (isset($_GET['delete_id'])) {
    $delete_id = (int) $_GET['delete_id'];
    $conn->query("DELETE FROM cart_items WHERE id = $delete_id");
    
    header("Location: cart.php"); // load lại trang sau khi xóa
    exit;
}

$sql = "SELECT * FROM cart_items";
$result = $conn->query($sql);
$cartItems = [];
$total = 0;

while ($row = $result->fetch_assoc()) {
    $cartItems[] = $row;
    $total += $row['price'];
}

if (isset($_POST['checkout'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $items = $conn->real_escape_string($_POST['cart_items']);
    $address = $conn->real_escape_string($_POST['address']);

    // Thêm vào bảng orders
    $conn->query("INSERT INTO orders (customer_name, phone, address, total_price) 
                  VALUES ('$name', '$phone', '$address', $total)");

    $order_id = $conn->insert_id;

    // Thêm từng sản phẩm vào order_items
    foreach ($cartItems as $item) {
        $pname = $conn->real_escape_string($item['name']);
        $pprice = $item['price'];
        $conn->query("INSERT INTO order_items (order_id, product_name, price) 
                      VALUES ($order_id, '$pname', $pprice)");
    }

    // Xóa giỏ hàng
    $conn->query("DELETE FROM cart_items");

    // echo "<script>alert('Đặt hàng thành công! Cảm ơn bạn.'); window.location.href='trangchu.php';</script>";
    header("Location: qrthanhtoan.php?amount=" . ($total*1000));
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thanh toán</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
        #wrapper {
            width: 1024px;
            background-color: #f5e9f7;
            margin: auto;
            font-family: Times, sans-serif;
            padding-bottom: 40px;
        }
        #banner {
            width: 100%;
            height: 150px;
            background: url('banner.jpg') no-repeat center/cover;
            text-align: center;
            color: rgb(0, 0, 0);
            font-size: 2em;
            line-height: 150px;
            font-weight: bold;
        }
        #menu {
            width: 100%;
            height: 40px;
            background-color: #ff6699;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        #menu a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }
        #footer {
            width: 100%;
            height: 50px;
            background-color: #333;
            color: white;
            text-align: center;
            line-height: 50px;
        }
    </style>
</head>
<body>
    <div id="wrapper">
      <div id="wrapper">
    <img src="img/Capture1.PNG" alt="Hình ảnh cửa hàng" style="width: 1024px; height: 350px;" >

    <div id="menu">
        <a href=" "> </a>
    </div>
</body>
<body class="container mt-5">
    <h2>Thanh toán đơn hàng</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($cartItems as $item): ?>
            <tr>
                <td><?= htmlspecialchars($item['name']) ?></td>
                <td><?= number_format($item['price']*1000, 0, ',', '.') ?>đ</td>
                <td>
                    <a href="?delete_id=<?= $item['id'] ?>" 
                       onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')" 
                       class="btn btn-danger btn-sm">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
            <td><?="Tổng tiền"?></td>
            <th colspan="2"><?= number_format($total * 1000, 0, ',', '.') ?>đ</th>
        </tfoot>
    </table>

    <?php if ($total > 0): ?>
    <form method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Họ tên</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Địa chỉ</label>
            <textarea class="form-control" name="address" required></textarea>
        </div>
        <button type="submit" name="checkout" class="btn btn-success">Xác nhận thanh toán</button>
    </form>
    <?php else: ?>
        <p>Giỏ hàng trống.</p>
    <?php endif; ?>
    <div class="mt-5 text-center">
            <a href="trangchu.php">&larr; Quay về Trang chính</a>
        </div>
        <div id="footer">
        &copy; 2025 SHOPHOAHANOI. All rights reserved.
    </div>
</body>
</html>
