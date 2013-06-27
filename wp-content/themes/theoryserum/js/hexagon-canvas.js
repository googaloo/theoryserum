
/*
 * This handles the Mastheads hexegon blinking
 * through the ticker, randomly choosing
 * which hexegon to "blink"
*/

var canvas;
var stage;
var hexagon_img;
var hexagon = [];
var shrinkRate = 0.008;
var alphaRate = 0.1;
var shrinking = true;
var ranHex;
var hexagonTarget;

function init() {
	
	// Load the hexagon image
	hexagon_img = new Image();
	hexagon_img.src = 'wp-content/themes/theoryserum/images/hexagon.png';
	hexagon_img.onload = handleImageLoad;

}

function handleImageLoad() {

	canvas = document.getElementById("tech-hexagons");
	stage = new createjs.Stage(canvas);

	// Create and position each hexagon
	hexagon[0] = new createjs.Bitmap(hexagon_img);
	hexagon[0].x = 20; hexagon[0].y = 20;
	hexagon[0].alpha = 0.5;

	hexagon[1] = hexagon[0].clone();
	hexagon[1].x = 85; hexagon[1].y = 20;

	hexagon[2] = hexagon[0].clone();
	hexagon[2].x = 150; hexagon[2].y = 20;

	hexagon[3] = hexagon[0].clone();
	hexagon[3].x = 53; hexagon[3].y = 75;

	hexagon[4] = hexagon[0].clone();
	hexagon[4].x = 118; hexagon[4].y = 75;

	hexagon[5] = hexagon[0].clone();
	hexagon[5].x = 183; hexagon[5].y = 75;

	hexagon[6] = hexagon[0].clone();
	hexagon[6].x = 20; hexagon[6].y = 130;

	hexagon[7] = hexagon[0].clone();
	hexagon[7].x = 85; hexagon[7].y = 130;

	hexagon[8] = hexagon[0].clone();
	hexagon[8].x = 150; hexagon[8].y = 130;

	// add hexagons to stage
	stage.addChild(hexagon[0], hexagon[1], hexagon[2], hexagon[3], hexagon[4], hexagon[5], hexagon[6], hexagon[7], hexagon[8]);

	// create ticker
	createjs.Ticker.setFPS = 30;
	//createjs.Ticker.addEventListener('tick', hexagonTick);

	stage.enableMouseOver(10);

	// Add mouseover calling function for all hexagons
	(function(target) {
		
		target.onMouseOver = function() {
			target.shrink = true;
			target.executed = false;
			hexagonTarget = target;
			createjs.Ticker.addEventListener('tick', hexagonTick);
		}

		target.onMouseOut = function() {
			target.scaleX = 1;
			target.scaleY = 1;
			target.alpha = 0.5;
			stage.update();
			hexagonTarget = "";
		}

	})(hexagon[0]);

	(function(target) {
		
		target.onMouseOver = function() {
			target.shrink = true;
			target.executed = false;
			hexagonTarget = target;
			createjs.Ticker.addEventListener('tick', hexagonTick);
		}

		target.onMouseOut = function() {
			target.scaleX = 1;
			target.scaleY = 1;
			target.alpha = 0.5;
			stage.update();
			hexagonTarget = "";
		}

	})(hexagon[1]);

	(function(target) {
		
		target.onMouseOver = function() {
			target.shrink = true;
			target.executed = false;
			hexagonTarget = target;
			createjs.Ticker.addEventListener('tick', hexagonTick);
		}

		target.onMouseOut = function() {
			target.scaleX = 1;
			target.scaleY = 1;
			target.alpha = 0.5;
			stage.update();
			hexagonTarget = "";
		}

	})(hexagon[2]);

	(function(target) {
		
		target.onMouseOver = function() {
			target.shrink = true;
			target.executed = false;
			hexagonTarget = target;
			createjs.Ticker.addEventListener('tick', hexagonTick);
		}

		target.onMouseOut = function() {
			target.scaleX = 1;
			target.scaleY = 1;
			target.alpha = 0.5;
			stage.update();
			hexagonTarget = "";
		}

	})(hexagon[3]);

	(function(target) {
		
		target.onMouseOver = function() {
			target.shrink = true;
			target.executed = false;
			hexagonTarget = target;
			createjs.Ticker.addEventListener('tick', hexagonTick);
		}

		target.onMouseOut = function() {
			target.scaleX = 1;
			target.scaleY = 1;
			target.alpha = 0.5;
			stage.update();
			hexagonTarget = "";
		}

	})(hexagon[4]);

	(function(target) {
		
		target.onMouseOver = function() {
			target.shrink = true;
			target.executed = false;
			hexagonTarget = target;
			createjs.Ticker.addEventListener('tick', hexagonTick);
		}

		target.onMouseOut = function() {
			target.scaleX = 1;
			target.scaleY = 1;
			target.alpha = 0.5;
			stage.update();
			hexagonTarget = "";
		}

	})(hexagon[5]);

	(function(target) {
		
		target.onMouseOver = function() {
			target.shrink = true;
			target.executed = false;
			hexagonTarget = target;
			createjs.Ticker.addEventListener('tick', hexagonTick);
		}

		target.onMouseOut = function() {
			target.scaleX = 1;
			target.scaleY = 1;
			target.alpha = 0.5;
			stage.update();
			hexagonTarget = "";
		}

	})(hexagon[6]);

	(function(target) {
		
		target.onMouseOver = function() {
			target.shrink = true;
			target.executed = false;
			hexagonTarget = target;
			createjs.Ticker.addEventListener('tick', hexagonTick);
		}

		target.onMouseOut = function() {
			target.scaleX = 1;
			target.scaleY = 1;
			target.alpha = 0.5;
			stage.update();
			hexagonTarget = "";
		}

	})(hexagon[7]);

	(function(target) {
		
		target.onMouseOver = function() {
			target.shrink = true;
			target.executed = false;
			hexagonTarget = target;
			createjs.Ticker.addEventListener('tick', hexagonTick);
		}

		target.onMouseOut = function() {
			target.scaleX = 1;
			target.scaleY = 1;
			target.alpha = 0.5;
			stage.update();
			hexagonTarget = "";
		}

	})(hexagon[8]);
 
	// Update stage
	stage.update();

}

function hexagonTick(e) {

	// If the hexagon is fully scaled, then start shrinking
	//console.log(hexagonTarget);
	
	if ( hexagonTarget.scaleX >= 1 && hexagonTarget.executed === false ) {

		hexagonTarget.shrink = true;
		hexagonTarget.executed = true;
		//ranHex = getRandomHexagon(ranHex);

	// If the hexagon is below .93 size, then fade and grow it back up
	} else if ( hexagonTarget.scaleX <= 0.93 ) {

		hexagonTarget.shrink = false;

	}

	// Functions to shrink or grow if shrinking is true/false
	if ( hexagonTarget.shrink ) {

		shrinkHexagon(hexagonTarget);

	} else {

		if ( hexagonTarget.scaleX <= 1 ) {

			growHexagon(hexagonTarget);

		} 

	}

}

// Function to shrink the hexagon
function shrinkHexagon(hexagon) {

	//console.log(hexagon.scaleX);
	//console.log(hexagon.scaleX - shrinkRate);
	hexagon.scaleX -= shrinkRate;
	hexagon.scaleY -= shrinkRate;
	hexagon.alpha -= alphaRate;
	stage.update();

}

// Function to grow the hexagon
function growHexagon(hexagon) {

	hexagon.scaleX += shrinkRate;
	hexagon.scaleY += shrinkRate;
	hexagon.alpha += alphaRate;
	stage.update();

}