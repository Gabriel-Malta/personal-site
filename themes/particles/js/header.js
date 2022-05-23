window.onload = () => {

    let menuBurger = document.querySelector('.header-container .menu-burger');
    menuBurger.addEventListener('click', openSidebar)

    function openSidebar(){
        menuBurger.classList.toggle('active')
        let sidebar = document.querySelector('header .sidebar');
        sidebar.classList.toggle('active')
    }
}