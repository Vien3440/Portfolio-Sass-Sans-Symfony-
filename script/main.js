//Hauteur header
$("#header").css("height", window.innerHeight);
$("#footerHeader").css("height", window.innerHeight/6);
$("#footer").css("height", window.innerHeight/3);
$(".triangle").css("border-top",300);
$(".triangle").css("border-right",window.innerWidth/2);
$(".triangle").css("border-bottom",0);
$(".triangle").css("border-left",window.innerWidth/2);

/******** Nav ************/
function openNav() {
    document.getElementById("mySidenav").style.width = "60%";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

/********Teste*****/
$("#header").fallings({

velocity: 1,
initialPosition: 0,
bgParallax: true,
bgPercent: "3%",
onClass: "fallings-visible",
offClass: "fallings-invisible"

});
