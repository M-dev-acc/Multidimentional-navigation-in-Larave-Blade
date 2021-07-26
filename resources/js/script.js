document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.dropdown .dropdown').forEach(submenu => {
        submenu.style.display = none;
    });

    document.querySelectorAll('.dropdown .dropdown').forEach(submenu => {
        submenu.addEventListener('click', () => {
            submenu.querySelector('.dropdowm-menu').style.display = 'block';
        })
    });
})