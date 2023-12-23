// FAQ's
u('#faqs .faq').on('click', function(e) {
  if(u(this).hasClass("active")) {
    u(this).removeClass("active");
  } else {
    u('#faqs .faq').removeClass("active");
    u(this).addClass("active");
  }
});

// View More FAQ's
u('#faqs .viewMoreButton').on('click', function(e) {
  u('#faqs .faq').removeClass("hidden");
  u(this).addClass("displayNone");
});

// Mobile Menu
u('#header').on('click', function(e) {
      // console.log("true");
  if(u('#mobileMenu #menu').is(':checked')) {
    // console.log("true");
    u('#header').addClass("slide");
    u('#header').addClass("mobile");
  } else {
    console.log("false");
    u('#header').removeClass("slide");
    u('#header').removeClass("mobile");
  }
});
// Remove Active Mobile Menu
u('#header nav').on('click', function(e) {
  const checkbox = document.querySelector('#mobileMenu #menu');
  checkbox.checked = false;
  u('#mobileMenu #menu').trigger('click');
});


// Product Filters Display Mobile
u('#productsPage .filterButton').on('click', function(e) {
  u('#overlay').addClass("active");
  u('#productsPage #filters').addClass("popup");
});
u('#overlay').on('click', function(e) {
  u(this).removeClass("active");
  u('#productsPage #filters').removeClass("popup");
});
