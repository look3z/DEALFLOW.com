<?php require_once __DIR__.'/db.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/pages/Profile/globals.css" />
    <link rel="stylesheet" href="/pages/Profile/styleguide.css" />
    <link rel="stylesheet" href="/pages/Profile/style.css" />
    <title>Profile</title>
    <link rel="icon" type="image/x-icon" href="/pages/Dealflow.ico">
  </head>
  <body>
    <div class="element-profile">
      <div class="div">
        <div class="overlap">
          <div class="b">
            <div class="overlap-group">
              <div class="banner"></div>
              <div class="seargh">
                <div class="overlap-group-2">
                  <img class="iconsax-linear" src="/pages/Profile/img/iconsax-linear-searchnormal1.svg" />
                  <p class="text-wrapper">What are you looking for?</p>
                </div>
              </div>
            </div>
          </div>
          <div class="header"></div>
          <div class="group">
            <img class="vector" src="/pages/Profile/img/vector-3.svg" />
            <div class="group-2">
              <div class="text-wrapper-2">UAH</div>
              <div class="text-wrapper-3">₴</div>
            </div>
            <div class="group-3">
              <div class="text-wrapper-4">English</div>
              <img class="img" src="/pages/Profile/img/united-kingdom-gb.svg" />
            </div>
          </div>
          <img class="frame" src="/pages/Profile/img/frame-70.svg" />
          <div class="frame-2">
            <img class="iconsax-linear-2" src="/pages/Profile/img/iconsax-linear-category2.svg" />
            <div class="text-wrapper-5">Catalog</div>
          </div>
          <div class="group-4">
            <a href="/"><img class="LOGO" src="/pages/Profile/img/logo.svg" /></a>
            <div class="frame-wrapper"><img class="frame-3" src="/pages/Profile/img/frame.svg" /></div>
          </div>
        </div>
        <footer class="FOOTER">
          <div class="f">
            <div class="overlap-group-3">
              <div class="rectangle"></div>
              <div class="rectangle-2"></div>
              <div class="group-5">
                <div class="element-DEALFLOW">2023&nbsp;&nbsp;DEALFLOW</div>
                <img class="img" src="/pages/Profile/img/vuesax-linear-copyright-1.svg" />
              </div>
              <div class="social-media">
                <p class="p">FOLLOW US ON SOCIAL MEDIA</p>
                <img class="vuesax-linear" src="/pages/Profile/img/vuesax-linear-facebook-1.svg" />
                <img class="vuesax-linear-2" src="/pages/Profile/img/vuesax-linear-instagram-1.svg" />
                <img class="twitter" src="/pages/Profile/img/twitter.svg" />
              </div>
              <div class="teleph">
                <img class="img" src="/pages/Profile/img/vuesax-linear-call-2.svg" />
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
                <div class="text-wrapper-10">Renting premises</div>
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
          <img class="img-2" src="/pages/Profile/img/vuesax-linear-profile-1.svg" />
          <div class="group-10">
            <div class="text-wrapper-13"><?= $user['UserName'] ?></div>
            <div class="text-wrapper-14"><?= $user['Email'] ?></div>
          </div>
        </div>
        <div class="frame-7"><a href = "/orders">
          <div class="text-wrapper-15">My orders</div>
          <img class="img-2" src="/pages/Profile/img/vuesax-linear-task-square.svg" />
        </a></div>
        <div class="frame-8"><a href = "/favorites">
          <div class="text-wrapper-15">Favorites</div>
          <img class="img-2" src="/pages/Profile/img/iconsax-linear-heart.svg" />
        </a></div>
        <div class="frame-9">
          <div class="text-wrapper-15">Viewed items</div>
          <img class="img-2" src="/pages/Profile/img/shownhide-button.svg" />
        </div>
        <div class="frame-10">
          <div class="text-wrapper-15">Mailings</div>
          <img class="img-2" src="/pages/Profile/img/vuesax-linear-notification.svg" />
        </div>
        <div class="frame-11">
          <div class="text-wrapper-15">My wallet</div>
          <img class="img-2" src="/pages/Profile/img/vuesax-linear-card.svg" />
        </div>
        <div class="frame-12">
          <div class="text-wrapper-15">Bonus account</div>
          <img class="img-2" src="/pages/Profile/img/vuesax-linear-empty-wallet.svg" />
        </div>
        <div class="frame-13">
          <div class="text-wrapper-15">My feedback</div>
          <img class="img-2" src="/pages/Profile/img/vuesax-linear-message-2.svg" />
        </div>
        <div class="frame-14">
          <div class="text-wrapper-15">Direct with sellers</div>
          <img class="img-2" src="/pages/Profile/img/vuesax-linear-messages.svg" />
        </div>
        <div class="frame-15">
          <div class="text-wrapper-15">My measurements</div>
          <img class="img-2" src="/pages/Profile/img/vuesax-linear-ruler.svg" />
        </div>
        <img class="line" src="/pages/Profile/img/line-5.svg" />
        <div class="overlap-wrapper">
          <div class="overlap-2">
            <div class="overlap-group-wrapper">
              <div class="overlap-group-4">
                <img class="element" src="/pages/Profile/img/8997257.png" /> <img class="element-2" src="/pages/Profile/img/89972571-1.png" />
              </div>
            </div>
            <img class="frame-16" src="/pages/Profile/img/frame-83.png" />
          </div>
        </div>
        <div class="frame-17"><a href ="/profile_open">
          <img class="img-3" src="/pages/Profile/img/vuesax-linear-profile.svg" />
          <div class="text-wrapper-16">Personal information</div>
        </a> </div>
        <div class="frame-18">
          <div class="text-wrapper-16">Contact information</div>
          <img class="img-3" src="/pages/Profile/img/vuesax-linear-call.svg" />
        </div>
        <div class="frame-19">
          <div class="text-wrapper-16">Shipping address</div>
          <img class="img-3" src="/pages/Profile/img/vuesax-linear-group.svg" />
        </div>
        <div class="frame-20"><a href="/signin">
          <div class="text-wrapper-16">Log in</div>
          <img class="img-3" src="/pages/Profile/img/vuesax-linear-lock.svg" /></a>
        </div>
        <div class="frame-21">
          <div class="text-wrapper-16">Additional information</div>
          <img class="img-3" src="/pages/Profile/img/vuesax-linear-user-add-1.svg" />
        </div>
        <div class="frame-22">
          <div class="text-wrapper-16">Hobbies</div>
          <img class="img-3" src="/pages/Profile/img/vuesax-linear-smileys.svg" />
        </div>
        <div class="frame-23">
          <div class="text-wrapper-16">Pets</div>
          <img class="img-3" src="/pages/Profile/img/vuesax-linear-pet.svg" />
        </div>
        <div class="personal-information">PERSONAL INFORMATION</div>
      </div>
    </div>
  </body>
</html>
