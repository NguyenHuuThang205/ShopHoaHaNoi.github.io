<?php
// Kết nối CSDL
$conn = new mysqli("localhost", "root", "", "banhang");
// Xóa các sản phẩm đã hơn 10 phút
$conn->query("DELETE FROM cart_items WHERE created_at < NOW() - INTERVAL 10 MINUTE");

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Nhận dữ liệu JSON từ client
$data = json_decode(file_get_contents("php://input"));

$name = $conn->real_escape_string($data->name);
$price = (float) $data->price;

// Thêm vào bảng
$sql = "INSERT INTO cart_items (name, price) VALUES ('$name', '$price')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => $conn->error]);
}

$conn->close();
?>
