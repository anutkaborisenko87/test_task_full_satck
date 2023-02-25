const submenu = document.querySelector(".submenu");
const subsubmenu = document.querySelector(".submenu.subsubmenu");
submenu.addEventListener('mouseover', function(event) {
    event.currentTarget.parentNode.children[0].classList.add('active');
});
submenu.addEventListener('mouseleave', function(event) {
    event.currentTarget.parentNode.children[0].classList.remove('active');
});

subsubmenu.addEventListener('mouseover', function(event) {
    event.currentTarget.parentNode.children[0].classList.add('active');
});
subsubmenu.addEventListener('mouseleave', function(event) {
    event.currentTarget.parentNode.children[0].classList.remove('active');
});
