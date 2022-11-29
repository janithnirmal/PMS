// animations
function sidebarShow() {
    var menuButton = document.getElementById("sidebar");
    var menuIcon = document.getElementById("menuIcon");
    var sidebar = document.getElementById("sidebar");
    
    sidebar.classList.toggle("sidebar-mover-right");

    menuButton.classList.toggle("d-none");
    menuButton.classList.toggle("c-shadow");
    menuIcon.classList.toggle("bi-list-nested");
    menuIcon.classList.toggle("bi-x-lg");
    
}

