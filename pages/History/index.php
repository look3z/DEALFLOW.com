<?php require_once __DIR__.'/db.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/pages/History/globals.css" />
    <link rel="stylesheet" href="/pages/History/styleguide.css" />
    <link rel="stylesheet" href="/pages/History/style.css" />
  </head>
  <body>
    <div class="history">
      <div class="div">
        <div class="overlap">
          <div class="b">
            <div class="overlap-group">
              <img class="rectangle" src="/pages/History/img/rectangle-62.png" />
              <div class="banner"></div>
              <div class="seargh">
                <div class="overlap-group-2">
                  <img class="iconsax-linear" src="/pages/History/img/iconsax-linear-searchnormal1.svg" />
                  <p class="text-wrapper">What are you looking for?</p>
                </div>
              </div>
            </div>
          </div>
          <div class="header"></div>
          <div class="group">
            <img class="vector" src="/pages/History/img/vector-3.svg" />
            <div class="group-2">
              <div class="text-wrapper-2">UAH</div>
              <div class="text-wrapper-3">₴</div>
            </div>
            <div class="group-3">
              <div class="text-wrapper-4">English</div>
              <img class="img" src="/pages/History/img/united-kingdom-gb.svg" />
            </div>
          </div>
          <img class="frame" src="/pages/History/img/frame-70.svg" />
          <div class="frame-2">
            <img class="iconsax-linear-2" src="/pages/History/img/iconsax-linear-category2.svg" />
            <div class="text-wrapper-5">Catalog</div>
          </div>
          <div class="group-4"><a href="/">
            <img class="LOGO" src="/pages/History/img/logo.svg" />
          </a><div class="frame-wrapper"><img class="frame-3" src="/pages/History/img/frame.svg" /></div>
          </div>
        </div>
        <footer class="FOOTER">
          <div class="f">
            <div class="overlap-group-3">
              <div class="rectangle-2"></div>
              <div class="rectangle-3"></div>
              <div class="group-5">
                <div class="element-DEALFLOW">2023&nbsp;&nbsp;DEALFLOW</div>
                <img class="img" src="/pages/History/img/vuesax-linear-copyright.svg" />
              </div>
              <div class="social-media">
                <p class="p">FOLLOW US ON SOCIAL MEDIA</p>
                <img class="vuesax-linear" src="/pages/History/img/vuesax-linear-facebook.svg" />
                <img class="vuesax-linear-2" src="/pages/History/img/vuesax-linear-instagram.svg" />
                <img class="twitter" src="/pages/History/img/twitter.svg" />
              </div>
              <div class="teleph">
                <img class="img" src="/pages/History/img/vuesax-linear-call.svg" />
                <div class="text-wrapper-6">+380 (96) 836 4450</div>
              </div>
              <div class="group-6">
                <div class="text-wrapper-7">About DealFlow</div>
                <div class="text-wrapper-8">Terms &amp; Support</div>
                <div class="text-wrapper-9">Contacts</div>
                <div class="text-wrapper-10">All Categories</div>
                <div class="text-wrapper-11">About Us</div>
              </div>
              <div class="group-7">
                <div class="text-wrapper-7">Support</div>
                <div class="text-wrapper-8">Returning goods</div>
                <div class="text-wrapper-9">Delivery &amp; Payment</div>
                <div class="text-wrapper-10">Service centers</div>
                <div class="text-wrapper-11">Help</div>
              </div>
              <div class="group-8">
                <div class="text-wrapper-7">Bonus account</div>
                <div class="text-wrapper-8">Membership</div>
                <div class="text-wrapper-9">Gift certificates</div>
                <div class="text-wrapper-10">DealFlow Exchange</div>
                <div class="text-wrapper-11">Services</div>
              </div>
              <div class="group-9">
                <div class="text-wrapper-7">Sell on DealFlow</div>
                <div class="text-wrapper-8">Cooperation with us</div>
                <div class="text-wrapper-9">Franchising</div>
                <a
                  href="https://rozetka.com.ua/ua/news-articles-promotions/promotions/store_search/"
                  target="_blank"
                  rel="noopener noreferrer"
                  ><div class="text-wrapper-10">Renting premises</div></a
                >
                <div class="text-wrapper-11">For partners</div>
              </div>
              <p class="WITH-US-IT-IS-ALWAYS">WITH US IT IS ALWAYS CONVENIENT,<br />FAST AND RELIABLE</p>
            </div>
          </div>
        </footer>
        <div class="frame-4">
          <img class="img-2" src="/pages/History/img/vuesax-linear-profile-1.svg" />
          <div class="group-10">
            <div class="text-wrapper-12"><?= $user['UserName'] ?></div>
            <div class="text-wrapper-13"><?= $user['Email'] ?></div>
          </div>
        </div>
        <div class="frame-5">
          <div class="text-wrapper-14">My orders</div>
          <img class="img-2" src="/pages/History/img/vuesax-linear-task-square.svg" />
        </div>
        <div class="frame-6"><a href="/favorites">
          <div class="text-wrapper-14">Favorites</div>
          <img class="img-2" src="/pages/History/img/iconsax-linear-heart.svg" /></a>
        </div>
        <div class="frame-7">
          <div class="text-wrapper-14">Viewed items</div>
          <img class="img-2" src="/pages/History/img/shownhide-button.svg" />
        </div>
        <div class="frame-8">
          <div class="text-wrapper-14">Mailings</div>
          <img class="img-2" src="/pages/History/img/vuesax-linear-notification.svg" />
        </div>
        <div class="frame-9">
          <div class="text-wrapper-14">My wallet</div>
          <img class="img-2" src="/pages/History/img/vuesax-linear-card.svg" />
        </div>
        <div class="frame-10">
          <div class="text-wrapper-14">Bonus account</div>
          <img class="img-2" src="/pages/History/img/vuesax-linear-empty-wallet.svg" />
        </div>
        <div class="frame-11">
          <div class="text-wrapper-14">My feedback</div>
          <img class="img-2" src="/pages/History/img/vuesax-linear-message-2.svg" />
        </div>
        <div class="frame-12">
          <div class="text-wrapper-14">Direct with sellers</div>
          <img class="img-2" src="/pages/History/img/vuesax-linear-messages.svg" />
        </div>
        <div class="frame-13">
          <div class="text-wrapper-14">My measurements</div>
          <img class="img-2" src="/pages/History/img/vuesax-linear-ruler.svg" />
        </div>
        <img class="line" src="/pages/History/img/line-5.svg" />
        <div class="overlap-wrapper">
          <div class="overlap-2">
            <div class="overlap-group-wrapper">
              <div class="overlap-group-4">
                <img class="element" src="/pages/History/img/8997257.png" /> <img class="element-2" src="/pages/History/img/89972571-1.png" />
              </div>
            </div>
            <img class="frame-14" src="/pages/History/img/frame-83.png" />
          </div>
        </div>
        <div class="frame-15">
          <div class="rectangle-4"></div>
          <p class="text-wrapper-15">№ <?= $historyInfo[0]['OrderNumber']?> since <?= date("d.m.y",strtotime($historyInfo[0]['OrderDate']))?></p>
          <div class="text-wrapper-16"><?= $historyInfo[0]['StatusName']?></div>
          <p class="element-3"><span class="span">$ </span> <span class="text-wrapper-17"><?= $historyInfo[0]['Price']?></span></p>
          <img class="vuesax-linear-arrow" src="/pages/History/img/vuesax-linear-arrow-right-1.svg" />
          <img class="image" src="/pages/History/img/<?= $historyInfo[0]['ImageURL']?>" />
        </div>
        <div class="frame-16">
          <div class="rectangle-4"></div>
          <p class="text-wrapper-15">№ <?= $historyInfo[0]['OrderNumber']?> since <?= date("d.m.y",strtotime($historyInfo[0]['OrderDate']))?></p>
          <div class="text-wrapper-16"><?= $historyInfo[0]['StatusName']?></div>
          <p class="element-3"><span class="span">$ </span> <span class="text-wrapper-17"><?= $historyInfo[0]['Price']?></span></p>
          <img class="vuesax-linear-arrow" src="/pages/History/img/vuesax-linear-arrow-right-1.svg" />
          <img class="image" src="/pages/History/img/<?= $historyInfo[0]['ImageURL']?>" />
        </div>
        <div class="frame-17">
          <div class="rectangle-4"></div>
          <p class="text-wrapper-15">№ <?= $historyInfo[0]['OrderNumber']?> since <?= date("d.m.y",strtotime($historyInfo[0]['OrderDate']))?></p>
          <div class="text-wrapper-16"><?= $historyInfo[0]['StatusName']?></div>
          <p class="element-3"><span class="span">$ </span> <span class="text-wrapper-17"><?= $historyInfo[0]['Price']?></span></p>
          <img class="vuesax-linear-arrow" src="/pages/History/img/vuesax-linear-arrow-right-1.svg" />
          <img class="image" src="/pages/History/img/<?= $historyInfo[0]['ImageURL']?>" />
        </div>
        <div class="frame-18">
          <div class="rectangle-4"></div>
          <p class="text-wrapper-15">№ <?= $historyInfo[0]['OrderNumber']?> since <?= date("d.m.y",strtotime($historyInfo[0]['OrderDate']))?></p>
          <div class="text-wrapper-16"><?= $historyInfo[0]['StatusName']?></div>
          <p class="element-3"><span class="span">$ </span> <span class="text-wrapper-17"><?= $historyInfo[0]['Price']?></span></p>
          <img class="vuesax-linear-arrow" src="/pages/History/img/vuesax-linear-arrow-right-1.svg" />
          <img class="image" src="/pages/History/img/<?= $historyInfo[0]['ImageURL']?>" />
        </div>


        <div class="frame-19">
          <div class="rectangle-5"></div>
          <p class="text-wrapper-15"><?= $historyInfo[1]['OrderNumber']?> since <?= date("d.m.y",strtotime($historyInfo[1]['OrderDate']))?></p>
          <div class="text-wrapper-16"><?= $historyInfo[1]['StatusName']?></div>
          <p class="element-3"><span class="span">$ </span> <span class="text-wrapper-17"><?= $historyInfo[1]['Price']?></span></p>
          <img class="vuesax-linear-arrow" src="/pages/History/img/vuesax-linear-arrow-right-1.svg" />
          <img class="image" src="/pages/History/img/<?= $historyInfo[1]['ImageURL']?>" />
        </div>
        <div class="frame-20">
          <div class="rectangle-5"></div>
          <p class="text-wrapper-15"><?= $historyInfo[1]['OrderNumber']?> since <?= date("d.m.y",strtotime($historyInfo[1]['OrderDate']))?></p>
          <div class="text-wrapper-16"><?= $historyInfo[1]['StatusName']?></div>
          <p class="element-3"><span class="span">$ </span> <span class="text-wrapper-17"><?= $historyInfo[1]['Price']?></span></p>
          <img class="vuesax-linear-arrow" src="/pages/History/img/vuesax-linear-arrow-right-1.svg" />
          <img class="image" src="/pages/History/img/<?= $historyInfo[1]['ImageURL']?>" />
        </div>
        <div class="frame-21">
          <div class="rectangle-5"></div>
          <p class="text-wrapper-15"><?= $historyInfo[1]['OrderNumber']?> since <?= date("d.m.y",strtotime($historyInfo[1]['OrderDate']))?></p>
          <div class="text-wrapper-16"><?= $historyInfo[1]['StatusName']?></div>
          <p class="element-3"><span class="span">$ </span> <span class="text-wrapper-17"><?= $historyInfo[1]['Price']?></span></p>
          <img class="vuesax-linear-arrow" src="/pages/History/img/vuesax-linear-arrow-right-1.svg" />
          <img class="image" src="/pages/History/img/<?= $historyInfo[1]['ImageURL']?>" />
        </div>
        <div class="frame-22">
          <div class="rectangle-5"></div>
          <p class="text-wrapper-15"><?= $historyInfo[1]['OrderNumber']?> since <?= date("d.m.y",strtotime($historyInfo[1]['OrderDate']))?></p>
          <div class="text-wrapper-16"><?= $historyInfo[1]['StatusName']?></div>
          <p class="element-3"><span class="span">$ </span> <span class="text-wrapper-17"><?= $historyInfo[1]['Price']?></span></p>
          <img class="vuesax-linear-arrow" src="/pages/History/img/vuesax-linear-arrow-right-1.svg" />
          <img class="image" src="/pages/History/img/<?= $historyInfo[1]['ImageURL']?>" />
        </div>

        
        <div class="frame-23">
          <div class="rectangle-6"></div>
          <p class="text-wrapper-15"><?= $historyInfo[2]['OrderNumber']?> since <?= date("d.m.y",strtotime($historyInfo[2]['OrderDate']))?></p>
          <div class="text-wrapper-16"><?= $historyInfo[2]['StatusName']?></div>
          <p class="element-3"><span class="span">$ </span> <span class="text-wrapper-17"><?= $historyInfo[2]['Price']?></span></p>
          <img class="vuesax-linear-arrow" src="/pages/History/img/vuesax-linear-arrow-right-1.svg" />
          <img class="image" src="/pages/History/img/<?= $historyInfo[2]['ImageURL']?>" />
        </div>
        <div class="frame-24">
          <div class="rectangle-6"></div>
          <p class="text-wrapper-15"><?= $historyInfo[2]['OrderNumber']?> since <?= date("d.m.y",strtotime($historyInfo[2]['OrderDate']))?></p>
          <div class="text-wrapper-16"><?= $historyInfo[2]['StatusName']?></div>
          <p class="element-3"><span class="span">$ </span> <span class="text-wrapper-17"><?= $historyInfo[2]['Price']?></span></p>
          <img class="vuesax-linear-arrow" src="/pages/History/img/vuesax-linear-arrow-right-1.svg" />
          <img class="image" src="/pages/History/img/<?= $historyInfo[2]['ImageURL']?>" />
        </div>
        <div class="frame-25">
          <div class="rectangle-6"></div>
          <p class="text-wrapper-15"><?= $historyInfo[2]['OrderNumber']?> since <?= date("d.m.y",strtotime($historyInfo[2]['OrderDate']))?></p>
          <div class="text-wrapper-16"><?= $historyInfo[2]['StatusName']?></div>
          <p class="element-3"><span class="span">$ </span> <span class="text-wrapper-17"><?= $historyInfo[2]['Price']?></span></p>
          <img class="vuesax-linear-arrow" src="/pages/History/img/vuesax-linear-arrow-right-1.svg" />
          <img class="image" src="/pages/History/img/<?= $historyInfo[2]['ImageURL']?>" />
        </div>
        <div class="my-orders">MY ORDERS</div>
      </div>
    </div>
  </body>
</html>
