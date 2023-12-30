<!doctype html>
<html class="no-js" lang="" xmlns:xlink="http://www.w3.org/1999/xlink">
<head>
  <meta charset="utf-8">
  <title>Shop2Cash - Product Page | Join the Cashback Revolution: India's No.1 Cashback Website</title>
  <meta name="description" content="Unlock incredible online shopping rewards and discounts on our platform. Save big while you shop for your favorite products in India.">
  <meta name="keywords" content="Online shopping rewards, Online Shopping Cashback Offers, Best Deals on Online Shopping, Online shopping offers, Online Shopping Offers in India, Online shopping discounts, Online Shopping Discounts in India, Online shopping cashback, Exclusive Online Shopping Offers">
  <!-- ##### Include Meta & Link Tags #####-->
  <?php include './php_includes/html_head.php'; ?>

  <!-- Add '.rewards' class to '#productPage' when the User wins any Rewards -->
  <body id="productPage" class="rewards">

  <!-- ##### Include Header #####-->
  <?php include './php_includes/header.php'; ?>

  <div id="productContainer">
    <section id="stepper">
      <div class="step done">
        <span><svg viewBox="0 0 14 14"><use xlink:href="./img/all_svgs.svg#check"></use></svg></span>
        <p>Select Product</p>
      </div>
      <span class="line"></span>
      <span class="slash">/</span>
      <div class="step done">
        <span><svg viewBox="0 0 14 14"><use xlink:href="./img/all_svgs.svg#check"></use></svg></span>
        <p>Play & Earn</p>
      </div>
      <span class="line"></span>
      <span class="slash">/</span>
      <div class="step">
        <span><svg viewBox="0 0 14 14"><use xlink:href="./img/all_svgs.svg#cart"></use></svg></span>
        <p>Buy Product</p>
      </div>
      <span class="line"></span>
      <span class="slash">/</span>
      <div class="step">
        <span><svg viewBox="0 0 14 14"><use xlink:href="./img/all_svgs.svg#receipt_long"></use></svg></span>
        <p>Upload Bill</p>
      </div>
    </section>

    <div class="wrapper">

      <section id="info">
        <header>
          <div class="pre">
            <p>Further price reduction?</p>
            <span>₹ 899</span>
          </div>
          <div class="post active">
            <p class="youWon">YOU WON</p>
            <div class="rewardAmount">₹ 12.19</div>
          </div>
        </header>
        <div class="content">
          <div class="pre">
            <span class="gift"><svg viewBox="0 0 14 14"><use xlink:href="./img/all_svgs.svg#gift1"></use></svg></span>
            <a id="demoButton" class="expanded_button">
              <img src="./img/gradient/right_arrow.svg" style="width:24px;">
              <div>
                <span>PLAY THE GAME</span>
                <p>Earn upto 100% Cashback Reward</p>
              </div>
            </a>
          </div>
          <div class="post active">
            <section class="timer">
              <p>Time</br>Remaining</p>
              <div id="thirty-countdown">
                <span class="mins" title="Mins">30</span>
                <div class="colon">:</div>
                <span class="secs" title="Secs">00</span>
              </div>
            </section>
            <section class="buttonsBlock">
              <a class="expanded_button">
                <img src="./img/gradient/shop_gradient.svg">
                <div>
                  <span>Complete Purchase</span>
                  <p>(purchase within 30min)</p>
                </div>
              </a>
              <a class="expanded_button">
                <img src="./img/gradient/upload.svg">
                <div>
                  <span>Upload bill</span>
                  <p>(attach purchased product’s invoice)</p>
                </div>
              </a>
              <a class="expanded_button">
                <img src="./img/gradient/gift.svg">
                <div>
                  <span>Collect rewards</span>
                  <p>(withdraw with UPI/Bank Account)</p>
                </div>
              </a>
            </section>
          </div>
        </div>
      </section>

      <section class="productCard" id="product">
        <div class="productDisplay">
          <header>
            <div class="photoBlock">
              <img src="./img/products/2.png">
            </div>
          </header>
          <footer>
            <div class="brand">
              <svg viewBox="0 0 14 14"><use xlink:href="./img/all_svgs.svg#tag"></use></svg>
              <span>Amazon</span>
            </div>
            <div class="detailsBlock">
              <h5>WANQLYN Ethnic Style Oxford Backpack</h5>
              <!-- <h5>VU 139 CM (55 INCHES) PREMIUM SERIES 4K ULTRA HD SMART LED GOOGLE TV</h5> -->
              <div class="priceBlock">
                <span class="discounted">₹ 899</span>
                <span class="original">₹1999</span>
              </div>
            </div>
            <div class="buttonsBlock">
              <a class="buy button fancyBorder"><img src="./img/gradient/shop.svg">Buy</a>
              <a class="button play fancyBorder deactivated" href="./product_rewards.php"><img src="./img/gradient/gift.svg"><span>Play & Earn</span></a>
            </div>
          </footer>
        </div>
        <div class="conditions">
          <div class="left">
            <h6>IMPORTANT INFORMATION:</h6>
            <ul>
              <li>You will be redirected to merchant’s website for purchase.</li>
              <li>Do not visit any other site for deals/coupons once redirected from Shop2Cash.</li>
              <li>Add product to your cart/wishlist on merchant’s site only after redirecting from Shop2Cash</li>
            </ul>
          </div>
          <div class="right">
            <h6>REWARDS INFORMATION:</h6>
            <ul>
              <li>Timelines to track your rewards - 48H of order shipment.</li>
              <li>Reward conformation & bill upload timelines - 2-30days.</li>
              <li>Reward related queries should be sent to Shop2Cash, & not the merchant.</li>
            </ul>
          </div>
        </div>
      </section>

    </div>
  </div>







  <section id="featuredProducts">
    <div class="titleBlock">
      <h6 class="label">SOMETHING YOU MIGHT LIKE</h6>
      <h2>RELATED PRODUCTS</h2>
    </div>
    <div class="wrapper">

      <div class="productCard">
        <header>
          <div class="photoBlock" brand="Myntra">
            <img src="./img/products/5.png">
          </div>
        </header>
        <footer>
          <div class="detailsBlock">
            <h5>U.S. POLO ASSN. Mens Clanal Sneakers</h5>
            <div class="priceBlock">
              <span class="discounted">₹ 2279</span>
              <span class="original">₹3599</span>
            </div>
          </div>
          <div class="buttonsBlock">
            <a class="buy button fancyBorder" href=""><img src="./img/gradient/shop.svg">Buy</a>
            <a class="play button fancyBorder" href=""><img src="./img/gradient/gift.svg"><span>Play & Earn</span></a>
          </div>
        </footer>
      </div>

      <div class="productCard">
        <header>
          <div class="photoBlock" brand="Amazon">
            <img src="./img/products/6.png">
          </div>
        </header>
        <footer>
          <div class="detailsBlock">
            <h5>AELOMART Men's Cotton Full Sleeve T Shirt</h5>
            <div class="priceBlock">
              <span class="discounted">₹ 593</span>
              <span class="original">₹1499</span>
            </div>
          </div>
          <div class="buttonsBlock">
            <a class="buy button fancyBorder" href=""><img src="./img/gradient/shop.svg">Buy</a>
            <a class="play button fancyBorder" href=""><img src="./img/gradient/gift.svg"><span>Play & Earn</span></a>
          </div>
        </footer>
      </div>

      <div class="productCard">
        <header>
          <div class="photoBlock" brand="Flipkart">
            <img src="./img/products/7.png">
          </div>
        </header>
        <footer>
          <div class="detailsBlock">
            <h5>Kraasa ProRider Running Shoes for Men</h5>
            <div class="priceBlock">
              <span class="discounted">₹ 199</span>
              <span class="original">₹499</span>
            </div>
          </div>
          <div class="buttonsBlock">
            <a class="buy button fancyBorder" href=""><img src="./img/gradient/shop.svg">Buy</a>
            <a class="play button fancyBorder" href=""><img src="./img/gradient/gift.svg"><span>Play & Earn</span></a>
          </div>
        </footer>
      </div>

      <div class="productCard">
        <header>
          <div class="photoBlock" brand="Ajio">
            <img src="./img/products/8.png">
          </div>
        </header>
        <footer>
          <div class="detailsBlock">
            <h5>UGULAR Men's Slim Fit Track pants</h5>
            <div class="priceBlock">
              <span class="discounted">₹ 425</span>
              <span class="original">₹999</span>
            </div>
          </div>
          <div class="buttonsBlock">
            <a class="buy button fancyBorder" href=""><img src="./img/gradient/shop.svg">Buy</a>
            <a class="play button fancyBorder" href=""><img src="./img/gradient/gift.svg"><span>Play & Earn</span></a>
          </div>
        </footer>
      </div>
    </div>
    <a class="link" href="#">View More Products</a>
  </section>

  <!-- ##### Include FAQ's #####-->
  <?php include './php_includes/faqs.php'; ?>
  <!-- ##### Include Footer #####-->
  <?php include './php_includes/footer.php'; ?>

  <section id="gameSelection" class="overlayContainer">
    <div class="selectionBlock">
      <h2>Select A Game</h2>
      <div class="games">
        <a><img class="mine" src="./img/discount_bank/mine_game.png"></a>
        <a><img class="scratch" src="./img/discount_bank/scratch_game.png"></a>
      </div>
    </div>
    <ul class="infoBlock">
      <li>Earn upto 100% Cashback as Reward</li>
      <li>Buy the product within 30 minutes to avail the Reward</li>
    </ul>
  </section>

  <section id="redirectTo" class="overlayContainer productCard">
    <h2>Cashback Activated</h2>
    <p class="info">Complete your purchase with merchant and return to upload the bill on your Shop2Cash profile.</p>
    <section class="pathAnimate">
      <img class="logo" src="./img/shop2cash_logo.svg">
      <div class="redirectToIndicator">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <img class="logo" src="./img/amazon_logo1.svg">
    </section>
    <p class="info">Cashback will be credited between 2-30 days.</p>
    <p class="info">If you are not redirected automatically, <a class="plain_link" style="font-weight:700;">Click here</a></p>
  </section>

  <section id="loginContainer" class="overlayContainer">
    <header>
      <img class="logo" src="./img/shop2cash_logo.svg">
      <div class="tabContainer">
        <span class="active loginTab">Login</span>
        <span class="registerTab">Register</span>
      </div>
    </header>
    <div class="inputs login active">
      <div class="inputBlock">
        <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#email"></use></svg>
        <input type="email" placeholder="Email">
      </div>
      <div class="inputBlock">
        <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#password"></use></svg>
        <input type="password" placeholder="Password">
      </div>
      <a class="forgotPassword plain_link" href="#">Forgot Password?</a>
      <input id="submit" type="submit" value="Login">
    </div>
    <div class="inputs register">
      <div class="inputBlock">
        <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#user"></use></svg>
        <input type="text" placeholder="Full Name">
      </div>
      <div class="inputBlock">
        <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#phone"></use></svg>
        <input type="number" placeholder="Phone Number">
      </div>
      <div class="inputBlock">
        <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#email"></use></svg>
        <input type="email" placeholder="Email">
      </div>
      <div class="inputBlock">
        <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#password"></use></svg>
        <input type="password" placeholder="Password">
      </div>
      <a class="forgotPassword plain_link" style="margin-left: 0;">To verify your email, we will send you a mail with an OTP.</a>
      <input id="submit" type="submit" value="Register">
    </div>
  </section>

  <div id="overlay"></div>

  <!-- ##### Include common JS files #####-->
  <?php include './php_includes/js.php'; ?>

  <script type="text/javascript">
    // ######## Add Active Page Nav ########
    u('#header nav a:nth-child(2)').addClass("active");
  </script>
</body>
</html>
