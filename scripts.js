//-----------------------
//Game creation functions
//-----------------------

//Create new game
function createGame() {
    
    //Make new tiles
    createTiles();
}

//Load game
function loadGame() {

    //Get saved values
    tiles = JSON.parse(localStorage.getItem('bingoGame'));

    //Show tiles
    addTiles();
}

//Reset game
function resetGame() {

    if (window.confirm('Haluatko varmasti nollata pelin?')) {

        //Clear localstorage
        localStorage.removeItem('bingoGame');

        //Create new game
        createGame();
    }
}

//Reset button listener
resetButton.addEventListener('click', resetGame);

//Check if there is a saved game or create a new one
if ( localStorage.getItem('bingoGame') !== null ) {
    loadGame();
} else {
    createGame();
}

//--------------
//Tile functions
//--------------

//Create tiles
function createTiles() {
    let tmp = [];

    //Loop all colors
    tileColors.forEach( color => {

        //Create arrays and fill in numbers
        for (let i = 1; i <= maxNumbers; i++) {
            
            //Create object
            let objects = {}
            objects.color = color;
            objects.value = i;
            objects.shown = false;

            //Push to array
		    tmp.push(objects);
        } 
    });

    //Random order tiles
    tiles = shuffle(tmp);

    //Save tile order to local storage
    localStorage.setItem('bingoGame', JSON.stringify(tiles));

    //Show tiles
    addTiles();
}

//Add tiles to game area
function addTiles() {

    //Reset board
    gameArea.innerHTML = '';

    //Reset button state
    tileButton.disabled = false;

    //Count visible tiles
    let visible = 0;

    //Loop all tiles
    tiles.forEach( tile => {
        //Create tile element
        let div = document.createElement('div');
        div.className = 'tile';
        div.classList.add(tile.color);
        div.id = 'tile-'+tile.color+'-'+tile.value;

        //Add visible class if already shown
        if ( tile.shown === true ) {
            div.classList.add('visible');

            visible += 1;
        }

        //Add tile number
        div.innerHTML = '<p>' + tile.value + '</p>';

        //Insert tile to game area
        gameArea.appendChild(div);
    });

    //If no visible tiles
    if ( visible === 0 ) {
        //Create tile element
        let message = document.createElement('div');
        message.id = 'tile-message';
        message.className = 'message';
        message.innerHTML = '<p>Aloita lisäämällä ensimmäinen ruutu.</p>';

        //Insert message to game area
        gameArea.appendChild(message);

        //Change button text
        tileButton.innerHTML = 'Aloita peli';
    }

    //If all tiles are visible
    if ( visible === tiles.length ) {
        tileButton.innerHTML = 'Ei enempää ruutuja';
        tileButton.disabled = true;
    }
}

//Show next tile
function showTile() {

    //Delete message if it exists
    let message = document.getElementById('tile-message');

    if ( message ) {
        message.remove();
    }

    
    //Change button text back if needed
    if ( tileButton.innerHTML !== 'Seuraava ruutu' ) {
        tileButton.innerHTML = 'Seuraava ruutu';
    }

    //Find next hidden tile
    let next = tiles.find(tile => tile.shown === false);

    //If exists
    if ( typeof next != 'undefined' ) {

        //Set its value to true
        next.shown = true;

        //Save tile changes
        localStorage.removeItem('bingoGame');
        localStorage.setItem('bingoGame', JSON.stringify(tiles));

        //Add class visible
        document.getElementById('tile-'+next.color+'-'+next.value).classList.add('visible');

        //Scroll page to bottom
        window.scrollTo(0, document.body.scrollHeight);
    } else {
        tileButton.innerHTML = 'Ei enempää ruutuja';
        tileButton.disabled = true;
    }
}

//New tile event listener
tileButton.addEventListener('click', showTile);
