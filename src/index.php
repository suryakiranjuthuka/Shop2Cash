<!doctype html>
<html class="no-js" lang="" xmlns:xlink="http://www.w3.org/1999/xlink">
<head>
  <meta charset="utf-8">
  <title>Shop2Cash - Home Page | Join the Cashback Revolution: India's No.1 Cashback Website</title>
  <meta name="description" content="Unlock incredible online shopping rewards and discounts on our platform. Save big while you shop for your favorite products in India.">
  <meta name="keywords" content="Online shopping rewards, Online Shopping Cashback Offers, Best Deals on Online Shopping, Online shopping offers, Online Shopping Offers in India, Online shopping discounts, Online Shopping Discounts in India, Online shopping cashback, Exclusive Online Shopping Offers">
  <!-- ##### Include Meta & Link Tags #####-->
  <?php include './php_includes/html_head.php'; ?>
</head>

<body id="homePage">
  <div id="headerHeroWrapper">

    <!-- ##### Include Header #####-->
    <?php include './php_includes/header.php'; ?>

    <section id="hero">
      <section class="left">
        <div class="titleBlock">
          <h1>PLAY TO WIN</h1>
          <h1 class="small">UPTO <span class="bold">100% CASHBACK</span> <br>ON YOUR FAVOURITE PRODUCTS</h1>
        </div>
        <div class="searchBlock search">
          <svg viewBox="0 0 30 30"><use xlink:href="./img/all_svgs.svg#search"></use></svg>
          <input type="search" name="Search Products" placeholder="Search Products">
        </div>
      </section>

      <section class="right">
        <section id="playController">
          <div id="circularProgressBlock">
            <svg id="circularProgress" width="70" height="70" viewBox="-8.75 -8.75 87.5 87.5" version="1.1" xmlns="http://www.w3.org/2000/svg">
              <circle class="default" r="25" cx="35" cy="35"></circle>
              <circle class="progress" r="25" cx="35" cy="35"></circle>
            </svg>
            <button id="playButton" class="unbuttonize">
              <svg id='play-svg-1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'>
                <path d='M11,8 L26,16 11,24 11,8'><animate attributeName='d' fill='freeze' dur='0.1s' calc-mode='spline' keySplines='0.19 1 0.22 1'/></path>
              </svg>
            </button>
          </div>
          <span id="stepCount" class="stepCount initial"><span id="heroStepscountdown">Playing in...5</span></span>
        </section>

        <section id="heroSteps">

          <div class="stepWrapper one">
            <div class="stepBlock one" data-step=1>
              <svg viewBox="0 0 36 36"><use xlink:href="./img/all_svgs.svg#done"></use></svg>
              <h4>Select your product</h4>
              <p>Choose a product from our wide range of categories</p>
            </div>
            <svg class="decorate star" viewBox="0 0 20 20"><use xlink:href="./img/all_svgs.svg#star"></use></svg>
          </div>

          <div class="stepWrapper two">
            <div class="stepBlock two" data-step=2>
              <svg viewBox="0 0 36 36"><use xlink:href="./img/all_svgs.svg#game"></use></svg>
              <h4>Play & earn rewards</h4>
              <p>Select a game to play and earn upto 100% rewards on the product’s price</p>
            </div>
            <svg class="decorate star1" viewBox="0 0 20 20"><use xlink:href="./img/all_svgs.svg#star"></use></svg>
            <svg class="decorate star2" viewBox="0 0 20 20"><use xlink:href="./img/all_svgs.svg#star"></use></svg>
          </div>

          <div class="stepWrapper three">
            <div class="stepBlock three" data-step=3>
              <svg viewBox="0 0 36 36"><use xlink:href="./img/all_svgs.svg#shop"></use></svg>
              <h4>Buy the product</h4>
              <p>Continue to purchase the product before your reward timeline expires</p>
            </div>
            <svg class="decorate star" viewBox="0 0 20 20"><use xlink:href="./img/all_svgs.svg#star"></use></svg>
            <svg class="decorate circle" viewBox="0 0 20 20"><use xlink:href="./img/all_svgs.svg#circle"></use></svg>
            <svg class="decorate circle_rings" viewBox="0 0 20 20"><use xlink:href="./img/all_svgs.svg#circle_rings"></use></svg>
         </div>

          <div class="stepWrapper four">
            <div class="stepBlock four" data-step=4>
              <svg viewBox="0 0 36 36"><use xlink:href="./img/all_svgs.svg#gift"></use></svg>
              <h4>Redeem your rewards</h4>
              <p>Upload your bill, and the reward amount will be credited to your bank account</p>
            </div>
            <svg class="decorate circle1" viewBox="0 0 20 20"><use xlink:href="./img/all_svgs.svg#circle"></use></svg>
            <svg class="decorate circle2" viewBox="0 0 20 20"><use xlink:href="./img/all_svgs.svg#circle"></use></svg>
            <svg class="decorate circle3" viewBox="0 0 20 20"><use xlink:href="./img/all_svgs.svg#circle"></use></svg>
            <svg class="decorate circle_rings" viewBox="0 0 20 20"><use xlink:href="./img/all_svgs.svg#circle_rings"></use></svg>
          </div>

        </section>
      </section>

    </section>
    </div>



    <div id="bodyContentsWrapper">

      <section id="brands">
        <div class="contentBlock">
          <h6 class="label">Featured Brands</h6>
          <h2>Your favourite brands with <br><span class="highlight">huge</span> discounts</h2>
          <div class="infoBlock">
            <div class="externalProductLink">
              <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#add_link"></use></svg>
              <input type="text" name="Paste your product link" placeholder="Paste your link here">
              <div class="enterButton"><svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#return"></use></svg></div>
            </div>
            <p class="small">Copy & paste the link of your favourite product from  our partnered brands, to earn cashback rewards</p>
          </div>
        </div>
        <div class="gradientBG"></div>
        <div class="brandsBlock">
          <img src="./img/brands2x.png">
        </div>
      </section>

      <section id="featuredProducts">
        <div class="titleBlock">
          <h6 class="label">FEATURED PRODUCTS</h6>
          <h2>BROWSE OUR TOP PRODUCTS</h2>
        </div>
        <div class="wrapper">

          <div class="productCard">
            <header>
              <div class="photoBlock" brand="Mama Earth">
                <img src="./img/products/1.png">
              </div>
            </header>
            <footer>
              <div class="detailsBlock">
                <h5>Allen Solly Men's Cotton Crew Neck Sweatshirt</h5>
                <div class="priceBlock">
                  <span class="discounted">₹ 719</span>
                  <span class="original">₹1499</span>
                </div>
              </div>
              <div class="buttonsBlock">
                <a class="buy button fancyBorder"><img src="./img/gradient/shop.svg">Buy</a>
                <a class="play button fancyBorder"><img src="./img/gradient/gift.svg"><span>Play & Earn</span></a>
              </div>
            </footer>
          </div>

          <div class="productCard">
            <header>
              <div class="photoBlock" brand="Amazon">
                <img src="./img/products/2.png">
              </div>
            </header>
            <footer>
              <div class="detailsBlock">
                <h5>WANQLYN Ethnic Style Oxford Backpack</h5>
                <div class="priceBlock">
                  <span class="discounted">₹ 899</span>
                  <span class="original">₹1999</span>
                </div>
              </div>
              <div class="buttonsBlock">
                <a class="buy button fancyBorder" href="./product.php"><img src="./img/gradient/shop.svg">Buy</a>
                <a class="play button fancyBorder"><img src="./img/gradient/gift.svg"><span>Play & Earn</span></a>
              </div>
            </footer>
          </div>

          <div class="productCard">
            <header>
              <div class="photoBlock" brand="Chroma">
                <img src="./img/products/3.png">
              </div>
            </header>
            <footer>
              <div class="detailsBlock">
                <h5>HP v236w 32GB 2.0 Pen Drive</h5>
                <div class="priceBlock">
                  <span class="discounted">₹ 339</span>
                  <span class="original">₹750</span>
                </div>
              </div>
              <div class="buttonsBlock">
                <a class="buy button fancyBorder"><img src="./img/gradient/shop.svg">Buy</a>
                <a class="play button fancyBorder"><img src="./img/gradient/gift.svg"><span>Play & Earn</span></a>
              </div>
            </footer>
          </div>

          <div class="productCard">
            <header>
              <div class="photoBlock" brand="Myntra">
                <img src="./img/products/4.png">
              </div>
            </header>
            <footer>
              <div class="detailsBlock">
                <h5>UDee Heavy Quality Car Windshield Sun Shade</h5>
                <div class="priceBlock">
                  <span class="discounted">₹ 950</span>
                  <span class="original">₹1405</span>
                </div>
              </div>
              <div class="buttonsBlock">
                <a class="buy button fancyBorder"><img src="./img/gradient/shop.svg">Buy</a>
                <a class="play button fancyBorder"><img src="./img/gradient/gift.svg"><span>Play & Earn</span></a>
              </div>
            </footer>
          </div>

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
                <a class="buy button fancyBorder"><img src="./img/gradient/shop.svg">Buy</a>
                <a class="play button fancyBorder"><img src="./img/gradient/gift.svg"><span>Play & Earn</span></a>
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
                <a class="buy button fancyBorder"><img src="./img/gradient/shop.svg">Buy</a>
                <a class="play button fancyBorder"><img src="./img/gradient/gift.svg"><span>Play & Earn</span></a>
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
                <a class="buy button fancyBorder"><img src="./img/gradient/shop.svg">Buy</a>
                <a class="play button fancyBorder"><img src="./img/gradient/gift.svg"><span>Play & Earn</span></a>
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
                <a class="buy button fancyBorder"><img src="./img/gradient/shop.svg">Buy</a>
                <a class="play button fancyBorder"><img src="./img/gradient/gift.svg"><span>Play & Earn</span></a>
              </div>
            </footer>
          </div>
        </div>
        <a class="link" href="./products.php">View All Products</a>
      </section>


        <section id="about">
          <section class="photo">
            <!-- <img src=""> -->
          </section>
          <section class="contentBlock">
            <div class="titleBlock">
              <h6 class="label">About Us</h6>
              <h2>Shop2cash with <br><span class="highlight">Discount Bank</span> Rewards</h2>
            </div>
            <div class="content">
              <p>Festive sales and discounts are the new normal when it comes to shopping, but can you imagine earning further rewards on every purchase, no matter what day of the year it is?</p>
              <p>Shop2cash collaborates with Discount Bank (DB) to create a platform where our customers can <span class="bold">earn incentives and rewards up to 100% of their transaction amount</span> while shopping! Do you think this is too good to be true? Well, it only gets better. All you have to do to earn these incredible rewards is PLAY GAMES!</p>
              <p>Welcome to the future of shopping!</p>
            </div>
          </section>
        </section>

        <!-- ##### Include FAQ's #####-->
        <?php include './php_includes/faqs.php'; ?>
        <!-- ##### Include Footer #####-->
        <?php include './php_includes/footer.php'; ?>

    </div>

    <!-- ##### Include Game Selection Block #####-->
    <?php include './php_includes/game_selection.php'; ?>
    <!-- ##### Include Login/Register Block #####-->
    <?php include './php_includes/login.php'; ?>


    <div id="overlay"></div>


  <!-- ##### Include common JS files #####-->
  <?php include './php_includes/js.php'; ?>

  <script src="./js/hero.js"></script>
</body>
</html>
