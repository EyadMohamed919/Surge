function toggleMenu() {
    const menu = document.getElementById("side-menu");
    const overlay = document.getElementById("overlay");
    
    menu.classList.toggle("active");
    overlay.classList.toggle("active");
}