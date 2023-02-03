let d1 = document.getElementById("d1");
let d2 = document.getElementById("d2");
let p1 = document.getElementById("instafeed-container");
let p2 = document.getElementById("p2");


d2.onmouseover = aff;
function aff(){
  p2.style.display = "block";
}
d2.onmouseout = cac;
function cac(){
  p2.style.display = "none";
}