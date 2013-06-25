
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
	createjs.Ticker.addEventListener('tick', hexagonTick);

	// Update stage
	stage.update();

}

ranHex = getRandomHexagon(ranHex);

function hexagonTick(e) {

	// If the hexagon is fully scaled, then start shrinking
	if ( hexagon[ranHex].scaleX >= 1 ) {

		shrinking = true;
		ranHex = getRandomHexagon(ranHex);

	// If the hexagon is below .93 size, then fade and grow it back up
	} else if ( hexagon[ranHex].scaleX <= 0.93 ) {

		shrinking = false;

	}

	// Functions to shrink or grow if shrinking is true/false
	if ( shrinking ) {

		shrinkHexagon();

	} else if (shrinking == false ) {

		growHexagon();

	}

}

// Function to get random hexagon
function getRandomHexagon(current) {

	ranHex = Math.floor(Math.random() * 8 ) + 1;

	if( current == ranHex ) {
		ranHex = Math.floor(Math.random() * 8 ) + 1;
	}

	return ranHex;

}

// Function to shrink the hexagon
function shrinkHexagon() {

	hexagon[ranHex].scaleX -= shrinkRate;
	hexagon[ranHex].scaleY -= shrinkRate;
	hexagon[ranHex].alpha -= alphaRate;
	stage.update();

}

// Function to grow the hexagon
function growHexagon() {

	hexagon[ranHex].scaleX += shrinkRate;
	hexagon[ranHex].scaleY += shrinkRate;
	hexagon[ranHex].alpha += alphaRate;
	stage.update();

}