<?php require_once __DIR__.'/db.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/pages/ProfileOpen/globals.css" />
    <link rel="stylesheet" href="/pages/ProfileOpen/styleguide.css" />
    <link rel="stylesheet" href="/pages/ProfileOpen/style.css" />
    <title>Profile</title>
    <link rel="icon" type="image/x-icon" href="/pages/Dealflow.ico">
  </head>
  <body>
    <div class="profile">
      <div class="div">
        <div class="overlap">
          <div class="b">
            <div class="overlap-group">
              <div class="banner"></div>
              <div class="seargh">
                <div class="overlap-group-2">
                  <img class="iconsax-linear" src="/pages/ProfileOpen/img/iconsax-linear-searchnormal1.svg" />
                  <p class="text-wrapper">What are you looking for?</p>
                </div>
              </div>
            </div>
          </div>
          <div class="header"></div>
          <div class="group">
            <img class="vector" src="/pages/ProfileOpen/img/vector-3.svg" />
            <div class="group-2">
              <div class="text-wrapper-2">UAH</div>
              <div class="text-wrapper-3">₴</div>
            </div>
            <div class="group-3">
              <div class="text-wrapper-4">English</div>
              <img class="img" src="/pages/ProfileOpen/img/united-kingdom-gb.svg" />
            </div>
          </div>
          <a href="/favorites"><img class="frame" src="/pages/ProfileOpen/img/frame-70.svg" /></a>
          <div class="frame-2">
            <img class="iconsax-linear-2" src="/pages/ProfileOpen/img/iconsax-linear-category2.svg" />
            <div class="text-wrapper-5">Catalog</div>
          </div>
          <div class="group-4"><a href="/">
            <img class="LOGO" src="/pages/ProfileOpen/img/logo.svg" />
            <div class="frame-wrapper"><img class="frame-3" src="/pages/ProfileOpen/img/frame.svg" /></div>
          </a></div>
        </div>
        <footer class="FOOTER">
          <div class="f">
            <div class="overlap-group-3">
              <div class="rectangle"></div>
              <div class="rectangle-2"></div>
              <div class="group-5">
                <div class="element-DEALFLOW">2023&nbsp;&nbsp;DEALFLOW</div>
                <img class="img" src="/pages/ProfileOpen/img/vuesax-linear-copyright.svg" />
              </div>
              <div class="social-media">
                <p class="p">FOLLOW US ON SOCIAL MEDIA</p>
                <img class="vuesax-linear" src="/pages/ProfileOpen/img/vuesax-linear-facebook.svg" />
                <img class="vuesax-linear-2" src="/pages/ProfileOpen/img/vuesax-linear-instagram.svg" />
                <img class="twitter" src="/pages/ProfileOpen/img/twitter.svg" />
              </div>
              <div class="teleph">
                <img class="img" src="/pages/ProfileOpen/img/vuesax-linear-call-1.svg" />
                <div class="text-wrapper-6">+380 (96) 836 4450</div>
              </div>
              <div class="group-6">
                <div class="text-wrapper-7">About DealFlow</div>
                <div class="text-wrapper-8">Terms &amp; Support</div>
                <div class="text-wrapper-9">Contacts</div>
                <div class="text-wrapper-10">All Categories</div>
                <a href="/about">
                <div class="text-wrapper-11">About Us</div></a>
              </div>
              <div class="group-7">
                <div class="text-wrapper-7">Support</div>
                <div class="text-wrapper-8">Returning goods</div>
                <div class="text-wrapper-9">Delivery &amp; Payment</div>
                <div class="text-wrapper-10">Service centers</div>
                <a href="/help">
                <div class="text-wrapper-11">Help</div></a>
              </div>
              <div class="group-8">
                <div class="text-wrapper-7">Bonus account</div>
                <div class="text-wrapper-8">Membership</div>
                <div class="text-wrapper-9">Gift certificates</div>
                <div class="text-wrapper-10">DealFlow Exchange</div>
                <a href="/services">
                <div class="text-wrapper-11">Services</div></a>
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
                <a href="/partners">
                <div class="text-wrapper-11">For partners</div></a>
              </div>
              <p class="WITH-US-IT-IS-ALWAYS">WITH US IT IS ALWAYS CONVENIENT,<br />FAST AND RELIABLE</p>
            </div>
          </div>
        </footer>
        <div class="div-wrapper"><div class="text-wrapper-5">Change Password</div></div>
        <div class="frame-4"><div class="text-wrapper-12">Delete Account</div></div>
        <div class="frame-5"><div class="text-wrapper-12">Exit</div></div>
        <div class="frame-6">
          <img class="img-2" src="/pages/ProfileOpen/img/vuesax-linear-profile-2.svg" />
          <div class="group-10">
            <div class="text-wrapper-13"><?= $user['UserName'] ?></div>
            <div class="text-wrapper-14"><?= $user['Email'] ?></div>
          </div>
        </div>
        <div class="frame-7"><a href = "/orders">
          <div class="text-wrapper-15">My orders</div>
          <img class="img-2" src="/pages/ProfileOpen/img/vuesax-linear-task-square.svg" /></a>
        </div>
        <div class="frame-8"><a href = "/favorites">
          <div class="text-wrapper-15">Favorites</div>
          <img class="img-2" src="/pages/ProfileOpen/img/iconsax-linear-heart.svg" /></a>
        </div>
        <div class="frame-9">
          <div class="text-wrapper-15">Viewed items</div>
          <img class="img-2" src="/pages/ProfileOpen/img/shownhide-button.svg" />
        </div>
        <div class="frame-10">
          <div class="text-wrapper-15">Mailings</div>
          <img class="img-2" src="/pages/ProfileOpen/img/vuesax-linear-notification.svg" />
        </div>
        <div class="frame-11">
          <div class="text-wrapper-15">My wallet</div>
          <img class="img-2" src="/pages/ProfileOpen/img/vuesax-linear-card.svg" />
        </div>
        <div class="frame-12">
          <div class="text-wrapper-15">Bonus account</div>
          <img class="img-2" src="/pages/ProfileOpen/img/vuesax-linear-empty-wallet.svg" />
        </div>
        <div class="frame-13">
          <div class="text-wrapper-15">My feedback</div>
          <img class="img-2" src="/pages/ProfileOpen/img/vuesax-linear-message-2.svg" />
        </div>
        <div class="frame-14">
          <div class="text-wrapper-15">Direct with sellers</div>
          <img class="img-2" src="/pages/ProfileOpen/img/vuesax-linear-messages.svg" />
        </div>
        <div class="frame-15">
          <div class="text-wrapper-15">My measurements</div>
          <img class="img-2" src="/pages/ProfileOpen/img/vuesax-linear-ruler.svg" />
        </div>
        <img class="line" src="/pages/ProfileOpen/img/line-5.svg" />
        <div class="overlap-wrapper">
          <div class="overlap-2">
            <div class="overlap-group-wrapper">
              <div class="overlap-group-4">
                <img class="element" src="/pages/ProfileOpen/img/8997257.png" /> <img class="element-2" src="/pages/ProfileOpen/img/89972571-1.png" />
              </div>
            </div>
            <img class="frame-16" src="/pages/ProfileOpen/img/frame-83.png" />
          </div>
        </div>
        <div class="frame-17">
          <img class="vuesax-linear-3" src="/pages/ProfileOpen/img/vuesax-linear-profile.svg" />
          <div class="text-wrapper-16">Personal information</div>
          <div class="frame-18"><div class="text-wrapper-12">Edit</div></div>
          <div class="overlap-3">
            <div class="group-11">
              <div class="text-wrapper-13"><?= $user['UserName'] ?></div>
              <div class="text-wrapper-17">Gender</div>
              <div class="text-wrapper-18">Date of birth</div>
              <div class="text-wrapper-14"><?= $user['Email'] ?></div>
              <div class="text-wrapper-19"><?= $user['Gender'] ?></div>
            </div>
            <div class="text-wrapper-20"><?= date("d.m.y",strtotime($user['DateOfBirth']))?></div>
          </div>
        </div>
        <div class="frame-19">
          <div class="text-wrapper-21">Contact information</div>
          <img class="img-3" src="/pages/ProfileOpen/img/vuesax-linear-call.svg" />
        </div>
        <div class="frame-20">
          <div class="text-wrapper-21">Shipping address</div>
          <img class="img-3" src="/pages/ProfileOpen/img/vuesax-linear-group.svg" />
        </div>
        <div class="frame-21">
          <div class="text-wrapper-21">Log in</div>
          <img class="img-3" src="/pages/ProfileOpen/img/vuesax-linear-lock.svg" />
        </div>
        <div class="frame-22">
          <div class="text-wrapper-21">Additional information</div>
          <img class="img-3" src="/pages/ProfileOpen/img/vuesax-linear-user-add.svg" />
        </div>
        <div class="frame-23">
          <div class="text-wrapper-21">Hobbies</div>
          <img class="img-3" src="/pages/ProfileOpen/img/vuesax-linear-smileys.svg" />
        </div>
        <div class="frame-24">
          <div class="text-wrapper-21">Pets</div>
          <img class="img-3" src="/pages/ProfileOpen/img/vuesax-linear-pet.svg" />
        </div>
        <div class="personal-information">PERSONAL INFORMATION</div>
      </div>
    </div>
  </body>
</html>
