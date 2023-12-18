<!doctype html>
<html class="no-js" lang="" xmlns:xlink="http://www.w3.org/1999/xlink">

<head>
  <meta charset="utf-8">
  <title>Shop2Cash - Home Page</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&family=Mulish:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <div id="headerHeroWrapper">
    <header id="header">
      <img id="logo" src="./img/shop2cash_logo.svg">
      <nav>
        <a href="#header">Home</a>
        <a href="#featuredProducts">Products</a>
        <a href="#faqs">FAQ's</a>
        <a href="#about">About</a>
        <a href="#footer">Contact</a>
        <svg viewBox="0 0 30 30"><use xlink:href="./img/all_svgs.svg#account"></use></svg>
      </nav>
      <div id="mobileMenu">
        <input type="checkbox" id="menu">
        <label for="menu" class="icon">
          <div class="menu"></div>
        </label>
      </div>
    </header>

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
              <h4>Play to earn rewards</h4>
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
          <h6 class="label">Available Brands</h6>
          <h2>Your favourite brands with <br><span class="highlight">huge</span> discounts</h2>
          <a class="link" href="#">Learn More</a>
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
                <a class="buy button fancyBorder" href=""><img src="./img/gradient/shop.svg">Buy</a>
                <a class="play button fancyBorder" href=""><img src="./img/gradient/gift.svg"><span>Play & Earn</span></a>
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
                <a class="buy button fancyBorder" href=""><img src="./img/gradient/shop.svg">Buy</a>
                <a class="play button fancyBorder" href=""><img src="./img/gradient/gift.svg"><span>Play & Earn</span></a>
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
                <a class="buy button fancyBorder" href=""><img src="./img/gradient/shop.svg">Buy</a>
                <a class="play button fancyBorder" href=""><img src="./img/gradient/gift.svg"><span>Play & Earn</span></a>
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
                <a class="buy button fancyBorder" href=""><img src="./img/gradient/shop.svg">Buy</a>
                <a class="play button fancyBorder" href=""><img src="./img/gradient/gift.svg"><span>Play & Earn</span></a>
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
        <a class="link" href="#">View All Products</a>
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

        <section id="faqs">
          <div class="titleBlock">
            <h6 class="label">HAVE MORE QUESTIONS</h6>
            <h2>FAQ's</h2>
          </div>
          <section class="contentBlock">
            <div class="faq">
              <div class="question">What is Shop2Cash, and how does it work?</div>
              <div class="content">
                <p>Shop2Cash, by partnering with various online stores, acts as an aggregator of e-commerce websites that helps customers find products with the best deals from a variety of retailers.</p>
                <p>Our mission is to provide a unified shopping experience.</p>
              </div>
            </div>
            <div class="faq">
              <div class="question">Do I need a bank account to claim my rewards?</div>
              <div class="content">
                <p>Yes, you need a bank account or UPI ID to transfer your reward amount to your bank. Your profits will remain safely in your Shop2Cash account until you initiate a transfer to your bank account.</p>
              </div>
            </div>
            <div class="faq">
              <div class="question">How does the customer (an online shopper) benefit from Shop2Cash?</div>
              <div class="content">
                <p><span class="bold">Time:</span> <br>Shop2Cash’s one-stop destination concept is convenient and time-saving for customers as they can find a diverse range of products on one platform.</p>
                <p><span class="bold">Cost:</span> <br>Offers price comparison across retailers, making it cost-effective for customers.</p>
                <p><span class="bold">Personalization:</span> <br>Provides personalized product recommendations tailored to their preferences by utilizing advanced algorithms that analyze a user’s browsing and purchase history.</p>
                <p><span class="bold">Security:</span> <br>Prioritizes user security by employing industry-standard encryption for all transactions.</p>
              </div>
            </div>
            <div class="faq">
              <div class="question">How do I redeem my rewards, and what are the timelines?</div>
              <div class="content">
                <p>You need a bank account or UPI ID to transfer your reward amount to your bank. Your profits will remain safely in your Shop2Cash account until you initiate a transfer to your bank account.</p>
                <p>The timeline for your reward deposit is dependent on the retailer. After a completed transaction, you will receive an email from us within 5 minutes to 48 hours, notifying you about the rewards that are due.</p>
                <p>Between 48 hours and 90 days (retailer-specific), the status of your cashback will be updated to “confirmed” when the retailer confirms your sale post-product return window closure.</p>
                <p>You can then transfer your rewards to a registered bank account by going to the “withdraw” section in your profile.</p>
              </div>
            </div>
            <div class="faq hidden">
              <div class="question">Is Shop2Cash limited to specific regions?</div>
              <div class="content">
                <p>Shop2cash currently operates in “xyz” region, or “domestically in India”. But we are continuously expanding and aim to operate in multiple countries, providing a global platform for retailers and shoppers.</p>
              </div>
            </div>
            <div class="faq hidden">
              <div class="question">What is a Discount Bank, and how does it work?</div>
              <div class="content">
                <p>Discount Bank is a gaming service offered by Shop2Cash.</p>
                <p>DB offers a variety of games for customers to play, through which they can win up to 100% cash back on their purchase.</p>
              </div>
            </div>
            <div class="faq hidden">
              <div class="question">What is the age requirement to play games on Shop2Cash?</div>
              <div class="content">
                <p>You must be at least 18 years old to play DB games.</p>
              </div>
            </div>
            <div class="faq hidden">
              <div class="question">How does a retailer partner with Shop2Cash?</div>
              <div class="content">
                <p>Interested retailers can reach out to our integration team @‘email address’. We offer an efficient solution for seamless and hassle-free integration.</p>
              </div>
            </div>
            <div class="faq hidden">
              <div class="question">⁠How do I return my product, or how do I contact customer care?</div>
              <div class="content">
                <p>Shop2Cash facilitates returns based on the respective retailer's policies. We do offer chat/call support at —————-</p>
              </div>
            </div>
            <div class="viewMoreButton">View More</div>
          </section>
        </section>

        <footer id="footer">
          <section id="nav">
            <div class="label">Navigation</div>
            <nav class="navBlock">
              <a href="#header">Home</a>
              <a href="#featuredProducts">Products</a>
              <a href="#faqs">FAQ's</a>
              <a href="#about">About</a>
              <a href="#footer">Contact</a>
            </nav>
          </section>
          <section id="search">
            <div class="label">Search</div>
            <div class="contentBlock">
              <div class="search">
                <svg viewBox="0 0 30 30"><use xlink:href="./img/all_svgs.svg#search"></use></svg>
                <input type="search" name="Search Products" placeholder="Search Products">
              </div>
              <div class="seperator"></div>
              <p class="copyright">© 2023 Shop2Cash. All Rights Reserved</p>
            </div>
          </section>
          <section id="contact">
            <div class="label">Contact</div>
            <div class="contentBlock">
              <div class="phoneEmail">
                <span>
                  <svg viewBox="0 0 30 30"><use xlink:href="./img/all_svgs.svg#phone"></use></svg>
                  <a href="tel:+919030067149">+91 90300-67149</a>
                </span>
                <span>
                  <svg viewBox="0 0 30 30"><use xlink:href="./img/all_svgs.svg#email"></use></svg>
                  <a href = "mailto:help@shop2cash.in">help@shop2cash.in</a>
                </span>
              </div>
              <div class="social">
                <span class="button fancyBorder">
                  <svg viewBox="0 0 30 30"><use xlink:href="./img/all_svgs.svg#facebook"></use></svg>
                </span>
                <span class="button fancyBorder">
                  <svg viewBox="0 0 30 30"><use xlink:href="./img/all_svgs.svg#twitter"></use></svg>
                </span>
                <span class="button fancyBorder">
                  <svg viewBox="0 0 30 30"><use xlink:href="./img/all_svgs.svg#whatsapp"></use></svg>
                </span>
              </div>
            </div>
          </section>
        </footer>


    </div>


  <script src="./js/modernizr-3.11.2.min.js"></script>
  <script src="./js/plugins.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/umbrellajs"></script>
  <script src="./js/main.js"></script>
</body>

</html>
