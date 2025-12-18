<?php
session_start();

// Kiểm tra nếu chưa đăng nhập thì chuyển về trang đăng nhập
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shop Hoa Hà Nội</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styletrangchu.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Hoa Hà Nội</title>
    <script>

        let cart = [];

            function addToCart(name, price) {
        cart.push({ name, price });
        updateCart();

        // Gửi dữ liệu đến PHP server
        fetch('add_to_cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ name: name, price: price })
        })
        .then(response => response.json())
        .then(data => {
            if (!data.success) {
                console.error("Lỗi khi lưu vào CSDL:", data.error);
            }
        })
        .catch(error => {
            console.error("Lỗi kết nối:", error);
        });
    }

    //Cập nhật giỏ hànghàng
        function updateCart() {
            let cartContent = document.getElementById('cart-content');
            cartContent.innerHTML = '';
            let total = 0;
            cart.forEach(item => {
                total += item.price;
                cartContent.innerHTML += `<p>${item.name} - ${item.price.toFixed(3)}đ</p>`;
            });
            cartContent.innerHTML += `<strong>Total: ${total.toFixed(3)}đ</strong>`;
        }
        function checkout() {
        if (cart.length === 0) {
        alert("Giỏ hàng của bạn đang trống! Vui lòng thêm sản phẩm.");
        } else {
        alert("Thanh toán thành công! Cảm ơn bạn đã mua hàng tại Shop Hoa Hà Nội.");
        cart = []; // Xóa giỏ hàng sau khi thanh toán
        updateCart();
    }
}
    </script>
    
</head>
<body>
    
    <audio id="myAudio">
        <source src="sound/nhac1.mp3" type="audio/mpeg">

    </audio>
    <img id="soundIcon" src="img/loa.png" style="height: 50px;position: absolute; cursor: pointer;" onclick="toggleMusic()" alt="Loa">


    <script>
        const audio = document.getElementById("myAudio");
        const icon = document.getElementById("soundIcon");

        function toggleMusic() {
            if (audio.paused) {
                audio.play();
                icon.src = "img/loa.png";
            } else {
                audio.pause();
                icon.src = "img/loa.png";
            }
        }
        
        const images = ["img/Capture1.PNG", "img/shop3.png", "img/shop4.png"];
  let index = 0;

  setInterval(() => {
    const image = document.getElementById("bannerImage");
    index = (index + 1) % images.length;
    image.src = images[index];
  }, 4000); // đổi ảnh mỗi 3 giây
        
    </script>

    <!-- Nút nhạc -->
    <div id="wrapper">
                <div class="video-section" style="position: absolute; top: 100px; left: 50px; width: 300px;">


        <video width="250" height=auto controls muted>
            <source src="img/video.mp4" type="video/mp4">

        </video>
    </div>
        <div style="position: relative; display: inline-block;">
        <img src="img/logo1.png" alt="Logo" style="position: absolute; top: 20px; left: 20px; height: 160px; border-radius: 70%; z-index: 40;">
        <img id="bannerImage" src="img/Capture1.PNG" alt="Hình ảnh cửa hàng" style="width: 1024px; height: 450px;">
        
        <!-- Phần menu -->
        <div id="menu">
            <a href="trangchu.php">HOME</a>
            <a href="product.php">ELEGANT BOUQUETS</a>
            <a href="#">FLOWER BOX</a>
            <a href="giohoa.php">FLOWER BASKET</a>
            <a href="cart.php">CART</a>
                <p style="color: white;font-size: 18px;font-weight: bold; margin: 0; padding-top: 1px; line-height: 50px;">CHÀO MỪNG, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>!</p>
            <a href="logout.php">LOGOUT</a>
            
        </div>
        <h2 style="text-align:center; color:#cc3366; font-weight:bold;">
        <b>FLOWER BOX</b>
        </h2>
        <!-- Thông tin sản phẩm -->
        <div id="content">
            <div class="product"><img src="img/box1.jpg" alt="Ethereal Pearl Garden"><h3>Ethereal Pearl Garden</h3><p>449.000đ</p><button class="add-to-cart" onclick="addToCart('Ethereal Pearl Garden', 449.000)">Thêm vào giỏ</button></div>
            <div class="product"><img src="img/box2.jpg" alt="Crimson Noir Elegance"><h3>Crimson Noir Elegance</h3><p>349.000đ</p><button class="add-to-cart" onclick="addToCart('Crimson Noir Elegance', 349.000)">Thêm vào giỏ</button></div>
            <div class="product"><img src="img/box3.jpg" alt="Bloom & Candle Harmony"><h3>Bloom & Candle Harmony</h3><p>499.000đ</p><button class="add-to-cart" onclick="addToCart('Bloom & Candle Harmony', 499.000)">Thêm vào giỏ</button></div>
            <div class="product"><img src="img/box4.jpg" alt="Lavender Dream Box"><h3>Lavender Dream Box</h3><p>299.000đ</p><button class="add-to-cart" onclick="addToCart('Lavender Dream Box', 299.000)">Thêm vào giỏ</button></div>
            <div class="product"><img src="img/box5.jpg" alt="Spring Symphony"><h3>Spring Symphony</h3><p>199.000đ</p><button class="add-to-cart" onclick="addToCart('Spring Symphony', 199.000)">Thêm vào giỏ</button></div>
            <div class="product"><img src="img/box6.jpg" alt="Coral Grace"><h3>Coral Grace</h3><p>249.000đ</p><button class="add-to-cart" onclick="addToCart('Coral Grace', 249.000)">Thêm vào giỏ</button></div>
        </div>
        <div id="cart">
            <h2>Giỏ hàng</h2>
            <div id="cart-content"></div>
            <button class="add-to-cart" onclick="checkout()">Thanh toán</button>
        </div>
        <div id="footer">&copy; 2025 SHOPHOAHANOI. All Rights Reserved.</div>
        
    </div>
</body>
</html>
