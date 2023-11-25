function MorphedSVG(svgId, firstPath, secondPath, styleClass){
  this.elem = document.getElementById(svgId);
  this.path = this.elem.getElementsByTagName('path')[0];
  this.anim = this.path.getElementsByTagName('animate')[0];
  this.animDur = parseFloat(this.anim.getAttribute('dur')) * 1000;

  this.originalPath = this.path.getAttribute('d');
  this.firstPath = firstPath;
  this.secondPath = secondPath;
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

MorphedSVG.prototype.toggle = function(){
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

var theButtonHor = new MorphedSVG(
  'play-svg-1', PLAY_PATH_1, PAUSE_PATH_1
);

theButtonHor.elem.parentNode.addEventListener('click', function(){
  this.toggle();
}.bind(theButtonHor));




// u('#playButton').on('click', function(e) {
//   console
//   this.toggle(true);
// });














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
