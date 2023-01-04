const hamburger = document.getElementById('hamburger');
const overlay = document.getElementById('overlay');
const sidebar = document.getElementById('sidebar-close');

let menuOpen = false;

function openMenu() {
  overlay.style.display = 'block';
  overlay.style.animation = 'fadeIn .5s';

  sidebar.style.display = 'block';
}

function closeMenu() {
  overlay.style.animation = 'fadeOut .5s';
  setTimeout(function () {
    overlay.style.display = 'none';
  }, 400);
  sidebar.style.display = 'none';
}

hamburger.addEventListener('click', function () {
  if (!menuOpen) {
    openMenu()
    menuOpen = true;
  }
})

overlay.addEventListener('click', function () {
  if (menuOpen) {
    closeMenu()
    menuOpen = false;
  }
})

