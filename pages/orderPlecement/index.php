<?php require_once __DIR__.'/db.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/pages/orderPlecement/globals.css" />
    <link rel="stylesheet" href="/pages/orderPlecement/styleguide.css" />
    <link rel="stylesheet" href="/pages/orderPlecement/style.css" />
  </head>
  <body>
    <div class="order-plecement">
      <div class="div">
        <div class="overlap">
          <div class="group">
            <img class="vector" src="/pages/orderPlecement/img/vector-3.svg" />
            <div class="group-2">
              <div class="text-wrapper">UAH</div>
              <div class="text-wrapper-2">₴</div>
            </div>
            <div class="group-3">
              <div class="text-wrapper-3">English</div>
              <img class="img" src="/pages/orderPlecement/img/united-kingdom-gb.svg" />
            </div>
          </div>
          <img class="frame" src="/pages/orderPlecement/img/frame-70.svg" />
          <div class="frame-2">
            <img class="img-2" src="/pages/orderPlecement/img/iconsax-linear-category2.svg" />
            <div class="text-wrapper-4">Catalog</div>
          </div>
          <div class="group-4"><a href="/">
            <img class="LOGO" src="/pages/orderPlecement/img/logo.svg" />
            <div class="overlap-group"><img class="frame-3" src="/pages/orderPlecement/img/frame.svg" /></div>
          </a> </div>
        </div>
        <footer class="FOOTER">
          <div class="f">
            <div class="overlap-group-2">
              <div class="rectangle"></div>
              <div class="rectangle-2"></div>
              <div class="group-5">
                <div class="element-DEALFLOW">2023&nbsp;&nbsp;DEALFLOW</div>
                <img class="img" src="/pages/orderPlecement/img/vuesax-linear-copyright.svg" />
              </div>
              <div class="social-media">
                <p class="p">FOLLOW US ON SOCIAL MEDIA</p>
                <img class="vuesax-linear" src="/pages/orderPlecement/img/vuesax-linear-facebook.svg" />
                <img class="vuesax-linear-2" src="/pages/orderPlecement/img/vuesax-linear-instagram.svg" />
                <img class="twitter" src="/pages/orderPlecement/img/twitter.svg" />
              </div>
              <div class="teleph">
                <img class="img" src="/pages/orderPlecement/img/vuesax-linear-call.svg" />
                <div class="text-wrapper-5">+380 (96) 836 4450</div>
              </div>
              <div class="group-6">
                <div class="text-wrapper-6">About DealFlow</div>
                <div class="text-wrapper-7">Terms &amp; Support</div>
                <div class="text-wrapper-8">Contacts</div>
                <div class="text-wrapper-9">All Categories</div>
                <div class="text-wrapper-10">About Us</div>
              </div>
              <div class="group-7">
                <div class="text-wrapper-6">Support</div>
                <div class="text-wrapper-7">Returning goods</div>
                <div class="text-wrapper-8">Delivery &amp; Payment</div>
                <div class="text-wrapper-9">Service centers</div>
                <div class="text-wrapper-10">Help</div>
              </div>
              <div class="group-8">
                <div class="text-wrapper-6">Bonus account</div>
                <div class="text-wrapper-7">Membership</div>
                <div class="text-wrapper-8">Gift certificates</div>
                <div class="text-wrapper-9">DealFlow Exchange</div>
                <div class="text-wrapper-10">Services</div>
              </div>
              <div class="group-9">
                <div class="text-wrapper-6">Sell on DealFlow</div>
                <div class="text-wrapper-7">Cooperation with us</div>
                <div class="text-wrapper-8">Franchising</div>
                <a
                  href="https://rozetka.com.ua/ua/news-articles-promotions/promotions/store_search/"
                  target="_blank"
                  rel="noopener noreferrer"
                  ><div class="text-wrapper-9">Renting premises</div></a
                >
                <div class="text-wrapper-10">For partners</div>
              </div>
              <p class="WITH-US-IT-IS-ALWAYS">WITH US IT IS ALWAYS CONVENIENT,<br />FAST AND RELIABLE</p>
            </div>
          </div>
        </footer>
        <div class="frame-4"><a href="/profile_open">
          <img class="vuesax-linear-3" src="/pages/orderPlecement/img/vuesax-linear-profile.svg" />
          <div class="group-10">
            <div class="text-wrapper-11"><?= $user['UserName'] ?></div>
            <div class="text-wrapper-12"><?= $user['Email'] ?></div>
          </div>
          <div class="group-11">
            <img class="vuesax-linear-user" src="/pages/orderPlecement/img/vuesax-linear-user-edit.svg" />
            <div class="text-wrapper-13">Edit</div>
          </div>
        </a></div>
        <div class="frame-5">
          <div class="group-12">
            <p class="text-wrapper-11"><?= $userAddress['AddressLine1'] ?></p>
            <div class="text-wrapper-12"><?= $userAddress['City'] ?>, <?= $userAddress['PostalCode'] ?></div>
          </div>
          <div class="group-13">
            <img class="vuesax-linear-user" src="/pages/orderPlecement/img/vuesax-linear-user-edit.svg" />
            <div class="text-wrapper-13">Edit</div>
          </div>
          <img class="vuesax-linear-4" src="/pages/orderPlecement/img/vuesax-linear-location-2.svg" />
        </div>
        <div class="group-14">
          <img class="vuesax-linear-user" src="/pages/orderPlecement/img/vuesax-linear-user-edit.svg" />
          <div class="text-wrapper-13">Edit</div>
        </div>
        <img class="line" src="/pages/orderPlecement/img/line-7.svg" />
        <img class="line-2" src="/pages/orderPlecement/img/line-7.svg" />
        <img class="line-3" src="/pages/orderPlecement/img/line-7.svg" />
        <div class="text-wrapper-14">ORDER PLACEMENT</div>
        <div class="frame-6">
          <div class="text-wrapper-15">Promo Code</div>
          <img class="img-3" src="/pages/orderPlecement/img/vuesax-linear-document-code.svg" />
          <div class="text-wrapper-16">Add</div>
        </div>
        <div class="frame-7">
          <div class="text-wrapper-15">Bonus Funds</div>
          <div class="frame-8">
            <div class="text-wrapper-17">Total</div>
            <div class="div-wrapper"><div class="text-wrapper-18">Order confirmed</div></div>
            <p class="text-wrapper-19">
              Receipt of an order from 5 000 ₴ - 30 000 ₴ upon availability of documents. When paying in cash from
              30,000 ₴, you must provide documents for verification in accordance with the requirements of the Law of
              Ukraine dated 06.12.2019 №361-IX
            </p>
            <div class="group-15">
              <p class="element"><span class="span">$ </span> <span class="text-wrapper-20" id="alltotal"></span></p>
              <div class="text-wrapper-21">Payable To</div>
            </div>
            <p class="text-wrapper-22">№ 50 632 213 since 22.08.2023</p>
            <p class="text-wrapper-23">2 products for the amount of</p>
          </div>
          <img class="img-3" src="/pages/orderPlecement/img/vuesax-linear-coin.svg" />
          <div class="text-wrapper-24">Use</div>
        </div>
        <div class="group-wrapper">
          <div class="group-16">
            <div class="frame-wrapper">
              <div class="frame-9">
                <img class="img-2" src="/pages/orderPlecement/img/vuesax-linear-quote-up-square.svg" />
                <div class="text-wrapper-25">Dlivery Men, Nova Posta</div>
              </div>
            </div>
            <div class="text-wrapper-26">Dlivery Men</div>
          </div>
        </div>
        <div class="frame-10">
          <img class="img-2" src="/pages/orderPlecement/img/vuesax-linear-quote-up-square.svg" />
          <div class="text-wrapper-25">Delivery Men, DealFlow outlest</div>
        </div>
        <div class="text-wrapper-27">Order №<?= $orderNumber['OrderID'] ?></div>
        <div class="frame-11">
          <img class="vuesax-linear-5" src="/pages/orderPlecement/img/vuesax-linear-location-2.svg" />
          <img class="line-4" src="/pages/orderPlecement/img/line-5.svg" />
          <img class="vuesax-linear-6" src="/pages/orderPlecement/img/vuesax-linear-buildings-1.svg" />
          <img class="vuesax-linear-group" src="/pages/orderPlecement/img/vuesax-linear-group-1.svg" />
          <div class="text-wrapper-28">DF</div>
          <p class="text-wrapper-29">Courier delivery DealFlow, Meest POSTA, Nova Posta</p>
          <p class="text-wrapper-30">Self-delivery from postal operator branches</p>
          <div class="text-wrapper-31">Self-collection from DealFlow outlets</div>
          <div class="text-wrapper-32">Free</div>
          <div class="text-wrapper-33">$ 15-20</div>
          <div class="text-wrapper-34">$ 5-10</div>
          <p class="deliever-to">
            <span class="text-wrapper-35">Deliever to: </span>
            <span class="text-wrapper-36">Khmelnytskyi, Ukraine</span>
          </p>
          <img class="vuesax-linear-arrow" src="/pages/orderPlecement/img/vuesax-linear-arrow-up.svg" />
          <div class="vuesax-linear-wrapper">
            <img class="vuesax-linear-7" src="/pages/orderPlecement/img/vuesax-linear-location-1.svg" />
          </div>
        </div>
        <div class="frame-12">
          <img class="image" src="/pages/orderPlecement/img/<?= $orderInfo['ImageURL'] ?>" />
          <div class="group-17">
            <div class="price">
              <div class="text-wrapper-37">$ <?= $orderInfo['Price'] ?></div>
              <p class="element-2"><span class="text-wrapper-38">$ </span> <span class="text-wrapper-36" id="discount-1"></span></p>
            </div>
            <div class="text-wrapper-39">Price</div>
          </div>
          <div class="overlap-group-wrapper">
            <div class="overlap-group-3">
              <p class="element-3"><span class="span">$ </span> <span class="text-wrapper-36" id="total-1"></span></p>
              <div class="text-wrapper-39">Тotal</div>
            </div>
          </div>
          <div class="group-18">
            <div class="text-wrapper-39">Quantity</div>
            <div class="text-wrapper-40"><?= $orderInfo['Quantity'] ?></div>
          </div>
        </div>
        <div class="frame-13">
          <img class="image" src="/pages/orderPlecement/img/<?= $orderInfo['ImageURL'] ?>" />
          <div class="group-17">
            <div class="price">
              <div class="text-wrapper-37">$ <?= $orderInfo['Price'] ?></div>
              <p class="element-2"><span class="text-wrapper-38">$ </span> <span class="text-wrapper-36" id="discount-2"></span></p>
            </div>
            <div class="text-wrapper-39">Price</div>
          </div>
          <div class="overlap-group-wrapper">
            <div class="overlap-group-3">
              <p class="element-3"><span class="span">$ </span> <span class="text-wrapper-36" id="total-2"></span></p>
              <div class="text-wrapper-39">Тotal</div>
            </div>
          </div>
          <div class="group-18">
            <div class="text-wrapper-39">Quantity</div>
            <div class="text-wrapper-40"><?= $orderInfo['Quantity'] ?></div>
          </div>
        </div>
        <div class="text-wrapper-41">Seller:</div>
        <div class="text-wrapper-42">DEALFLOW</div>
        <div class="text-wrapper-43">$ <?= $shipping['ShippingCost'] ?></div>
        <div class="text-wrapper-44" >$ </div><div class="text-wrapper-45" id="tproduct"></div>
      </div>
    </div>

    <script>
      var discount = <?= $orderInfo['Price'] ?> - ((<?= $orderInfo['Price'] ?> * <?= $orderInfo['DiscountPercentage'] ?>) / 100);
      document.getElementById("discount-1").innerHTML = (discount.toFixed(2));
      document.getElementById("discount-2").innerHTML = (discount.toFixed(2));
      var total = discount * <?= $orderInfo['Quantity']?>;
      document.getElementById("total-1").innerHTML = (total.toFixed(2));
      document.getElementById("total-2").innerHTML = (total.toFixed(2));
      var tproduct = total * 2; 
      document.getElementById("tproduct").innerHTML = (tproduct.toFixed(2));
      var alltotal = tproduct + <?= $shipping['ShippingCost'] ?>;
      document.getElementById("alltotal").innerHTML = (alltotal.toFixed(2));
    </script>

  </body>
</html>
