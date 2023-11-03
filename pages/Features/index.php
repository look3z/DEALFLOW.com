<?php require_once __DIR__.'/db.php'; ?>


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/pages/Features/globals.css" />
    <link rel="stylesheet" href="/pages/Features/styleguide.css" />
    <link rel="stylesheet" href="/pages/Features/style.css" />
        <title>Features</title>
    <link rel="icon" type="image/x-icon" href="/pages/Dealflow.ico">
  </head>
  <body>
    <div class="features">
      <div class="div">
        <div class="overlap">
          <div class="b">
            <div class="overlap-group">
              <img class="rectangle" src="/pages/Features/img/rectangle-62.png" />
              <div class="banner"></div>
              <div class="seargh">
                <div class="overlap-group-2">
                  <img class="iconsax-linear" src="/pages/Features/img/iconsax-linear-searchnormal1.svg" />
                  <p class="text-wrapper">What are you looking for?</p>
                </div>
              </div>
            </div>
          </div>
          <div class="header"></div>
          <div class="group"><a href="/">
            <img class="LOGO" src="/pages/Features/img/logo.svg" />
            <div class="frame-wrapper"><img class="frame" src="/pages/Features/img/frame.svg" /></div>
          </a></div>
          <div class="group-2">
            <img class="vector" src="/pages/Features/img/vector-3.svg" />
            <div class="group-3">
              <div class="text-wrapper-2">UAH</div>
              <div class="text-wrapper-3">₴</div>
            </div>
            <div class="group-4">
              <div class="text-wrapper-4">English</div>
              <img class="img" src="/pages/Features/img/united-kingdom-gb.svg" />
            </div>
          </div>
          <img class="frame-2" src="/pages/Features/img/frame-70.svg" />
          <div class="frame-3">
            <img class="img-2" src="/pages/Features/img/iconsax-linear-category2.svg" />
            <div class="text-wrapper-5">Catalog</div>
          </div>
        </div>
        <div class="group-5">
          <div class="frame-4">
            <div class="item-card">
              <div class="overlap-group-3">
                <div class="card">
                  <div class="preview"><img class="image" src="/pages/Features/img/<?= $similar[0]['ImageURL'] ?>" /></div>
                  <div class="item-name-wrapper"><p class="item-name"><?= $similar[0]['Model'] ?></p></div>
                  <div class="price">
                    <p class="element"><span class="span">$ </span> <span class="text-wrapper-6"><?= $similar[0]['Price'] ?></span></p>
                  </div>
                </div>
                <div class="cart"><img class="img-2" src="/pages/Features/img/vuesax-linear-shopping-cart-6.svg" /></div>
                <img class="like-button" src="/pages/Features/img/likebutton.svg" />
                <div class="div-wrapper"><div class="text-wrapper-7">HOT</div></div>
              </div>
            </div>
            <div class="item-card">
              <div class="overlap-group-3">
                <div class="card">
                  <div class="preview"><img class="image-2" src="/pages/Features/img/<?= $similar[3]['ImageURL'] ?>" /></div>
                  <div class="item-name-wrapper">
                    <p class="item-name"><?= $similar[3]['Model'] ?></p>
                  </div>
                  <div class="price">
                    <p class="element">
                      <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $similar[3]['Price'] ?></span>
                    </p>
                  </div>
                </div>
                <div class="cart"><img class="img-2" src="/pages/Features/img/vuesax-linear-shopping-cart-6.svg" /></div>
                <img class="like-button" src="/pages/Features/img/likebutton.svg" />
                <div class="div-wrapper"><div class="text-wrapper-7">HOT</div></div>
              </div>
            </div>
            <div class="item-card">
              <div class="overlap-group-3">
                <div class="card">
                  <div class="preview"><img class="image" src="/pages/Features/img/<?= $similar[4]['ImageURL'] ?>" /></div>
                  <div class="item-name-wrapper"><div class="item-name"><?= $similar[4]['Model'] ?></div></div>
                  <div class="price">
                    <p class="element"><span class="span">$ </span> <span class="text-wrapper-6"><?= $similar[4]['Price'] ?></span></p>
                  </div>
                </div>
                <div class="cart"><img class="img-2" src="/pages/Features/img/vuesax-linear-shopping-cart-6.svg" /></div>
                <img class="like-button" src="/pages/Features/img/likebutton.svg" />
                <div class="div-wrapper"><div class="text-wrapper-7">HOT</div></div>
              </div>
            </div>
            <div class="item-card">
              <div class="overlap-group-3">
                <div class="card">
                  <div class="preview"><img class="image" src="/pages/Features/img/<?= $similar[2]['ImageURL'] ?>" /></div>
                  <div class="item-name-wrapper"><div class="item-name"><?= $similar[2]['Model'] ?></div></div>
                  <div class="price">
                    <p class="element"><span class="span">$ </span> <span class="text-wrapper-6"><?= $similar[2]['Price'] ?></span></p>
                  </div>
                </div>
                <div class="cart"><img class="img-2" src="/pages/Features/img/vuesax-linear-shopping-cart-6.svg" /></div>
                <img class="like-button" src="/pages/Features/img/likebutton.svg" />
                <div class="div-wrapper"><div class="text-wrapper-7">HOT</div></div>
              </div>
            </div>
            <div class="item-card">
              <div class="overlap-group-3">
                <div class="card">
                  <div class="preview"><img class="image" src="/pages/Features/img/<?= $similar[1]['ImageURL'] ?>" /></div>
                  <div class="item-name-wrapper"><p class="item-name"><?= $similar[1]['Model'] ?></p></div>
                  <div class="price">
                    <p class="element">
                      <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $similar[1]['Price'] ?></span>
                    </p>
                  </div>
                </div>
                <div class="cart"><img class="img-2" src="/pages/Features/img/vuesax-linear-shopping-cart-6.svg" /></div>
                <img class="like-button" src="/pages/Features/img/likebutton.svg" />
                <div class="div-wrapper"><div class="text-wrapper-7">HOT</div></div>
              </div>
            </div>
          </div>
          <div class="text-wrapper-10">SIMILAR</div>
          <p class="p">You may also be interested in</p>
        </div>
        <div class="text-wrapper-11">/ Computers / Laptops</div>
        <img class="vuesax-linear-home" src="/pages/Features/img/vuesax-linear-home-2.svg" />
        <img class="line" src="/pages/Features/img/line-4.svg" />
        <img class="line-2" src="/pages/Features/img/line-5.svg" />
        <img class="line-3" src="/pages/Features/img/line-7.svg" />
        <img class="line-4" src="/pages/Features/img/line-9.svg" />
        <img class="line-5" src="/pages/Features/img/line-9.svg" />
        <div class="text-wrapper-12"><a href="/catalog/ASUS_ROG_Strix_Scar_18">All about product</a></div>
        <div class="text-wrapper-13">Features</div>
        <div class="text-wrapper-14"><a href="/catalog/ASUS_ROG_Strix_Scar_18/reviews">Reviews</a></div>
        <div class="text-wrapper-15"><a href ="/catalog/ASUS_ROG_Strix_Scar_18/questions">Questions</a></div>
        <div class="overlap-2">
          <p class="text-wrapper-16"><?= $product['Model'] ?></p>
        </div>
        <img class="group-6" src="/pages/Features/img/group-111.png" />
        <div class="text-wrapper-18">4 reviews</div>
        <div class="text-wrapper-19">Code: <?= $product['Code'] ?></div>
        <div class="frame-5">
          <div class="text-wrapper-20">Seller:</div>
          <div class="text-wrapper-21">DEALFLOW</div>
          <div class="price-2">
            <div class="text-wrapper-22">$ <?= $product['Price'] ?></div>
            <p class="element-2"><span class="text-wrapper-23">$ </span> <span class="text-wrapper-6" id="discount"></span></p>
          </div>
          <img class="iconsax-linear-heart" src="/pages/Features/img/iconsax-linear-heart.svg" />
          <div class="frame-6">
            <img class="img-2" src="/pages/Features/img/vuesax-linear-shopping-cart-6.svg" />
            <div class="text-wrapper-24">Buy</div>
          </div>
          <img class="vuesax-linear-arrow" src="/pages/Features/img/vuesax-linear-arrow-swap-horizontal.svg" />
        </div>
        <footer class="FOOTER">
          <div class="f">
            <div class="overlap-group-4">
              <div class="rectangle-2"></div>
              <div class="rectangle-3"></div>
              <div class="group-7"><a href="/">
                <div class="element-DEALFLOW">2023&nbsp;&nbsp;DEALFLOW</div>
                <img class="img" src="/pages/Features/img/vuesax-linear-copyright-1.svg" />
              </a></div>
              <div class="social-media">
                <p class="text-wrapper-25">FOLLOW US ON SOCIAL MEDIA</p>
                <img class="vuesax-linear" src="/pages/Features/img/vuesax-linear-facebook.svg" />
                <img class="vuesax-linear-2" src="/pages/Features/img/vuesax-linear-instagram.svg" />
                <img class="twitter" src="/pages/Features/img/twitter.svg" />
              </div>
              <div class="teleph">
                <img class="img" src="/pages/Features/img/vuesax-linear-call.svg" />
                <div class="text-wrapper-26">+380 (96) 836 4450</div>
              </div>
              <div class="group-8">
                <div class="text-wrapper-27">About DealFlow</div>
                <div class="text-wrapper-28">Terms &amp; Support</div>
                <div class="text-wrapper-29">Contacts</div>
                <div class="text-wrapper-30">All Categories</div>
                <a href="/about">
                <div class="text-wrapper-31">About Us</div></a>
              </div>
              <div class="group-9">
                <div class="text-wrapper-27">Support</div>
                <div class="text-wrapper-28">Returning goods</div>
                <div class="text-wrapper-29">Delivery &amp; Payment</div>
                <div class="text-wrapper-30">Service centers</div>
                <a href="/help">
                <div class="text-wrapper-31">Help</div></a>
              </div>
              <div class="group-10">
                <div class="text-wrapper-27">Bonus account</div>
                <div class="text-wrapper-28">Membership</div>
                <div class="text-wrapper-29">Gift certificates</div>
                <div class="text-wrapper-30">DealFlow Exchange</div>
                <a href="/services">
                <div class="text-wrapper-31">Services</div></a>
              </div>
              <div class="group-11">
                <div class="text-wrapper-27">Sell on DealFlow</div>
                <div class="text-wrapper-28">Cooperation with us</div>
                <div class="text-wrapper-29">Franchising</div>
                <a
                  href="https://rozetka.com.ua/ua/news-articles-promotions/promotions/store_search/"
                  target="_blank"
                  rel="noopener noreferrer"
                  ><div class="text-wrapper-30">Renting premises</div></a
                >
                <a href="/partners">
                <div class="text-wrapper-31">For partners</div></a>
              </div>
              <p class="WITH-US-IT-IS-ALWAYS">WITH US IT IS ALWAYS CONVENIENT,<br />FAST AND RELIABLE</p>
            </div>
          </div>
        </footer>
        <div class="image-wrapper"><img class="image-3" src="/pages/Features/img/image-1.png" /></div>
        <div class="group-12">
          <div class="text-wrapper-32">Screen</div>
          <div class="frame-7">
            <div class="text-wrapper-33">Screen diagonal</div>
            <div class="text-wrapper-34">Screen type</div>
            <div class="text-wrapper-34">Screen refresh rate</div>
            <div class="text-wrapper-34">Resolution</div>
            <div class="text-wrapper-34">Screen coating</div>
            <div class="text-wrapper-34">Built-in camera</div>
          </div>
          <div class="frame-8">
            <div class="text-wrapper-35"><?= $features['ScreenDiagonal'] ?></div>
            <div class="text-wrapper-36"><?= $features['ScreenType'] ?></div>
            <div class="text-wrapper-36"><?= $features['ScreenRefreshRate'] ?></div>
            <div class="text-wrapper-36"><?= $features['Resolution'] ?></div>
            <div class="text-wrapper-36"><?= $features['ScreenCoating'] ?></div>
            <div class="text-wrapper-36"><?= $features['BuiltInCamera'] ?></div>
          </div>
        </div>
        <div class="group-13">
          <div class="text-wrapper-32">CPU</div>
          <div class="frame-7">
            <div class="text-wrapper-33">CPU</div>
            <div class="text-wrapper-34">Operating System</div>
            <div class="text-wrapper-34">Intel processor generation</div>
          </div>
          <div class="frame-8">
            <p class="text-wrapper-35"><?= $features['CPU'] ?></p>
            <div class="text-wrapper-36"><?= $features['OperatingSystem'] ?></div>
            <div class="text-wrapper-36"><?= $features['IntelProcessorGeneration'] ?></div>
          </div>
        </div>
        <div class="group-14">
          <div class="text-wrapper-32">RAM</div>
          <div class="frame-7">
            <div class="text-wrapper-33">RAM capacity</div>
            <div class="text-wrapper-34">RAM type</div>
            <div class="text-wrapper-34">Upgrade option</div>
            <div class="text-wrapper-34">RAM characteristics</div>
          </div>
          <div class="frame-8">
            <div class="text-wrapper-35"><?= $features['RAMCapacity'] ?></div>
            <div class="text-wrapper-36"><?= $features['RAMType'] ?></div>
            <div class="text-wrapper-36"><?= $features['UpgradeOption'] ?></div>
            <div class="text-wrapper-36"><?= $features['RAMCharacteristics'] ?></div>
          </div>
        </div>
        <div class="group-15">
          <div class="text-wrapper-32">GPU</div>
          <div class="frame-7">
            <div class="text-wrapper-33">Video card manufacturer</div>
            <div class="text-wrapper-34">Discrete graphics card</div>
            <div class="text-wrapper-34">Video card memory capacity</div>
            <div class="text-wrapper-34">Video card type</div>
          </div>
          <div class="frame-8">
            <div class="text-wrapper-35"><?= $features['VideoCardManufacturer'] ?></div>
            <div class="text-wrapper-36"><?= $features['DiscreteGraphicsCard'] ?></div>
            <div class="text-wrapper-36"><?= $features['VideoCardMemoryCapacity'] ?></div>
            <div class="text-wrapper-36"><?= $features['VideoCardType'] ?></div>
          </div>
        </div>
        <div class="group-16">
          <div class="text-wrapper-32">Case</div>
          <div class="frame-7">
            <div class="text-wrapper-33">Battery capacity</div>
            <div class="text-wrapper-34">Color</div>
            <div class="text-wrapper-34">Weight, kg</div>
            <div class="text-wrapper-34">Sound System</div>
            <div class="text-wrapper-34">Manipulators</div>
            <p class="text-wrapper-34">Dimensions (W x D x H)</p>
          </div>
          <div class="frame-8">
            <div class="text-wrapper-35"><?= $features['BatteryCapacity'] ?></div>
            <div class="text-wrapper-36"><?= $features['Color'] ?></div>
            <div class="text-wrapper-36"><?= $features['WeightKG'] ?></div>
            <div class="text-wrapper-36"><?= $features['SoundSystem'] ?></div>
            <div class="text-wrapper-36"><?= $features['Manipulators'] ?></div>
            <p class="text-wrapper-36"><?= $features['Dimensions'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script>
    var discount = <?= $product['Price'] ?> - ((<?= $product['Price'] ?> * <?= $product['DiscountPercentage'] ?>) / 100);
      document.getElementById("discount").innerHTML = (discount.toFixed(2));
  </script>
</html>
