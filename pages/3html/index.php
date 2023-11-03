<?php require_once __DIR__.'/db.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/pages/3html/globals.css" />
    <link rel="stylesheet" href="/pages/3html/styleguide.css" />
    <link rel="stylesheet" href="/pages/3html/style.css" />
    <title>Product</title>
    <link rel="icon" type="image/x-icon" href="/pages/Dealflow.ico">
  </head>
  <body>
    <div class="item-card">
      <div class="div">
        <div class="overlap">
          <div class="b">
            <div class="overlap-group">
              <img class="rectangle" src="/pages/3html/img/rectangle-62.png" />
              <div class="banner"></div>
              <div class="seargh">
                <div class="overlap-group-2">
                  <img class="iconsax-linear" src="/pages/3html/img/iconsax-linear-searchnormal1.svg" />
                  <p class="text-wrapper">What are you looking for?</p>
                </div>
              </div>
            </div>
          </div>
          <div class="header"></div>
          <div class="group">
            <img class="vector" src="/pages/3html/img/vector-3.svg" />
            <div class="group-2">
              <div class="text-wrapper-2">UAH</div>
              <div class="text-wrapper-3">₴</div>
            </div>
            <div class="group-3">
              <div class="text-wrapper-4">English</div>
              <img class="img" src="/pages/3html/img/united-kingdom-gb.svg" />
            </div>
          </div>
          <img class="frame" src="/pages/3html/img/frame-70.svg" />
          <div class="frame-2">
            <img class="img-2" src="/pages/3html/img/iconsax-linear-category2.svg" />
            <div class="text-wrapper-5"><select> 
              <option value="Catalog">Catalog
                
              </option>
             <option value="Smartphones, TV &amp; Elec.">Smartphones, TV &amp; Elec.</option>
             <option value="Comp. &amp; Laptops" >Comp. &amp; Laptops<a href = "/catalog"></a></option>
             <option value="Fashion">Fashion</option>
             <option value="Beauty &amp; Health">Beauty &amp; Health</option>
             <option value="Kids">Kids</option>
             <option value="Sports &amp; Hobbies">Sports &amp; Hobbies</option>
             <option value="Home &amp; Appliances">Home &amp; Appliances</option>
             <option value="Tools &amp; Auto">Tools &amp; Auto</option>
             <option value="Garden">Garden</option>
             <option value="Pets">Pets</option>
             <option value="Office">Office</option>
             <option value="Gamers">Gamers</option>
             <option value="Alcohol">Alcohol</option>
           
            </select></div>
          </div>
          <div class="group-4">
            <a href="/"><img class="LOGO" src="/pages/3html/img/logo.svg" /></a>
            <div class="overlap-group"><img class="frame-3" src="/pages/3html/img/frame.svg" /></div>
          </div>
        </div>
        <div class="frame-4">
          <div class="overlap-group-wrapper">
            <div class="overlap-group-3">
              <div class="card">
                <div class="preview"><img class="img-3" src="/pages/3html/img/<?= $similar[0]['ImageURL'] ?>" /></div>
                <div class="item-name-wrapper"><p class="item-name"><?= $similar[0]['Model'] ?></p></div>
                <div class="price">
                  <p class="element"><span class="span">$ </span> <span class="text-wrapper-6"><?= $similar[0]['Price'] ?></span></p>
                </div>
              </div>
              <div class="cart"><img class="img-2" src="/pages/3html/img/vuesax-linear-shopping-cart-1.svg" /></div>
              <img class="like-button" src="/pages/3html/img/likebutton.svg" />
              <div class="div-wrapper"><div class="text-wrapper-7">HOT</div></div>
            </div>
          </div>
          <div class="overlap-group-wrapper">
            <div class="overlap-group-3">
              <div class="card">
                <div class="preview"><img class="image" src="/pages/3html/img/<?= $similar[3]['ImageURL'] ?>" /></div>
                <div class="item-name-wrapper">
                  <p class="item-name"><?= $similar[3]['Model'] ?></p>
                </div>
                <div class="price">
                  <p class="element"><span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $similar[3]['Price'] ?></span></p>
                </div>
              </div>
              <div class="cart"><img class="img-2" src="/pages/3html/img/vuesax-linear-shopping-cart-1.svg" /></div>
              <img class="like-button" src="/pages/3html/img/likebutton.svg" />
              <div class="div-wrapper"><div class="text-wrapper-7">HOT</div></div>
            </div>
          </div>
          <div class="overlap-group-wrapper">
            <div class="overlap-group-3">
              <div class="card">
                <div class="preview"><img class="img-3" src="/pages/3html/img/<?= $similar[4]['ImageURL'] ?>" /></div>
                <div class="item-name-wrapper"><div class="item-name"><?= $similar[4]['Model'] ?></div></div>
                <div class="price">
                  <p class="element"><span class="span">$ </span> <span class="text-wrapper-6"><?= $similar[4]['Price'] ?></span></p>
                </div>
              </div>
              <div class="cart"><img class="img-2" src="/pages/3html/img/vuesax-linear-shopping-cart-1.svg" /></div>
              <img class="like-button" src="/pages/3html/img/likebutton.svg" />
              <div class="div-wrapper"><div class="text-wrapper-7">HOT</div></div>
            </div>
          </div>
          <div class="overlap-group-wrapper">
            <div class="overlap-group-3">
              <div class="card">
                <div class="preview"><img class="img-3" src="/pages/3html/img/<?= $similar[2]['ImageURL'] ?>" /></div>
                <div class="item-name-wrapper"><div class="item-name"><?= $similar[2]['Model'] ?></div></div>
                <div class="price">
                  <p class="element"><span class="span">$ </span> <span class="text-wrapper-6"><?= $similar[2]['Price'] ?></span></p>
                </div>
              </div>
              <div class="cart"><img class="img-2" src="/pages/3html/img/vuesax-linear-shopping-cart-1.svg" /></div>
              <img class="like-button" src="/pages/3html/img/likebutton.svg" />
              <div class="div-wrapper"><div class="text-wrapper-7">HOT</div></div>
            </div>
          </div>
          <div class="overlap-group-wrapper">
            <div class="overlap-group-3">
              <div class="card">
                <div class="preview"><img class="img-3" src="/pages/3html/img/<?= $similar[1]['ImageURL'] ?>" /></div>
                <div class="item-name-wrapper"><p class="item-name"><?= $similar[1]['Model'] ?></p></div>
                <div class="price">
                  <p class="element"><span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $similar[1]['Price'] ?></span></p>
                </div>
              </div>
              <div class="cart"><img class="img-2" src="/pages/3html/img/vuesax-linear-shopping-cart-1.svg" /></div>
              <img class="like-button" src="/pages/3html/img/likebutton.svg" />
              <div class="div-wrapper"><div class="text-wrapper-7">HOT</div></div>
            </div>
          </div>
        </div>
        <div class="text-wrapper-10">SIMILAR</div>
        <p class="p">You may also be interested in</p>
        <p class="text-wrapper-11"><?= $product['Model'] ?></p>
        <div class="element-wrapper"><img class="img-3" src="/pages/3html/img/1-1.png" /></div>
        <div class="overlap-2">
          <div class="image-wrapper"><img class="image-2" src="/pages/3html/img/<?= $product['ImageURL'] ?>" /></div>
          <img class="vuesax-linear-arrow" src="/pages/3html/img/vuesax-linear-arrow-right.svg" />
          <img class="vuesax-linear-arrow-2" src="/pages/3html/img/vuesax-linear-arrow-left.svg" />
        </div>
        <div class="text-wrapper-12">/ Computers / Laptops</div>
        <img class="vuesax-linear-home" src="/pages/3html/img/vuesax-linear-home-2-1.svg" />
        <img class="line" src="/pages/3html/img/line-4.svg" />
        <div class="text-wrapper-13">All about product</div>
        <div class="text-wrapper-14"><a href="/catalog/ASUS_ROG_Strix_Scar_18/features">Features</a></div>
        <div class="text-wrapper-15"><a href="/catalog/ASUS_ROG_Strix_Scar_18/reviews">Reviews</a></div>
        <div class="text-wrapper-16"><a href="/catalog/ASUS_ROG_Strix_Scar_18/questions">Questions</a></div>
        <div class="overlap-3">
          <p class="text-wrapper-17"><?= $product['Model'] ?></p>
        </div>
        <img class="group-5" src="/pages/3html/img/group-111.png" />
        <div class="text-wrapper-18">4 reviews</div>
        <div class="text-wrapper-19">Code: <?= $product['Code'] ?></div>
        <div class="img-wrapper"><img class="image-3" src="/pages/3html/img/<?= $image[2]['ImageURL'] ?>" /></div>
        <div class="frame-5"><img class="image-3" src="/pages/3html/img/<?= $image[3]['ImageURL'] ?>" /></div>
        <div class="frame-6"><img class="image-3" src="/pages/3html/img/<?= $image[4]['ImageURL'] ?>" /></div>
        <div class="frame-7"><img class="image-3" src="/pages/3html/img/<?= $image[5]['ImageURL'] ?>" /></div>
        <div class="frame-8"><img class="image-3" src="/pages/3html/img/<?= $image[6]['ImageURL'] ?>" /></div>
        <div class="frame-9"><img class="image-3" src="/pages/3html/img/<?= $image[7]['ImageURL'] ?>" /></div>
        <div class="frame-10"><img class="image-3" src="/pages/3html/img/<?= $image[8]['ImageURL'] ?>" /></div>
        <div class="overlap-4">
          <div class="frame-11">
            <div class="text-wrapper-20">Seller:</div>
            <div class="text-wrapper-21">DEALFLOW</div>
            <div class="price-2">
              <div class="text-wrapper-22">$ <?= $product['Price'] ?></div>
              <p class="element-2"><span class="text-wrapper-23">$ </span> <span class="text-wrapper-6" id="discount"></span></p>
            </div>
            <img class="img-4" src="/pages/3html/img/iconsax-linear-heart-1.svg" />
            <div class="frame-12">
              <img class="img-2" src="/pages/3html/img/vuesax-linear-shopping-cart-1.svg" />
              <div class="text-wrapper-24">Buy</div>
            </div>
            <img class="vuesax-linear-arrow-3" src="/pages/3html/img/vuesax-linear-arrow-swap-horizontal-2.svg" />
          </div>
        </div>
        <div class="frame-13">
          <img class="vuesax-linear" src="/pages/3html/img/vuesax-linear-location-1.svg" />
          <img class="line-2" src="/pages/3html/img/line-5.svg" />
          <img class="vuesax-linear-2" src="/pages/3html/img/vuesax-linear-buildings.svg" />
          <img class="vuesax-linear-group" src="/pages/3html/img/vuesax-linear-group.svg" />
          <div class="text-wrapper-25">DF</div>
          <p class="text-wrapper-26">Courier delivery DealFlow, Meest POSTA, Nova Posta</p>
          <p class="text-wrapper-27">Self-delivery from postal operator branches</p>
          <div class="text-wrapper-28">Self-collection from DealFlow outlets</div>
          <div class="text-wrapper-29">Free</div>
          <div class="text-wrapper-30">$ 15-20</div>
          <div class="text-wrapper-31">$ 5-10</div>
          <p class="delievdeliveryer-to">
            <span class="text-wrapper-32">Delievdeliveryer to: </span>
            <span class="text-wrapper-6">Khmelnytskyi, Ukraine</span>
          </p>
          <img class="img-4" src="/pages/3html/img/vuesax-linear-arrow-up-1.svg" />
        </div>
        <div class="frame-14">
          <img class="iconsax-linear-2" src="/pages/3html/img/iconsax-linear-ticketdiscount.svg" />
          <p class="text-wrapper-33">Discounts on Acer gaming laptops, payment in installments up to 12 payments!</p>
          <p class="text-wrapper-34">From August 25 to September 15, 2023</p>
        </div>
        <p class="screen-IPS">
          <?= $product['ShortFeatures'] ?>
        </p>
        <img class="screenshot" src="/pages/3html/img/<?= $image[0]['ImageURL'] ?>" />
        <p class="play-stream-and">
          <span class="text-wrapper-35"><?= $paragraphs[0] ?><br /></span>
          <span class="text-wrapper-36">
          <?= $paragraphs[1] ?>
          </span>
        </p>
        
        <img class="screenshot-2" src="/pages/3html/img/<?= $image[1]['ImageURL'] ?>" />
        <p class="the-ultimate-in">
          <span class="text-wrapper-35"><?= $paragraphs[2] ?><br /></span>
          <span class="text-wrapper-36">
          <?= $paragraphs[3] ?>
          </span>
        </p>
        <div class="text-wrapper-37">DESCRIPTION</div>
        <footer class="FOOTER">
          <div class="f">
            <div class="overlap-group-4">
              <div class="rectangle-2"></div>
              <div class="rectangle-3"></div>
              <div class="group-6">
                <div class="element-DEALFLOW">2023&nbsp;&nbsp;DEALFLOW</div>
                <img class="img" src="/pages/3html/img/vuesax-linear-copyright.svg" />
              </div>
              <div class="social-media">
                <p class="text-wrapper-38">FOLLOW US ON SOCIAL MEDIA</p>
                <img class="vuesax-linear-3" src="/pages/3html/img/vuesax-linear-facebook.svg" />
                <img class="vuesax-linear-4" src="/pages/3html/img/vuesax-linear-instagram.svg" />
                <img class="twitter" src="/pages/3html/img/twitter.svg" />
              </div>
              <div class="teleph">
                <img class="img" src="/pages/3html/img/vuesax-linear-call.svg" />
                <div class="text-wrapper-39">+380 (96) 836 4450</div>
              </div>
              <div class="group-7">
                <div class="text-wrapper-40">About DealFlow</div>
                <div class="text-wrapper-41">Terms &amp; Support</div>
                <div class="text-wrapper-42">Contacts</div>
                <div class="text-wrapper-43">All Categories</div>
                <a href="/about">
                <div class="text-wrapper-44">About Us</div></a>
              </div>
              <div class="group-8">
                <div class="text-wrapper-40">Support</div>
                <div class="text-wrapper-41">Returning goods</div>
                <div class="text-wrapper-42">Delivery &amp; Payment</div>
                <div class="text-wrapper-43">Service centers</div>
                <a href="/help">
                <div class="text-wrapper-44">Help</div></a>
              </div>
              <div class="group-9">
                <div class="text-wrapper-40">Bonus account</div>
                <div class="text-wrapper-41">Membership</div>
                <div class="text-wrapper-42">Gift certificates</div>
                <div class="text-wrapper-43">DealFlow Exchange</div>
                <a href="/services">
                  <div class="text-wrapper-44">Services</div></a>
              </div>
              <div class="group-10">
                <div class="text-wrapper-40">Sell on DealFlow</div>
                <div class="text-wrapper-41">Cooperation with us</div>
                <div class="text-wrapper-42">Franchising</div>
                <a
                  href="https://rozetka.com.ua/ua/news-articles-promotions/promotions/store_search/"
                  target="_blank"
                  rel="noopener noreferrer"
                  ><div class="text-wrapper-43">Renting premises</div></a
                >
                
                <a href="/partners">
                  <div class="text-wrapper-44">For partners</div>
             </a> </div>
              <p class="WITH-US-IT-IS-ALWAYS">WITH US IT IS ALWAYS CONVENIENT,<br />FAST AND RELIABLE</p>
            </div>
          </div>
        </footer>
        <p class="technical">
          *Technical specifications vary depending on the specific product model - see the data sheet. <br />*All images
          are for illustrative purposes only.
        </p>
      </div>
    </div>
  </body>
  <script>
    var discount = <?= $product['Price'] ?> - ((<?= $product['Price'] ?> * <?= $product['DiscountPercentage'] ?>) / 100);
      document.getElementById("discount").innerHTML = (discount.toFixed(2));
  </script>
</html>
