<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Liên hệ - Shop Hoa Hà Nội</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <div class="container mt-5">
        <h1 class="mb-4 text-center">Liên hệ với Lorista</h1>

        <div class="row">
            <div class="col-md-6 mb-4">
                <h4>Thông tin liên hệ</h4>
                <p><strong>Địa chỉ:</strong> Cụm 10, Vĩnh Ninh, Vĩnh Quỳnh, Thanh Trì, Hà Nội</p>
                <p><strong>Số điện thoại:</strong> 0398 569 036</p>
                <p><strong>Email:</strong> thang9xz132@gmail.com</p>

                <h4 class="mt-4">Bản đồ</h4>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7452.947867391161!2d105.8222008447891!3d20.933474343484416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad766da5c653%3A0x6eb082f154d19f76!2zVsSpbmggTmluaCwgVsSpbmggUXXhu7NuaCwgVGhhbmggVHLDrCwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1748202558275!5m2!1svi!2s"
                    width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="col-md-6">
                <h4>Gửi lời nhắn</h4>
                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Họ và tên:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nhập họ tên" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Nội dung:</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Nhập nội dung liên hệ" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi liên hệ</button>
                </form>
            </div>
        </div>

        <div class="mt-5 text-center">
            <a href="trangchu.php">&larr; Quay về Trang chính</a>
        </div>
    </div>

    <div id="footer">
        &copy; 2025 SHOPHOAHANOI. All rights reserved.
    </div>
</div>
</body>
</html>
