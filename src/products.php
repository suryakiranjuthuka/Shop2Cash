<!doctype html>
<html class="no-js" lang="" xmlns:xlink="http://www.w3.org/1999/xlink">
<head>
  <meta charset="utf-8">
  <title>Shop2Cash - Products Page | Join the Cashback Revolution: India's No.1 Cashback Website</title>
  <meta name="description" content="Unlock incredible online shopping rewards and discounts on our platform. Save big while you shop for your favorite products in India.">
  <meta name="keywords" content="Online shopping rewards, Online Shopping Cashback Offers, Best Deals on Online Shopping, Online shopping offers, Online Shopping Offers in India, Online shopping discounts, Online Shopping Discounts in India, Online shopping cashback, Exclusive Online Shopping Offers">
  <!-- ##### Include Meta & Link Tags #####-->
  <?php include './php_includes/html_head.php'; ?>
</head>

<body id="productsPage">

  <!-- ##### Include Header #####-->
  <?php include './php_includes/header.php'; ?>

  <div id="productsContainer">

    <div id="filters" class="sidebar">
      <span class="sidebarPosition">
        <div class="searchBlock search">
          <svg viewBox="0 0 30 30"><use xlink:href="./img/all_svgs.svg#search"></use></svg>
          <input type="search" name="Search Products" placeholder="Search in Fashion">
        </div>
        <section class="contentBlock">
          <header>
            <p>Filters</p>
            <svg viewBox="0 0 30 30"><use xlink:href="./img/all_svgs.svg#filter"></use></svg>
          </header>
          <section class="category">
            <a href="#">
              <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#category"></use></svg>
              <span>Health & Beauty</span>
            </a>
            <a href="#">
              <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#category"></use></svg>
              <span>Gifts & Toys</span>
            </a>
            <a class="active" href="#">
              <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#check"></use></svg>
              <span>Fashion</span>
            </a>
            <a href="#">
              <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#category"></use></svg>
              <span>Sports</span>
            </a>
            <a href="#">
              <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#category"></use></svg>
              <span>Home & Kitchen</span>
            </a>
            <a href="#">
              <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#category"></use></svg>
              <span>Electronics</span>
            </a>
            <a href="#">
              <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#category"></use></svg>
              <span>Groceries</span>
            </a>
            <a href="#">
              <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#category"></use></svg>
              <span>Food</span>
            </a>
            <a href="#">
              <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#category"></use></svg>
              <span>Others</span>
            </a>
          </section>
        </section>
      </span>
    </div>

    <div class="wrapper">

      <section id="appliedFilters">
        <div class="sidebarTrigger">
          <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#filter"></use></svg> Filters
        </div>
        <div>
          <span class="appliedFilterTitle">SEARCH:</span>
          <div href="#" class="chip">
            <svg viewBox="0 0 30 30"><use xlink:href="./img/all_svgs.svg#search"></use></svg>
            <span>Allen Solley Jacket</span>
            <svg class="close" viewBox="0 0 30 30"><use xlink:href="./img/all_svgs.svg#close"></use></svg>
          </div>
        </div>
        <div>
          <span class="appliedFilterTitle">CATEGORY:</span>
          <div class="chip">
            <svg viewBox="0 0 30 30"><use xlink:href="./img/all_svgs.svg#category"></use></svg>
            <span>Fashion</span>
            <svg class="close" viewBox="0 0 30 30"><use xlink:href="./img/all_svgs.svg#close"></use></svg>
          </div>
        </div>

      </section>

      <section id="allProducts">
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
              <a class="buy button fancyBorder"><img src="./img/gradient/shop.svg">Buy</a>
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

      </section>

      <!-- Pagination Controls -->
      <section id="pagination">
        <a class="disabled prevNext" href="#"><svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#prev"></use></svg></a>
        <a href="#">1</a>
        <a class="active" href="#">2</a>
        <a href="#">3</a>
        <a href="#">...</a>
        <a href="#">48</a>
        <a class="prevNext" href="#"><svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#next"></use></svg></a>
      </section>

    </div>
  </div>


  <!-- ##### Include FAQ's #####-->
  <?php include './php_includes/faqs.php'; ?>
  <!-- ##### Include Footer #####-->
  <?php include './php_includes/footer.php'; ?>

  <!-- ##### Include Game Selection Block #####-->
  <?php include './php_includes/game_selection.php'; ?>
  <!-- ##### Include Login/Register Block #####-->
  <?php include './php_includes/login.php'; ?>


  <div id="overlay"></div>

  <!-- ##### Include common JS files #####-->
  <?php include './php_includes/js.php'; ?>

  <script type="text/javascript">
    // ######## Add Active Page Nav ########
    u('#header nav a:nth-child(2)').addClass("active");
  </script>
</body>
</html>
