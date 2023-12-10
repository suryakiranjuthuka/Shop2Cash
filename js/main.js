function MorphedSVG(svgId, firstPath, secondPath, styleClass) {

  this.elem = document.getElementById('play-svg-1');
  this.path = this.elem.getElementsByTagName('path')[0];
  this.anim = this.path.getElementsByTagName('animate')[0];
  this.animDur = parseFloat(this.anim.getAttribute('dur')) * 1000;

  this.originalPath = this.path.getAttribute('d');
  // this.firstPath = firstPath;
  this.firstPath = 'M11,8 L18,11.74 18,20.28 11,24 11,8   M18,11.74 L26,16 26,16 18,20.28 18,11.74';
  // this.secondPath = secondPath;
  this.secondPath = 'M9,8  L14,8     14,24    9,24  9,8    M19,8     L24,8  24,24 19,24    19,8';
  this.state = MorphedSVG.STATE_1;
  this.styleClass = styleClass;

  this.timeout;
}

MorphedSVG.STATE_1 = true;
MorphedSVG.STATE_2 = false;

MorphedSVG.prototype.toState = function(state){
  if(state == this.state) return;

  switch(state){
  case MorphedSVG.STATE_1:
    this._set(this.firstPath, this.secondPath, this.firstPath);
    this.styleClass ? this.elem.classList.add(this.styleClass) : null;
    break;

  case MorphedSVG.STATE_2:
    this._set(this.secondPath, this.firstPath, this.secondPath);
    this.styleClass ? this.elem.classList.remove(this.styleClass) : null;
    break;
  }

  this.state = state;
  this.anim.beginElement();

  if(this.originalPath && this.animDur){
    this.timeout ? clearTimeout(this.timeout) : null;
    this.timeout = setTimeout(this._resetOriginal.bind(this), this.animDur);
  }
}

MorphedSVG.prototype.toggle = function(state){
  this.toState(!this.state);
}

// MorphedSVG.prototype.toggle = function(lol){
//   this.toState(lol);
// }

MorphedSVG.prototype._set = function(d, from, to){
  this.path.setAttribute('d', d);
  this.anim.setAttribute('from', from);
  this.anim.setAttribute('to', to);
}

MorphedSVG.prototype._resetOriginal = function(){
  if(this.state == MorphedSVG.STATE_1)
    this._set(this.originalPath, '', '');
}


////////////////////////////////////////////////

/* HORIZONTAL */

const PLAY_PATH_1  = 'M11,8 L18,11.74 18,20.28 11,24 11,8   M18,11.74 L26,16 26,16 18,20.28 18,11.74',
      PAUSE_PATH_1 = 'M9,8  L14,8     14,24    9,24  9,8    M19,8     L24,8  24,24 19,24    19,8';

// var theButtonHor = new MorphedSVG(
//   'play-svg-1', PLAY_PATH_1, PAUSE_PATH_1
// );

// var theButtonHor = new MorphedSVG();

// document.getElementById('play-svg-1').addEventListener('click', function(){
//   console.log(this)
//   this.toggle();
// }.bind(theButtonHor));



var playController = new MorphedSVG();


// u('#playButton').on('click', function(e) {
//   playController.toState(false);
// });







// Countdown timer for 5seconds
var timeleft = 4;
var downloadTimer = setInterval(function(){
  if(!play) {
    if(timeleft <= 0){
      clearInterval(downloadTimer);
    } else {
      document.getElementById("countdown").innerHTML = "Playing in..." + timeleft;
    }
    timeleft -= 1;
  }
}, 1000);


// Trigger after 5s
const pageLoad5 = setTimeout(function(){
  if(!play) u('#playButton').trigger('click');
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
u('#playButton').on('click', function(e) {
  // Clears the timeout() if User clicks play before it
  clearTimeout(pageLoad5);
  clearInterval(downloadTimer);

  // Don't enter if its already playing
  if(!play) {
    play = true;
    playController.toState(false);
    u('#playContainer .stepCount span').addClass("running");

    // Calls each of the 4 step's
    function callSteps() {
      u('#playContainer .stepCount span').text('Step ' + stepNumber);
      u('#circleProgress .progress').addClass("active");
      u('.stepWrapper .step.' + ref[stepNumber]).addClass("active");
      stepNumber++;

      window.stepTimer = setTimeout(function(){
        // Reset
        if(stepNumber > 4) {
          stepNumber = 1;
        }
        // If step1 -> remove step4's active Else add active
        if(stepNumber == 1) u('.stepWrapper .step.four').removeClass("active");
        else u('.stepWrapper .step.' + ref[stepNumber-1]).removeClass("active");

        // and schedule a repeat
        callSteps();
        // if (play) setTimeout(callSteps, 500);
      }, 6000);
    }

    // start the cycle
    callSteps();
  } else {
    play = false;
    playController.toState(true);
    // Clear any running Steps
    clearTimeout(window.stepTimer);
      u('#playContainer .stepCount span').removeClass("running");
      u('#playContainer .stepCount span').text('Paused');

      // Remove Circle Progress Bar on indivudal step active
      u('#circleProgress .progress').removeClass("active");
      stepNumber = stepNumber - 1;
  }
});


// On click of individal step card
u('.step').on('click', function(e) {

  play = false;
  playController.toState(true);
  // Clear any running Steps
  clearTimeout(pageLoad5);
  clearTimeout(window.stepTimer);
  clearInterval(downloadTimer);

  u('#playContainer .stepCount span').removeClass("running");
  // u('#playContainer .stepCount span').text('Paused');
  u('#playContainer .stepCount span').text('Step ' + u(this).data('step'));
  // Remove Circle Progress Bar on indivudal step active
  u('#circleProgress .progress').removeClass("active");

  u('.step').removeClass("active")
  u(this).addClass("active");

  stepNumber = u(this).data('step');

});
