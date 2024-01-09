<!doctype html>
<html class="no-js" lang="" xmlns:xlink="http://www.w3.org/1999/xlink">
<head>
  <meta charset="utf-8">
  <title>Shop2Cash - My Wallet | Join the Cashback Revolution: India's No.1 Cashback Website</title>
  <meta name="description" content="Unlock incredible online shopping rewards and discounts on our platform. Save big while you shop for your favorite products in India.">
  <meta name="keywords" content="Online shopping rewards, Online Shopping Cashback Offers, Best Deals on Online Shopping, Online shopping offers, Online Shopping Offers in India, Online shopping discounts, Online Shopping Discounts in India, Online shopping cashback, Exclusive Online Shopping Offers">
  <!-- ##### Include Meta & Link Tags #####-->
  <?php include './php_includes/html_head.php'; ?>
</head>

<body id="myAccountPage">

  <!-- ##### Include Header #####-->
  <?php include './php_includes/header.php'; ?>

  <section id="myAccountContainer">

    <div class="sidebar">
      <span class="sidebarPosition">
        <div class="searchBlock search">
          <svg viewBox="0 0 30 30"><use xlink:href="./img/all_svgs.svg#search"></use></svg>
          <input type="search" name="Search Products" placeholder="Search Products">
        </div>
        <section class="contentBlock">
          <header>
            <p>Account</p>
            <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#settings"></use></svg>
          </header>
          <section class="category">
            <a href="#">
              <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#account1"></use></svg>
              <span>My Account</span>
            </a>
            <a href="./my_games.php">
              <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#game2"></use></svg>
              <span>My Games</span>
            </a>
            <a href="#">
              <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#link"></use></svg>
              <span>My Links</span>
            </a>
            <a href="#">
              <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#redeem"></use></svg>
              <span>My Rewards</span>
            </a>
            <a class="active" href="./my_wallet.php">
              <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#wallet"></use></svg>
              <span>My Wallet</span>
            </a>
            <a href="#">
              <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#payments"></use></svg>
              <span>Withdraw</span>
            </a>
            <a href="#">
              <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#logout"></use></svg>
              <span>Logout</span>
            </a>
          </section>
        </section>
      </span>
    </div>

    <div class="wrapper">
      <div class="sidebarTrigger">
        <svg viewBox="0 0 24 24"><use xlink:href="./img/all_svgs.svg#settings"></use></svg>My Account
      </div>

      <h3>My Wallet</h3>
      <div class="scroll-container list">
        <table class="table tableList scroll">
          <tbody>
            <tr>
              <td class="semiBold">Pending Rewards</td>
              <td>₹0.00</td>
              <td><a class="plain_link" href="#">Details</a></td>
            </tr>
            <tr>
              <td class="semiBold">Confirmed Rewards</td>
              <td>₹371.25</td>
              <td><a class="plain_link" href="#">Details</a></td>
            </tr>
            <tr>
              <td class="semiBold">Total Payable</td>
              <td>₹371.25</td>
              <td></td>
            </tr>
            <tr>
              <td class="semiBold">Claimed / Paid</td>
              <td>₹371.25</td>
              <td><a class="plain_link" href="#">Details</a></td>
            </tr>
            <tr>
              <td class="semiBold">Payable</td>
              <td>₹0.00</td>
              <td><a class="plain_link" href="#">Withdraw</a></td>
            </tr>
          </tbody>
        </table>
      </div>

      <section class="accountCard">
        <h5>Conversion Flow for Shop2Cash:</h5>
        <ul>
          <li>The user initiates their shopping journey by clicking on the Shop2Cash tracking link.</li>
          <li>The user completes their purchase, choosing either the online payment method or cash on delivery (COD).</li>
          <li>Within 24 to 48 hours, the system records the purchase and adds it to the user's Shop2Cash account, labeling it as "Pending."</li>
          <li>The sale undergoes a validation process, which typically takes 45 to 60 days. During this time, the status transitions from "Pending" to "Verified."</li>
          <li>If the user decides to return or cancel the item, the transaction is invalidated, and the status changes to "Rejected."</li>
          <li>Note: In certain instances, sale tracking may only commence after the shipment has been dispatched, and it might take up to 48 hours for the transaction to become visible in the Shop2Cash Dashboard.</li>
        </ul>
      </section>

    </div>
  </section>


  <!-- ##### Include FAQ's #####-->
  <?php // include './php_includes/faqs.php'; ?>
  <!-- ##### Include Footer #####-->
  <?php include './php_includes/footer.php'; ?>


  <div id="overlay"></div>

  <!-- ##### Include common JS files #####-->
  <?php include './php_includes/js.php'; ?>

  <script type="text/javascript">
    // ######## Add Active Page Nav ########
    u('#header nav #accountMenu .accountName').addClass("active");
  </script>
</body>
</html>
