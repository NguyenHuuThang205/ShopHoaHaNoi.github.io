<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shop Hoa Hà Nội</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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
    #content {
        display: flex;
        flex-wrap: wrap;
        padding: 20px;
        justify-content: center;
    }
    .product {
        width: 30%;
        margin: 1.5%;
        background-color: white;
        padding: 10px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    .product img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
    }
    .product:hover {
        transform: scale(1.03);
    }
    .product h3 {
        margin: 10px 0;
    }
    .product p {
        color: #ff6699;
        font-weight: bold;
    }
    .add-to-cart {
        background-color: #ff6699;
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        margin-top: 10px;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }
    .add-to-cart:hover {
        background-color: #ff3366;
        transform: scale(1.05);
    }

    .register-form {
        width: 400px;
        background-color: white;
        padding: 20px;
        margin: 20px auto;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        border-radius: 8px;
    }
    .register-form h2 {
        text-align: center;
        color: #ff6699;
        margin-bottom: 20px;
    }
    .register-form input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .register-form button {
        width: 100%;
        padding: 10px;
        background-color: #ff6699;
        color: white;
        border: none;
        border-radius: 4px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .register-form button:hover {
        background-color: #ff3366;
    }
    .register-form p {
        text-align: center;
        margin-top: 10px;
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
    <img src="img/Capture1.PNG" alt="Hình ảnh cửa hàng" style="width: 1024px; height: 350px;" >

    <div id="menu">
      <a href="#"> </a>
    </div>


    <div class="register-form">


      <?php
      session_start();
include 'config.php';
    // Lấy kiểm tra dữ liệu đăng nhập 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];$_SESSION['username'] = $username;

    $sql = "SELECT id, password FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $username;
            header("Location: trangchu.php");
        } else {
            echo "Sai mật khẩu.";
        }
    } else {
        echo "Tài khoản không tồn tại.";
    }
}
?>
    <!-- Form đăng nhập  -->
        <h2>Đăng nhập</h2>
    <form method="POST">
        Tên đăng nhập: <input name="username" required><br>
        Mật khẩu: <input type="password" name="password" required><br>
        <button type="submit">Đăng nhập</button>
    </form>
    <p>Bạn chưa có tài khoản? <a href="register.php">Đăng ký</a></p>
        </div>

    <div id="footer">
      &copy; 2025 Shop Hoa Hà Nội
    </div>
  </div>

</body>
</html>
