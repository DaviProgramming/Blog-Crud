const navItems = document.querySelector('.nav__items');
const OpenBtn = document.querySelector('#open__nav-btn');
const closeNav = document.querySelector('#close__nav-btn');

const OpenNav = () => {
    navItems.style.display = 'flex';
    OpenBtn.style.display = 'none';
    closeNav.style.display = 'inline-block';
}

const closeNavbar = () => {
    navItems.style.display = 'none';
    OpenBtn.style.display = 'inline-block';
    closeNav.style.display = 'none';
}

OpenBtn.addEventListener('click', OpenNav);
closeNav.addEventListener('click', closeNavbar);