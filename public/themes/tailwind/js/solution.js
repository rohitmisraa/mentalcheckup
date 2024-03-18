function closeModel(params) {
    document.getElementById("model").style.display = "none";
}

function Hide() {
    document.getElementById("exerciseModel").style.display = "none";
    document.getElementById("yogaModel").style.display = "none";
    document.getElementById("meditationModel").style.display = "none";
    document.getElementById("musicModel").style.display = "none";
    document.getElementById("mealModel").style.display = "none";
    document.getElementById("consultModel").style.display = "none";
    
}
function showSpec(params) {
    Hide();
    document.getElementById("model").style.display = "block";
    document.getElementById("consultModel").style.display = "block";
}
function showYoga(params) {
    Hide();
    document.getElementById("model").style.display = "block";
    document.getElementById("yogaModel").style.display = "block";
}
function showExerc(params) {
    Hide();
    document.getElementById("model").style.display = "block";
    document.getElementById("exerciseModel").style.display = "block";
}
function showMedi(params) {
    Hide();
    document.getElementById("model").style.display = "block";
    document.getElementById("meditationModel").style.display = "block";
}
function showMusic(params) {
    Hide();
    document.getElementById("model").style.display = "block";
    document.getElementById("musicModel").style.display = "block";
}

function showHealthy(params) {
    Hide();
    document.getElementById("model").style.display = "block";
    document.getElementById("mealModel").style.display = "block";
}
