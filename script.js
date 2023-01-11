/*
function that listens to the Click Me Button and if its clicked, it get iterated and the button changes to 1
 */
function clickMe() {
  var button = document.getElementById("clickMe");
  var count = 0;
  button.onclick = function () {
    count += 1;
    button.innerHTML = count;
  };
}
clickMe();
