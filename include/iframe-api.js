/**
 * iframe API: mapping events to their iframes
 *
 * Getting a specific target didn't matter when playing music
 * or opening new windows because those were singular targets.
 *
 * Affecting loading animation requires tying events from within
 * an iframe back to one of many iframe containers in the parent.
 *
 * 1. child requests id from parent on load
 * 2. parent generates id
 * 3. child maintains id until unload event
 */

window.parentLoadRequest = function() {
  console.log("load request");
  var div = document.getElementById('awaiting-load');
  if (div) {
    var id = (+new Date).toString(36);  // "iepii89m"
    div.id = id;
    stopAnimation(id);
    return id;
  }
  else {
    console.log("no div #awaiting-load");
    return false;
  }
};

window.parentUnloadRequest = function(id) {
  console.log("unload request: " + id);
  startAnimation(id);
}

// Helper functions for iframe load callbacks.
function stopAnimation(id) {
  var div = document.getElementById(id);
  var a = div.querySelector('.animation');
  if (a) {
    a.src="images/netscape.jpg";
  }
}

function startAnimation(id) {
  var div = document.getElementById(id);
  div.id = 'awaiting-load';
  var a = div.querySelector('.animation');
  if (a) {
    a.src="images/netscape.gif";
  }
}
