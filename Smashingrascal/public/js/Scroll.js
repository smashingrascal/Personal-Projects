function scrollWelcomeTop() {
document.getElementById('Sintro').scrollIntoView(true);
document.getElementById("Swelcome-scroller").setAttribute( "onclick", "scrollWelcomeSkills()");
}

function scrollWelcomeSkills() {
document.getElementById('Swelcome-skills').scrollIntoView(true);
document.getElementById("Swelcome-scroller").setAttribute( "onclick", "scrollWelcomeProjects()");
}

function scrollWelcomeProjects() {
document.getElementById('Swelcome-projects').scrollIntoView(true);
document.getElementById("Swelcome-scroller").setAttribute( "onclick", "scrollWelcomeTop()");
}
