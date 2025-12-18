<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shop Hoa Hà Nội</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Hoa Hà Nội</title>
    <script>

        let cart = [];
        // Thông báo yêu cầu đăng nhập
        function addToCart(name, price) {
            cart.push({ name, price });

            alert(`Hãy đăng nhập để thêm sản phẩm vào giỏ hàng!!!`);
        }
        function checkout() {
        if (cart.length === 0) {
        alert(`Hãy đăng nhập để thanh toán!!!`);
        } else {
        alert(`Hãy đăng nhập để thanh toán!!!`);
        cart = []; // Xóa giỏ hàng sau khi thanh toán
        updateCart();
    }
}
    </script>
    
</head>
<body>
    <!-- Nút nhạc -->
    <audio id="myAudio">
        <source src="sound/nhac1.mp3" type="audio/mpeg">

    </audio>
    <img id="soundIcon" src="img/loa.png" style="height: 50px; cursor: pointer;" onclick="toggleMusic()" alt="Loa">


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
        // Chuyển ảnh script 
        const images = ["img/Capture1.PNG", "img/shop3.png", "img/shop4.png"];
  let index = 0;

  setInterval(() => {
    const image = document.getElementById("bannerImage");
    index = (index + 1) % images.length;
    image.src = images[index];
  }, 3000); // đổi ảnh mỗi 3 giây
        
    </script>
    <div id="wrapper">
        <div style="position: relative; display: inline-block;">
        <img src="img/logo1.png" alt="Logo" style="position: absolute; top: 20px; left: 20px; height: 160px; border-radius: 70%; z-index: 40;">
        <img id="bannerImage" src="img/Capture1.PNG" alt="Hình ảnh cửa hàng" style="width: 1024px; height: 450px;">
        <div id="menu">
            <a href="#">HOME</a>
            <a href="#">ABOUT</a>
            <a href="contact.php">CONTACT</a>
            <a href="login.php">LOGIN</a>
            
        </div>
        <!-- Thông tin sản phẩm -->
        <h2 style="text-align:center; color:#cc3366; font-weight:bold;">
        <b>SẢN PHẨM BÁN CHẠY</b>
        </h2>

        <div id="content">
            <div class="product"><img src="img/Rose Bouquet.jpg" alt="Hoa Hong"><h3>Rose Bouquet</h3><p>249.000đ</p><button class="add-to-cart" onclick="addToCart('Rose Bouquet', 249.000)">Thêm vào giỏ</button></div>
            <div class="product"><img src="img/Tulip Arrangement.jpg" alt="Hoa Tulip"><h3>Tulip Arrangement</h3><p>349.000đ</p><button class="add-to-cart" onclick="addToCart('Tulip Arrangement', 349.000)">Thêm vào giỏ</button></div>
            <div class="product"><img src="img/Sunflower Basket.jpg" alt="Hoa Huong Duong"><h3>Sunflower Basket</h3><p>199.000đ</p><button class="add-to-cart" onclick="addToCart('Sunflower Basket', 199.000)">Thêm vào giỏ</button></div>
            <div class="product"><img src="img/Lily Bouquet.jpg" alt="Hoa Ly"><h3>Lily Bouquet</h3><p>299.000đ</p><button class="add-to-cart" onclick="addToCart('Lily Bouquet', 299.000)">Thêm vào giỏ</button></div>
            <div class="product"><img src="img/Orchid Pot.jpg" alt="Hoa Lan"><h3>Orchid Pot</h3><p>199.000đ</p><button class="add-to-cart" onclick="addToCart('Orchid Pot', 199.000)">Thêm vào giỏ</button></div>
            <div class="product"><img src="img/Daisy Basket.jpg" alt="Hoa CucCuc"><h3>Daisy Basket</h3><p>249.000đ</p><button class="add-to-cart" onclick="addToCart('Daisy Basket', 249.000)">Thêm vào giỏ</button></div>
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
