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

const sidebar = document.querySelector('aside');
const ShowsidebarBtn = document.querySelector('#show__sidebar-btn');
const HidesidebarBtn = document.querySelector('#hide__sidebar-btn');

const showSidebar =() =>{
    sidebar.style.left = '0';
    ShowsidebarBtn.style.display = 'none';
    HidesidebarBtn.style.display = 'inline-block';
}

const hidesidebar = () =>{
    sidebar.style.left = '-100%';
    ShowsidebarBtn.style.display = 'inline-block';
    HidesidebarBtn.style.display = 'none';
}

ShowsidebarBtn.addEventListener('click', showSidebar);
HidesidebarBtn.addEventListener('click', hidesidebar);