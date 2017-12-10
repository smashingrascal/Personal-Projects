function openNav() {
    document.getElementById("Snavigation").style.width = "216px";
    document.getElementById("Semblem").setAttribute( "onclick", "closeNav()");
    document.getElementById("Sapplication").style.marginLeft = "0px";
}

function closeNav() {
    document.getElementById("Snavigation").style.width = "0";
    document.getElementById("Semblem").setAttribute( "onclick", "openNav()");
    document.getElementById("Sapplication").style.marginLeft = "0px";
}
