var navTxt = [
  ["Dashboard"], ["Jazz", "Rock", "Pop"],
  ["Overview", "Songs", "Events Attended"], ["Overview", "Events Created"],
  ["Overview", "Products Supplied"], ["Latest Transactions"],
  ["Settings"]
];

const menuNav = document.querySelector('.menu-nav');
const activeLink = document.getElementById('activeLink');
const menuItems = menuNav.children;
activeLink.innerHTML = `<a href=" ">${navTxt[0]} </a>`;

Array.from(menuItems).forEach((item, index) => {
  var arrLen = navTxt[index].length;
  item.addEventListener('click', () => {
    activeLink.innerHTML = ' ';
    var inner = ' ';
    for (var i = 0; i < arrLen; i++) {
      inner += `<a href=" ">${navTxt[index][i]} </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`;
    }
    activeLink.innerHTML = inner;
  });

});

