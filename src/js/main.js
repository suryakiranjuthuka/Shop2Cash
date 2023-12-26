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


// Product Info Open Close on Mobile Layout
u('#productPage #info header').on('click', function(e) {
  u('#productPage #info').toggleClass("open");
  // u('#productsPage #filters').removeClass("popup");
});







// ######## Rewards Expiry CountDown Timer ########
function countdown( elementName, minutes, seconds )
{
    var element, endTime, hours, mins, msLeft, time;
    function twoDigits( n )

    {return (n <= 9 ? "0" + n : n);}

    element = document.getElementById( elementName );
    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
    updateTimer();


    function updateTimer()
    {
        msLeft = endTime - (+new Date);

        if ( msLeft < 1000 ) {
            // element.innerHTML = "Time is up!";
            element.children[0].innerHTML = "00";
            element.children[1].innerHTML = "00";

        } else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.children[0].innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins);
            element.children[1].innerHTML = twoDigits( time.getUTCSeconds() )
            // element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
        }
    }
}
countdown( "thirty-countdown", 30, 0 );
