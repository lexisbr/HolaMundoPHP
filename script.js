let hits = 0;
let hitElement = document.querySelector( '.hits' );
document.body.onkeyup = function(e) {
  if( e.keyCode == 32 ) {
    addHit();
  }
}

let addHit = function() {
  hits++;
  renderHits();
}

let renderHits = function() { 
  hitElement.innerHTML = hits;
}

let resetHits = function() {
  hits = 0;
  renderHits();
}
