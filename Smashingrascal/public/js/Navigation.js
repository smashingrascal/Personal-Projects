function openNav() {
    document.getElementById("Snavigation").style.width = "200px";
    document.getElementById("Sbanneremblem").setAttribute( "onclick", "closeNav()");
    document.getElementById("Sapplication").style.marginLeft = "200px";
}

function closeNav() {
    document.getElementById("Snavigation").style.width = "0";
    document.getElementById("Sbanneremblem").setAttribute( "onclick", "openNav()");
    document.getElementById("Sapplication").style.marginLeft = "0px";
}
