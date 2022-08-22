function navigate(path) {
    var frame = document.getElementById('mainFrame');
    window.location.href = path;
}

function navBar() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}