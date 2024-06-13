<?php
// Đảm bảo rằng các biến này được khởi tạo trước khi form được nạp
$product_name = isset($_POST['product_name']) ? $_POST['product_name'] : 'Tên sản phẩm mặc định';
$product_price = isset($_POST['product_price']) ? number_format($_POST['product_price'], 0, ',', '.') . 'đ' : 'Giá sản phẩm mặc định';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="n-hng">
      <div class="div">
        <header class="header">
          <div class="text-wrapper">Baby bear</div>
          <div class="text-wrapper-2">SHOP</div>
          <div class="text-wrapper-3">ÁO</div>
          <div class="text-wrapper-4">QUẦN</div>
          <button class="button">
            <div class="text-wrapper-5">GIỎ HÀNG</div>
            <div class="overlap-group">
              <img class="shopping-bag" src="img/shopping-bag.svg" /> <img class="vector" src="img/vector.svg" />
            </div>
          </button>
        </header>
        <div class="social-icons">
          <div class="buttons-icon">
            <div class="icon"><img class="img" src="img/icon.svg" /></div>
          </div>
          <div class="buttons-icon">
            <div class="icon"><img class="icon-2" src="img/icon-1.svg" /></div>
          </div>
          <div class="buttons-icon">
            <div class="icon"><img class="icon-3" src="img/icon-2.svg" /></div>
          </div>
          <div class="buttons-icon">
            <div class="icon"><img class="img" src="img/icon-3.svg" /></div>
          </div>
        </div>
        <form method="post" action="https://script.google.com/macros/s/AKfycbx-8COMFjUZm9uJeGVZw262tBsuAfKy-CrLm12Q9d4jLo_ovDcfwWZ_a2ksSNQga1qkLw/exec">
          
          <div class="element-input-field">
            <input type="text" class="input-text" name="name" id="name" placeholder="" value="" autocomplete="given-name" style="height: 100%; width: 100%; font-size: 30px;">
          </div>
          <div class="text-wrapper-6">THÔNG TIN THANH TOÁN</div>
          
          <div class="text-wrapper-8">Họ và Tên*</div>
          <div class="overlap">
            <div class="element-input-field-2">
              <input type="text" class="input-text" name="sdt" id="sdt" placeholder="" value="" autocomplete="tel" style="height: 100%; width: 100%; font-size: 30px;">
            </div>
          </div>
          <div class="overlap-2">
            <div class="text-wrapper-9">Số Điện Thoại*</div>
          </div>
          <div class="element-input-field-wrapper">
            <div class="element-input-field-2">
              <input type="text" class="input-text" name="diachi" id="diachi" placeholder="" value="" autocomplete="street-address" style="height: 100%; width: 100%; font-size: 30px;">
            </div>
          </div>
          <p class="p">Địa chỉ giao hàng cụ thể*</p>
          

          <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($product_name); ?>">
          <input type="hidden" name="product_price" value="<?php echo htmlspecialchars($product_price); ?>">


          <div class="overlap-5">
            <div class="list">
              <div class="text-wrapper-14">ĐƠN HÀNG CỦA BẠN</div>
              <div class="text-wrapper-15">SẢN PHẨM</div>
            </div>
            <button type="submit" class="button-2">
              <div class="text-wrapper-16">ĐẶT HÀNG</div>
            </button>
            <div class="text-wrapper-18">Tổng</div>
            <p class="qu-kh-ch-vui-l-ng">
              Quý khách vui lòng chuyển khoản tiền mua hàng qua tài khoản:<br />1. VIETCOMBANK – LE PHUC TAN – 0061001185223<br />2. MOMO – 0916008448 – LE PHUC TAN<br /> Sau khi nhận được tiền, hệ thống sẽ báo qua email hoặc SĐT của bạn<br /> Đơn hàng được giữ lại tới lúc chúng tôi nhận được tiền sẽ tiến hành chuyển sang cho bộ phận chuyển phát nhanh!<br />+ 20k phí ship nếu như đơn hàng &lt; 300k<br /> Trong trường hợp có sự cố hoặc cần hỗ trợ liên hệ<br /><br />
            </p>
            <p class="i-u-KI-n-n-h-ng-tr-n">
              ĐIỀU KIỆN <br /> Đơn hàng trên 300K sẽ được miễn phí vận chuyển<br /> Đơn hàng dưới 300K sẽ được shop phụ thu 20k phí vận chuyển<br />--------------------------------------------------------------------<br />QUÀ TẶNG<br />Với mỗi đơn hàng ( không bao gồm Combo Móc Chìa Khóa) bạn được chọn 1 mẫu quà tặng giá 0Đ trong mục Quà tặng miễn phí ở phía trên<br />--------------------------------------------------------------------
            </p>
            <?php
              $product_name = $_POST['product_name'];
              $product_price = number_format($_POST['product_price'], 0, ',', '.') . 'đ';
            ?>
            <div class="text-wrapper-20"><?php echo htmlspecialchars($product_price); ?></div>
            <p class="text-wrapper-19"><?php echo htmlspecialchars($product_name); ?></p>
            <div class="text-wrapper-22"><?php echo htmlspecialchars($product_price); ?></div>
            <div class="text-wrapper-23">TẠM TÍNH</div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
