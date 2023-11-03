<?php require_once __DIR__.'/db.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/pages/Catalog/globals.css" />
    <link rel="stylesheet" href="/pages/Catalog/styleguide.css" />
    <link rel="stylesheet" href="/pages/Catalog/style.css" />
    <title>Catalog</title>
    <link rel="icon" type="image/x-icon" href="/pages/dealflow/Dealflow.ico">
  </head>
  <body>
    <div class="element-catalog">
      <div class="div">
        <div class="overlap">
          <div class="b">
            <div class="overlap-group">
              <div class="banner"></div>
              <div class="seargh">
                <div class="overlap-group-2">
                  <img class="iconsax-linear" src="/pages/Catalog/img/iconsax-linear-searchnormal1.svg" />
                  <p class="text-wrapper">What are you looking for?</p>
                </div>
              </div>
            </div>
          </div>
          <div class="h">
            <div class="group">
              <img class="vector" src="/pages/Catalog/img/vector-3.svg" />
              <div class="group-2">
                <div class="text-wrapper-2">UAH</div>
                <div class="text-wrapper-3">₴</div>
              </div>
              <div class="group-3">
                <div class="text-wrapper-4">English</div>
                <img class="img" src="/pages/Catalog/img/united-kingdom-gb.svg" />
              </div>
            </div>
            <img class="frame" src="/pages/Catalog/img/frame-70.svg" />
            <div class="frame-2">
              <img class="img-2" src="/pages/Catalog/img/iconsax-linear-category2.svg" />
              <div class="text-wrapper-5">
                <select> 
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
          </div>
          <div class="group-4"><a href="/">
            <img class="LOGO" src="/pages/Catalog/img/logo.svg" /></a>
            <a href="/"><div class="frame-wrapper"><img class="frame-3" src="/pages/Catalog/img/frame.svg" /></div>
            </a></div>
        </div>
        <div class="overlap-2">
          <div class="overlap-3">
            <p class="WITH-US-IT-IS-ALWAYS">WITH US IT IS ALWAYS CONVENIENT,<br />FAST AND RELIABLE</p>
            <div class="item-card">
              <div class="overlap-group-3">
                <div class="card">
                  <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[0]['ImageURL'] ?>" /></div>
                  <div class="item-name-wrapper">
                    <p class="item-name"><?= $product[0]['Model'] ?></p>
                  </div>
                  <div class="price">
                    <p class="element"><span class="span">$ </span> <span class="text-wrapper-6"><?= $product[0]['Price'] ?></span></p>
                  </div>
                </div>
                <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
              </div>
            </div>
            <div class="overlap-wrapper">
              <div class="overlap-group-3">
                <div class="card">
                  <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[3]['ImageURL'] ?>" /></div>
                  <div class="item-name-wrapper">
                    <p class="item-name">
                      <?= $product[3]['Model'] ?>
                    </p>
                  </div>
                  <div class="price">
                    <p class="element">
                      <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[3]['Price'] ?></span>
                    </p>
                  </div>
                </div>
                <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
              </div>
            </div>
          </div>
          <div class="overlap-4">
            <div class="FILTER">
              <div class="overlap-5">
                <div class="overlap-6">
                  <div class="group-wrapper">
                    <div class="group-5">
                      <div class="frame-4">
                        <div class="frame-5">
                          <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                          <div class="text-wrapper-10">ASUS</div>
                        </div>
                        <div class="frame-5">
                          <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                          <div class="text-wrapper-10">Apple</div>
                        </div>
                        <div class="frame-5">
                          <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                          <div class="text-wrapper-10">Dell</div>
                        </div>
                        <div class="frame-5">
                          <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                          <div class="text-wrapper-10">Gigabyte</div>
                        </div>
                        <div class="frame-5">
                          <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                          <div class="text-wrapper-10">HP</div>
                        </div>
                        <div class="frame-5">
                          <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                          <div class="text-wrapper-10">Huawei</div>
                        </div>
                        <div class="frame-5">
                          <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                          <div class="text-wrapper-10">Lenovo</div>
                        </div>
                        <div class="frame-5">
                          <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                          <div class="text-wrapper-10">MSI</div>
                        </div>
                        <div class="frame-5">
                          <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                          <div class="text-wrapper-10">Microsoft</div>
                        </div>
                        <div class="frame-5">
                          <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                          <div class="text-wrapper-10">Samsung</div>
                        </div>
                        <div class="frame-5">
                          <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                          <div class="text-wrapper-10">Xiaomi</div>
                        </div>
                      </div>
                      <div class="text-wrapper-11">Brand</div>
                    </div>
                  </div>
                  <div class="frame-6"><div class="text-wrapper-12">Search</div></div>
                </div>
                <img class="vuesax-linear-arrow" src="/pages/Catalog/img/vuesax-linear-arrow-up-4.svg" />
              </div>
              <div class="group-6">
                <div class="group-7">
                  <div class="frame-7">
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">Intel Core i7</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">Intel Core i5</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">Intel Core i3</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">AMD Ryzen 7</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">AMD Ryzen 5</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">AMD Ryzen 3</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">Intel Pentium</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">AMD Athlon</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">Intel Core i9</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">AMD Ryzen 9</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">M1</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">M2</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">Intel Celeron</div>
                    </div>
                  </div>
                  <div class="text-wrapper-11">CPU</div>
                </div>
              </div>
              <div class="group-8">
                <div class="group-9">
                  <div class="frame-8">
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">17.3&#34;</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">14&#34;</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">12.5&#34;</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">13.3&#34;</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">15.6&#34;</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">11.6&#34;</div>
                    </div>
                  </div>
                  <div class="text-wrapper-11">Display Size</div>
                </div>
              </div>
              <div class="group-10">
                <div class="frame-8">
                  <div class="frame-5">
                    <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                    <div class="text-wrapper-10">Silver</div>
                  </div>
                  <div class="frame-5">
                    <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                    <div class="text-wrapper-10">Black</div>
                  </div>
                  <div class="frame-5">
                    <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                    <div class="text-wrapper-10">Orange</div>
                  </div>
                  <div class="frame-5">
                    <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                    <div class="text-wrapper-10">Copper</div>
                  </div>
                  <div class="frame-5">
                    <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                    <div class="text-wrapper-10">Gold</div>
                  </div>
                  <div class="frame-5">
                    <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                    <div class="text-wrapper-10">Red</div>
                  </div>
                </div>
                <div class="text-wrapper-11">Color</div>
              </div>
              <div class="group-11">
                <div class="group-12">
                  <div class="frame-7">
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/group-108-1.png" />
                      <div class="text-wrapper-13">1366x768</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">1280x720</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">1024x600</div>
                    </div>
                  </div>
                  <div class="text-wrapper-11">Display Resolution</div>
                </div>
              </div>
              <div class="group-13">
                <div class="group-14">
                  <div class="frame-9">
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">Dedicated Card</div>
                    </div>
                    <div class="frame-5">
                      <img class="img-2" src="/pages/Catalog/img/vuesax-linear-quote-up-square-1.svg" />
                      <div class="text-wrapper-10">Integrated Card</div>
                    </div>
                  </div>
                  <div class="graphics-card-type">Graphics<br />Card Type</div>
                </div>
              </div>
              <div class="rectangle-wrapper"><div class="rectangle"></div></div>
              <div class="group-15"><div class="rectangle-2"></div></div>
              <div class="price-2">
                <div class="text-wrapper-11">Price</div>
                <div class="overlap-group-wrapper">
                  <div class="overlap-group-4">
                    <img class="line" src="/pages/Catalog/img/line-2.svg" />
                    <img class="line-2" src="/pages/Catalog/img/line-3.svg" />
                    <div class="ellipse"></div>
                    <div class="ellipse-2"></div>
                  </div>
                </div>
                <div class="group-16">
                  <div class="text-wrapper-14">BY 2999</div>
                  <div class="text-wrapper-15">ТО 12999</div>
                  <img class="group-17" src="/pages/Catalog/img/group-108.png" />
                </div>
              </div>
              <div class="frame-10"><div class="text-wrapper-16">Reset</div></div>
              <div class="frame-11"><div class="text-wrapper-17">Apply</div></div>
              <img class="vuesax-linear-arrow-2" src="/pages/Catalog/img/vuesax-linear-arrow-up-4.svg" />
              <img class="vuesax-linear-arrow-3" src="/pages/Catalog/img/vuesax-linear-arrow-up.svg" />
              <img class="vuesax-linear-arrow-4" src="/pages/Catalog/img/vuesax-linear-arrow-up.svg" />
              <img class="vuesax-linear-arrow-5" src="/pages/Catalog/img/vuesax-linear-arrow-up.svg" />
            </div>
            <div class="frame-12">
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[1]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper"><p class="item-name"><?= $product[1]['Model'] ?></p></div>
                    <div class="price">
                      <p class="element">
                        <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[1]['Price'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[2]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name"><?= $product[2]['Model'] ?></p>
                    </div>
                    <div class="price-3">
                      <div class="element-2">$ <?= $product[2]['Price'] ?></div>
                      <p class="p"><span class="text-wrapper-18">$ </span> <span class="text-wrapper-6" id="discount"></span></p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="banner-2"><div class="text-wrapper-7">SALE</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[0]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name"><?= $product[0]['Model'] ?></p>
                    </div>
                    <div class="price">
                      <p class="element"><span class="span">$ </span> <span class="text-wrapper-6"><?= $product[0]['Price'] ?></span></p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="banner-3"><div class="text-wrapper-7">HOT</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3"><a href="catalog/ASUS_ROG_Strix_Scar_18">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[3]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name">
                        <?= $product[3]['Model'] ?>
                      </p>
                    </div>
                    <div class="price">
                      <p class="element">
                        <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[3]['Price'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </a></div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[1]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name"><?= $product[1]['Model'] ?></p>
                    </div>
                    <div class="price">
                      <p class="element">
                        <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[1]['Price'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[2]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name"><?= $product[2]['Model'] ?></p>
                    </div>
                    <div class="price">
                      <p class="element">
                        <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[2]['Price'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[0]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name"><?= $product[0]['Model'] ?></p>
                    </div>
                    <div class="price">
                      <p class="element"><span class="span">$ </span> <span class="text-wrapper-6"><?= $product[0]['Price'] ?></span></p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[3]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper"><div class="item-name"><?= $product[3]['Model'] ?></div></div>
                    <div class="price">
                      <p class="element">
                        <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[3]['Price'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[1]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name"><?= $product[1]['Model'] ?></p>
                    </div>
                    <div class="price">
                      <p class="element">
                        <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[1]['Price'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[2]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name"><?= $product[2]['Model'] ?></p>
                    </div>
                    <div class="price">
                      <p class="element">
                        <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[2]['Price'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[0]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name"><?= $product[0]['Model'] ?></p>
                    </div>
                    <div class="price">
                      <p class="element"><span class="span">$ </span> <span class="text-wrapper-6"><?= $product[0]['Price'] ?></span></p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[3]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper"><div class="item-name"><?= $product[3]['Model'] ?></div></div>
                    <div class="price">
                      <p class="element">
                        <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[3]['Price'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[1]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name"><?= $product[1]['Model'] ?></p>
                    </div>
                    <div class="price">
                      <p class="element">
                        <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[1]['Price'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[2]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name"><?= $product[2]['Model'] ?></p>
                    </div>
                    <div class="price">
                      <p class="element">
                        <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[2]['Price'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[0]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name">
                        <?= $product[0]['Model'] ?>
                      </p>
                    </div>
                    <div class="price">
                      <p class="element"><span class="span">$ </span> <span class="text-wrapper-6"><?= $product[0]['Price'] ?></span></p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[3]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <div class="item-name"><?= $product[3]['Model'] ?></div>
                    </div>
                    <div class="price">
                      <p class="element">
                        <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[3]['Price'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[1]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name"><?= $product[1]['Model'] ?></p>
                    </div>
                    <div class="price">
                      <p class="element">
                        <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[1]['Price'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[2]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name"><?= $product[2]['Model'] ?></p>
                    </div>
                    <div class="price">
                      <p class="element">
                        <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[2]['Price'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[0]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name">
                        <?= $product[0]['Model'] ?>
                      </p>
                    </div>
                    <div class="price">
                      <p class="element"><span class="span">$ </span> <span class="text-wrapper-6"><?= $product[0]['Price'] ?></span></p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[3]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper"><div class="item-name"><?= $product[3]['Model'] ?></div></div>
                    <div class="price">
                      <p class="element">
                        <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[3]['Price'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[1]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name"><?= $product[1]['Model'] ?></p>
                    </div>
                    <div class="price">
                      <p class="element">
                        <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[1]['Price'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[2]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name"><?= $product[2]['Model'] ?></p>
                    </div>
                    <div class="price">
                      <p class="element">
                        <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[2]['Price'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[0]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <p class="item-name">
                        <?= $product[0]['Model'] ?>
                      </p>
                    </div>
                    <div class="price">
                      <p class="element"><span class="span">$ </span> <span class="text-wrapper-6"><?= $product[0]['Price'] ?></span></p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
              <div class="item-card-2">
                <div class="overlap-group-3">
                  <div class="card">
                    <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[3]['ImageURL'] ?>" /></div>
                    <div class="item-name-wrapper">
                      <div class="item-name"><?= $product[3]['Model'] ?></div>
                    </div>
                    <div class="price">
                      <p class="element">
                        <span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[3]['Price'] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
                  <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
                  <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="text-wrapper-21"><?= $categories['CategoryName'] ?></div>
          <div class="computers-laptops">Computers &amp; Laptops</div>
          <div class="text-wrapper-22">POPULAR</div>
          <div class="computers-laptops-2">Computers &amp; Laptops</div>
          <div class="text-wrapper-23">/ Computers / Laptops</div>
          <img class="vuesax-linear-home" src="/pages/Catalog/img/vuesax-linear-home-2.svg" />
          <div class="group-18">
            <div class="img">
              <div class="overlap-group-5"><div class="text-wrapper-24">1</div></div>
            </div>
            <div class="text-wrapper-25">2</div>
            <div class="text-wrapper-26">3</div>
            <div class="text-wrapper-27">...</div>
            <div class="text-wrapper-28">12</div>
            <img class="vuesax-linear-arrow-6" src="/pages/Catalog/img/vuesax-linear-arrow-right-1.svg" />
          </div>
          <div class="item-card-3">
            <div class="overlap-group-3">
              <div class="card">
                <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[1]['ImageURL'] ?>" /></div>
                <div class="item-name-wrapper"><p class="item-name"><?= $product[1]['Model'] ?></p></div>
                <div class="price">
                  <p class="element"><span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[1]['Price'] ?></span></p>
                </div>
              </div>
              <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
              <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
              <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
            </div>
          </div>
          <div class="item-card-4">
            <div class="overlap-group-3">
              <div class="card">
                <div class="preview"><img class="image" src="/pages/Catalog/img/<?= $product[2]['ImageURL'] ?>" /></div>
                <div class="item-name-wrapper">
                  <p class="item-name"><?= $product[2]['Model'] ?></p>
                </div>
                <div class="price">
                  <p class="element"><span class="text-wrapper-8">$ </span> <span class="text-wrapper-9"><?= $product[2]['Price'] ?></span></p>
                </div>
              </div>
              <div class="cart"><img class="img-2" src="/pages/Catalog/img/vuesax-linear-shopping-cart-29.svg" /></div>
              <img class="like-button" src="/pages/Catalog/img/likebutton-28.svg" />
              <div class="div-wrapper"><div class="text-wrapper-7">NEW</div></div>
            </div>
          </div>
        </div>
        <footer class="FOOTER">
          <div class="f">
            <div class="overlap-group-6">
              <div class="rectangle-3"></div>
              <div class="rectangle-4"></div>
              <div class="group-19">
                <div class="element-DEALFLOW">2023&nbsp;&nbsp;DEALFLOW</div>
                <img class="img" src="/pages/Catalog/img/vuesax-linear-copyright-1.svg" />
              </div>
              <div class="social-media">
                <p class="text-wrapper-29">FOLLOW US ON SOCIAL MEDIA</p>
                <img class="vuesax-linear" src="/pages/Catalog/img/vuesax-linear-facebook-1.svg" />
                <img class="vuesax-linear-2" src="/pages/Catalog/img/vuesax-linear-instagram-1.svg" />
                <img class="twitter" src="/pages/Catalog/img/twitter.svg" />
              </div>
              <div class="teleph">
                <img class="img" src="/pages/Catalog/img/vuesax-linear-call-1.svg" />
                <div class="text-wrapper-30">+380 (96) 836 4450</div>
              </div>
              <div class="group-20">
                <div class="text-wrapper-31">About DealFlow</div>
                <div class="text-wrapper-32">Terms &amp; Support</div>
                <div class="text-wrapper-33">Contacts</div>
                <div class="text-wrapper-34">All Categories</div>
                <a href="/about">
                <div class="text-wrapper-35">About Us</div>
              </a></div>
              <div class="group-21">
                <div class="text-wrapper-31">Support</div>
                <div class="text-wrapper-32">Returning goods</div>
                <div class="text-wrapper-33">Delivery &amp; Payment</div>
                <div class="text-wrapper-34">Service centers</div>
                <a href="/help">
                <div class="text-wrapper-35">Help</div>
              </a></div>
              <div class="group-22">
                <div class="text-wrapper-31">Bonus account</div>
                <div class="text-wrapper-32">Membership</div>
                <div class="text-wrapper-33">Gift certificates</div>
                <div class="text-wrapper-34">DealFlow Exchange</div>
                <a href="/servicesl">
                <div class="text-wrapper-35">Services</div></a>
              </div>
              <div class="group-23">
                <div class="text-wrapper-31">Sell on DealFlow</div>
                <div class="text-wrapper-32">Cooperation with us</div>
                <div class="text-wrapper-33">Franchising</div>
                <div class="text-wrapper-34">Renting premises</div>
                <a href="/partners">
                  <div class="text-wrapper-35">For partners</div></a>
              </div>
              <p class="WITH-US-IT-IS-ALWAYS-2">WITH US IT IS ALWAYS CONVENIENT,<br />FAST AND RELIABLE</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </body>
  <script>
    var discount = <?= $product[2]['Price'] ?> - ((<?= $product[2]['Price'] ?> * <?= $product[2]['DiscountPercentage'] ?>) / 100);
      document.getElementById("discount").innerHTML = (discount.toFixed(2));
  </script>
</html>
