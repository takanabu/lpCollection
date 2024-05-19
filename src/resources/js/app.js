window.onload = function() {
    var circle = document.getElementById("circle");
    var upBtn = document.getElementById("upBtn");
    var downBtn = document.getElementById("downBtn");
    var rotateValue = 0;

    upBtn.onclick = function () {
        rotateValue -= 90;
        circle.style.transform = "rotate(" + rotateValue + "deg)";
    }

    downBtn.onclick = function () {
        rotateValue += 90;
        circle.style.transform = "rotate(" + rotateValue + "deg)";
    }
}