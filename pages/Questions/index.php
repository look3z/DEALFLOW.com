<?php require_once __DIR__.'/db.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/pages/Questions/globals.css" />
    <link rel="stylesheet" href="/pages/Questions/styleguide.css" />
    <link rel="stylesheet" href="/pages/Questions/style.css" />
    <title>Questions</title>
    <link rel="icon" type="image/x-icon" href="/pages/Dealflow.ico">
  </head>
  <body>
    <div class="reviews">
      <div class="div">
        <div class="overlap">
          <div class="b">
            <div class="overlap-group">
              <img class="rectangle" src="/pages/Questions/img/rectangle-62.png" />
              <div class="banner"></div>
              <div class="seargh">
                <div class="overlap-group-2">
                  <img class="iconsax-linear" src="/pages/Questions/img/iconsax-linear-searchnormal1.svg" />
                  <p class="text-wrapper">What are you looking for?</p>
                </div>
              </div>
            </div>
          </div>
          <div class="header"></div>
          <div class="group">
            <img class="vector" src="/pages/Questions/img/vector-3.svg" />
            <div class="group-2">
              <div class="text-wrapper-2">UAH</div>
              <div class="text-wrapper-3">₴</div>
            </div>
            <div class="group-3">
              <div class="text-wrapper-4">English</div>
              <img class="img" src="/pages/Questions/img/united-kingdom-gb.svg" />
            </div>
          </div>
          <a href="/"><img class="frame" src="/pages/Questions/img/frame-70.svg" />
          </a>
          <div class="frame-2">
            <img class="img-2" src="/pages/Questions/img/iconsax-linear-category2.svg" />
            <div class="text-wrapper-5">Catalog</div>
          </div>
          <div class="group-4"><a href="/">
            <img class="LOGO" src="/pages/Questions/img/logo.svg" />
            <div class="overlap-2">
              <div class="ellipse"></div>
              <img class="frame-3" src="/pages/Questions/img/frame.svg" />
            </a></div>
          </div>
        </div>
        <div class="group-5">
          <div class="frame-4">
            <div class="item-card">
              <div class="overlap-group-3">
                <div class="card">
                  <div class="preview"><img class="image" src="/pages/Questions/img/<?= $similar[0]['ImageURL'] ?>" /></div>
                  <div class="item-name-wrapper"><p class="item-name"><?= $similar[0]['Model'] ?></p></div>
                  <div class="price">
                    <p class="element"><span class="span">$ </span> <span class="text-wrapper-6"><?= $similar[0]['Price'] ?></span></p>
                  </div>
                </div>
                <div class="cart"><img class="img-2" src="/pages/Questions/img/vuesax-linear-shopping-cart-1.svg" /></div>
                <img class="like-button" src="/pages/Questions/img/likebutton-1.svg" />
                <div class="div-wrapper"><div class="text-wrapper-7">HOT</div></div>
              </div>
            </div>
            <div class="item-card">
              <div class="overlap-group-3">
                <div class="card">
                  <div class="preview"><img class="image-2" src="/pages/Questions/img/<?= $similar[3]['ImageURL'] ?>" /></div>
                  <div class="item-name-wrapper">
                    <p class="item-name"><?= $similar[3]['Model'] ?></p>
                  </div>
                  <div class="price">
                    <p class="element">
                      <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $similar[3]['Price'] ?></span>
                    </p>
                  </div>
                </div>
                <div class="cart"><img class="img-2" src="/pages/Questions/img/vuesax-linear-shopping-cart-1.svg" /></div>
                <img class="like-button" src="/pages/Questions/img/likebutton-1.svg" />
                <div class="div-wrapper"><div class="text-wrapper-7">HOT</div></div>
              </div>
            </div>
            <div class="item-card">
              <div class="overlap-group-3">
                <div class="card">
                  <div class="preview"><img class="image" src="/pages/Questions/img/<?= $similar[4]['ImageURL'] ?>" /></div>
                  <div class="item-name-wrapper"><div class="item-name"><?= $similar[4]['Model'] ?></div></div>
                  <div class="price">
                    <p class="element"><span class="span">$ </span> <span class="text-wrapper-6"><?= $similar[4]['Price'] ?></span></p>
                  </div>
                </div>
                <div class="cart"><img class="img-2" src="/pages/Questions/img/vuesax-linear-shopping-cart-1.svg" /></div>
                <img class="like-button" src="/pages/Questions/img/likebutton-1.svg" />
                <div class="div-wrapper"><div class="text-wrapper-7">HOT</div></div>
              </div>
            </div>
            <div class="item-card">
              <div class="overlap-group-3">
                <div class="card">
                  <div class="preview"><img class="image" src="/pages/Questions/img/<?= $similar[2]['ImageURL'] ?>" /></div>
                  <div class="item-name-wrapper"><div class="item-name"><?= $similar[2]['Model'] ?></div></div>
                  <div class="price">
                    <p class="element"><span class="span">$ </span> <span class="text-wrapper-6"><?= $similar[2]['Price'] ?></span></p>
                  </div>
                </div>
                <div class="cart"><img class="img-2" src="/pages/Questions/img/vuesax-linear-shopping-cart-1.svg" /></div>
                <img class="like-button" src="/pages/Questions/img/likebutton-1.svg" />
                <div class="div-wrapper"><div class="text-wrapper-7">HOT</div></div>
              </div>
            </div>
            <div class="item-card">
              <div class="overlap-group-3">
                <div class="card">
                  <div class="preview"><img class="image" src="/pages/Questions/img/<?= $similar[1]['ImageURL'] ?>" /></div>
                  <div class="item-name-wrapper"><p class="item-name"><?= $similar[1]['Model'] ?></p></div>
                  <div class="price">
                    <p class="element">
                      <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $similar[1]['Price'] ?></span>
                    </p>
                  </div>
                </div>
                <div class="cart"><img class="img-2" src="/pages/Questions/img/vuesax-linear-shopping-cart-1.svg" /></div>
                <img class="like-button" src="/pages/Questions/img/likebutton-1.svg" />
                <div class="div-wrapper"><div class="text-wrapper-7">HOT</div></div>
              </div>
            </div>
          </div>
          <div class="text-wrapper-10">SIMILAR</div>
          <p class="p">You may also be interested in</p>
        </div>
        <div class="text-wrapper-11">/ Computers / Laptops</div>
        <img class="vuesax-linear-home" src="/pages/Questions/img/vuesax-linear-home-2-1.svg" />
        <img class="line" src="/pages/Questions/img/line-4.svg" />
        <div class="text-wrapper-12"><a href="/catalog/ASUS_ROG_Strix_Scar_18">All about product</a></div>
        <div class="text-wrapper-13"><a href="/catalog/ASUS_ROG_Strix_Scar_18/features">Features</a></div>
        <div class="text-wrapper-14"><a href="/catalog/ASUS_ROG_Strix_Scar_18/reviews">Reviews</a></div>
        <div class="text-wrapper-15">Questions</div>
        <p class="text-wrapper-16"><?= $product['Model'] ?></p>
        <img class="group-6" src="/pages/Questions/img/group-111.png" />
        <div class="text-wrapper-17">4 reviews</div>
        <div class="text-wrapper-18">Code: <?= $product['Code'] ?></div>
        <div class="frame-5">
          <div class="text-wrapper-19">Seller:</div>
          <div class="text-wrapper-20">DEALFLOW</div>
          <div class="price-2">
            <div class="text-wrapper-21">$ <?= $product['Price'] ?></div>
            <p class="element-2"><span class="text-wrapper-22">$ </span> <span class="text-wrapper-6" id="discount"></span></p>
          </div>
          <img class="iconsax-linear-heart" src="/pages/Questions/img/iconsax-linear-heart.svg" />
          <div class="frame-6">
            <img class="img-2" src="/pages/Questions/img/vuesax-linear-shopping-cart-1.svg" />
            <div class="text-wrapper-23">Buy</div>
          </div>
          <img class="vuesax-linear-arrow" src="/pages/Questions/img/vuesax-linear-arrow-swap-horizontal-1.svg" />
        </div>
        <footer class="FOOTER">
          <div class="f">
            <div class="overlap-group-4">
              <div class="rectangle-2"></div>
              <div class="rectangle-3"></div>
              <div class="group-7">
                <div class="element-DEALFLOW">2023&nbsp;&nbsp;DEALFLOW</div>
                <img class="img" src="/pages/Questions/img/vuesax-linear-copyright.svg" />
              </div>
              <div class="social-media">
                <p class="text-wrapper-24">FOLLOW US ON SOCIAL MEDIA</p>
                <img class="vuesax-linear" src="/pages/Questions/img/vuesax-linear-facebook-1.svg" />
                <img class="vuesax-linear-2" src="/pages/Questions/img/vuesax-linear-instagram-1.svg" />
                <img class="twitter" src="/pages/Questions/img/twitter.svg" />
              </div>
              <div class="teleph">
                <img class="img" src="/pages/Questions/img/vuesax-linear-call.svg" />
                <div class="text-wrapper-25">+380 (96) 836 4450</div>
              </div>
              <div class="group-8">
                <div class="text-wrapper-26">About DealFlow</div>
                <div class="text-wrapper-27">Terms &amp; Support</div>
                <div class="text-wrapper-28">Contacts</div>
                <div class="text-wrapper-29">All Categories</div>
                <a href="/about">
                <div class="text-wrapper-30">About Us</div></a>
              </div>
              <div class="group-9">
                <div class="text-wrapper-26">Support</div>
                <div class="text-wrapper-27">Returning goods</div>
                <div class="text-wrapper-28">Delivery &amp; Payment</div>
                <div class="text-wrapper-29">Service centers</div>
                <a href="/help">
                <div class="text-wrapper-30">Help</div></a>
              </div>
              <div class="group-10">
                <div class="text-wrapper-26">Bonus account</div>
                <div class="text-wrapper-27">Membership</div>
                <div class="text-wrapper-28">Gift certificates</div>
                <div class="text-wrapper-29">DealFlow Exchange</div>
                <a href="/services">
                <div class="text-wrapper-30">Services</div></a>
              </div>
              <div class="group-11">
                <div class="text-wrapper-26">Sell on DealFlow</div>
                <div class="text-wrapper-27">Cooperation with us</div>
                <div class="text-wrapper-28">Franchising</div>
                <a
                  href="https://rozetka.com.ua/ua/news-articles-promotions/promotions/store_search/"
                  target="_blank"
                  rel="noopener noreferrer"
                  ><div class="text-wrapper-29">Renting premises</div></a
                >
                <a href="/partners">
                <div class="text-wrapper-30">For partners</div></a>
              </div>
              <p class="WITH-US-IT-IS-ALWAYS">WITH US IT IS ALWAYS CONVENIENT,<br />FAST AND RELIABLE</p>
            </div>
          </div>
        </footer>
        <div class="image-wrapper"><img class="image-3" src="/pages/Questions/img/<?= $product['ImageURL'] ?>" /></div>
        <div class="frame-7">
          <div class="text-wrapper-31"><?= $questions[0]['UserName'] ?></div>
          <img class="vector-2" src="/pages/Questions/img/vector-4-2.svg" />
          <p class="text-wrapper-32">
            <?= $questions[0]['CommentText'] ?>
          </p>
        </div>
        <div class="frame-8">
          <div class="text-wrapper-31"><?= $questions[0]['UserName'] ?></div>
          <img class="vector-2" src="/pages/Questions/img/vector-4-2.svg" />
          <p class="text-wrapper-32">
            <?= $questions[0]['CommentText'] ?>
          </p>
        </div>
        <div class="frame-9">
          <div class="text-wrapper-31"><?= $questions[1]['UserName'] ?></div>
          <img class="vector-3" src="/pages/Questions/img/vector-4.svg" />
          <p class="text-wrapper-33">
            <?= $questions[1]['CommentText'] ?>
          </p>
        </div>
        <div class="frame-10">
          <div class="text-wrapper-31"><?= $questions[1]['UserName'] ?></div>
          <img class="vector-3" src="/pages/Questions/img/vector-4.svg" />
          <p class="text-wrapper-33">
            <?= $questions[1]['CommentText'] ?>
          </p>
        </div>
        <img class="vector-4" src="/pages/Questions/img/vector-6.svg" />
        <img class="vector-5" src="/pages/Questions/img/vector-6.svg" />
      </div>
    </div>
  </body>
  <script>
    var discount = <?= $product['Price'] ?> - ((<?= $product['Price'] ?> * <?= $product['DiscountPercentage'] ?>) / 100);
      document.getElementById("discount").innerHTML = (discount.toFixed(2));
  </script>
</html>
