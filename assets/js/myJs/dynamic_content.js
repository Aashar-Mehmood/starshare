const dynamicContent = document.getElementById("dynamicContent");
const categoryModule = document.querySelector('li.categoryModule');
// locations where we will fetch dynamic content
const root = "http://starshare.com/pages/includes/";
const loc = root + "categories_content.php";


// load dynamic content when we click on a module
categoryModule.addEventListener('click', () => {
  var inner = categoryModule.innerText.toLowerCase().split('\n')[0];
  loadConent(loc).then((result) => {
    dynamicContent.innerHTML = ' ';
    dynamicContent.innerHTML = result;
    contentLoaded();
  }).catch((err) => {
    console.log(err);
  });
});

// function to fetch the data from files
async function loadConent(location) {
  const response = await fetch(location);
  return await response.text();
}


// Js for add new category form
// enables and disables dropdown of parent Category

function contentLoaded() {
  const childRadionBtn = document.getElementById("childRadioBtn");
  const parentRadioBtn = document.getElementById("parentRadioBtn");
  const dropdown = document.getElementById("parentCategory");
  childRadionBtn.addEventListener('click', () => {
    dropdown.removeAttribute("disabled");
  });
  parentRadioBtn.addEventListener('click', () => {
    dropdown.setAttribute("disabled", "true");
  });
}


