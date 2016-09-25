## Running the project
### Locally:
Unzip and run the index.html.

### Online:
Go to https://jonathanblancor.github.io/views/ which is useful to run on PageSpeed.

## Optimizations
### In main.js:
- In ```resizePizzas``` function, ```determineDx``` was deleted and a better job is now done in ```changePizzasSizes```.
- The ```for``` loop that created and appened all the pizzas was moved to "loadPizzas.js".
- In this code at the bottom of "main.js" the number of sliding pizzas was reduced to 40 from 200.
  ```
  document.addEventListener('DOMContentLoaded', function() {
  var cols = 8;
  var s = 256;
  for (var i = 0; i < 40; i++) {
    var elem = document.createElement('img');
    elem.className = 'mover';
    elem.src = "images/pizza.png";
    elem.style.height = "100px";
    elem.style.width = "73.333px";
    elem.basicLeft = (i % cols) * s;
    elem.style.top = (Math.floor(i / cols) * s) + 'px';
    document.querySelector("#movingPizzas1").appendChild(elem);
  }
  updatePositions();
  });
  ```

 ### Under views in index.html:
 - Both CSS files were minifyed and inlined.
 - "main.js" was minifyed
 - "loadPizzas.js" was included with the ```async``` tag to load pizzas

### In the index page (Cameron's portfolio):
- print.css was added the "print" media
- style.css was minifyed and inlined.