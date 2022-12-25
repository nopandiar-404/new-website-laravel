let nav = true;
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    nav = false;
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    nav = true;
}

function toggleNav() {
    nav ? openNav() : closeNav();
}

window.onload(openNav());

function toggleDownArrow() {
    if (document.getElementById("down-icon").classList.contains("left-icon")) {
        document.getElementById("down-icon").classList.remove("left-icon");
        document.getElementById("down-icon").classList.add("down-icon");
    } else if (
        document.getElementById("down-icon").classList.contains("down-icon")
    ) {
        document.getElementById("down-icon").classList.remove("down-icon");
        document.getElementById("down-icon").classList.add("left-icon");
    }
}
