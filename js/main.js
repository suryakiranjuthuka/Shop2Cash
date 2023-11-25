// Trigger after 5s
const timeout = setTimeout(function(){
  u('#circleProgress').trigger('click');
}, 5000);


// Variables
var stepNumber = 1;
var play = false;

// Step numbers reference object
const ref = {
  1 : "one",
  2 : "two",
  3 : "three",
  4 : "four" 
}


// On click of the Play Button
u('#circleProgress').on('click', function(e) {

  // Don't enter if its already playing
  if(!play) {
    // Clears the timeout() if User clicks play before it
    clearTimeout(timeout);

    play = true;
    u('#playContainer .stepCount span').addClass("running");

    // Calls each of the 4 step's
    function callSteps() {
      u('#playContainer .stepCount span').text('Step ' + stepNumber);
      u('#circleProgress .progress').addClass("active");
      u('.stepWrapper .step.' + ref[stepNumber]).addClass("active");
      stepNumber++;
      // Reset
      if(stepNumber > 4) { 
        stepNumber = 1;
      }

      window.stepTimer = setTimeout(function(){
        // If step1 -> remove step4's active Else add active
        if(stepNumber == 1) u('.stepWrapper .step.four').removeClass("active");
        else u('.stepWrapper .step.' + ref[stepNumber-1]).removeClass("active");
       
        // and schedule a repeat
        callSteps();
        // if (play) setTimeout(callSteps, 500);
      }, 10000);
    }

    // start the cycle
    callSteps();
  }
});


// On click of individal step card
u('.step').on('click', function(e) {
  play = false;
  // Clear any running Steps
  clearTimeout(window.stepTimer);

  // If the elemenent is already active skip it
  if(u(this).data('step') !== stepNumber)
  {
    u('#playContainer .stepCount span').removeClass("running");
    u('#playContainer .stepCount span').text('Paused'); 
    
    stepNumber = u(this).data('step');

    // Remove Circle Progress Bar on indivudal step active
    u('#circleProgress .progress').removeClass("active");

    u('.step').removeClass("active")
    u(this).addClass("active");
  }
});
