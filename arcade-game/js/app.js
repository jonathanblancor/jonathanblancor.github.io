// Enemies the player must avoid
var Enemy = function(xPosition, yPosition) {
    this.x = xPosition;  //x coordinate of the enemies
    this.y = yPosition;  //y coordinate of the enemies
    // The image/sprite for our enemies, this uses
    // a helper provided to easily load images
    this.sprite = 'images/enemy-bug.png';

    //Set initial the speed of the bugs.
    this.speed = randomNumGenerator(250,850);
};

// Update the enemy's position
// Parameter: dt, a time delta between ticks
// Movement should be multiplied by the dt parameter which will
// ensure the game runs at the same speed for all computers.
Enemy.prototype.update = function(dt) {

    //Keep moving while enemies are within the canvas
    if (this.x <= canvasWidth){
        this.x += dt * this.speed;
    }
    //Reset position, randomize speed & y-position when enemies move off screen
    else {
        this.x = -90;
        this.speed = randomNumGenerator(250,850);
        this.y = yLocations[ randomNumGenerator(0,3) ];
    }
};

// Draw the enemy on the screen
Enemy.prototype.render = function() {
    ctx.drawImage(Resources.get(this.sprite), this.x, this.y);
};

// The player of the game
var Player = function(xPosition, yPosition) {
    this.x = xPosition; //x coordinate of the player
    this.y = yPosition; //y coordinate of the player
    this.sprite = 'images/char-horn-girl.png'; // The image/sprite for the player
};

// Update the position of the player
// Parameter: location, if the player moves along x or y
//            newPosition, to place the player in the new position
Player.prototype.update = function(location, newPosition) {
    //If moving along the x axis and within boundaries, update x coordinate
    if (location === 'x' && (this.x + newPosition) > -1 && (this.x + newPosition) < 506){
        this.x += newPosition;
    }
    //If moving along the y axis and within boundaries, update y coordinate
    else if (location === 'y' && (this.y + newPosition) <= 400) {
        this.y += newPosition;

        //If player reached the top, wait a bit before resetting position
        if (this.y === -25) {
            this.y = -11; //Adjust position so player doesn't go off top screen

            //Slow resetting the position a bit.
            //Uses alternate variable, 'self', instead of keyword 'this'
            //because setTimeout() resets 'this' to 'window', which is
            //the object that setTimeout() is being called upon.
            var self = this;
            window.setTimeout(function() {self.x = playerX;
                                          self.y = playerY}, 50);
       };
    }
};

//Determine which key was pressed, and send the correct offset to update player's position
Player.prototype.handleInput = function(keyPressed) {
    if (keyPressed === 'left')
        this.update('x', -101);

    else if (keyPressed === 'up')
        this.update('y', -85);

    else if (keyPressed === 'right')
        this.update('x', 101);

    else if (keyPressed === 'down')
        this.update('y', 85);
};

// Draw the player on the screen
Player.prototype.render = function() {
    ctx.drawImage(Resources.get(this.sprite), this.x, this.y);
};

//y coordinates where to place the enemies.
var yLocations = [60, 145 , 227];

// Instantiate objects.
var enemy1 = new Enemy(70, yLocations[ randomNumGenerator(0,3) ]);
var enemy2 = new Enemy(0, yLocations[ randomNumGenerator(0,3) ]);
var enemy3 = new Enemy(200, yLocations[ randomNumGenerator(0,3) ]);
var enemy4 = new Enemy(-90, yLocations[ randomNumGenerator(0,3) ]);
var enemy5 = new Enemy(300, yLocations[ randomNumGenerator(0,3) ]);

// Place enemy objects in an array called allEnemies which is used by engine.js
var allEnemies = [enemy1, enemy2, enemy3, enemy4, enemy5];

var playerX = 202, playerY = 400; //starting position

// Place the player object in a variable called player
var player = new Player(playerX, playerY);

// This listens for key presses and sends the keys to your
// Player.handleInput() method.
document.addEventListener('keyup', function(e) {
    var allowedKeys = {
        37: 'left',
        38: 'up',
        39: 'right',
        40: 'down'
    };

    player.handleInput(allowedKeys[e.keyCode]);
});

//Generate a random integer between min inclusive and max exclusive
function randomNumGenerator(min, max) {
    return Math.floor(Math.random() * (max - min) + min);
}