
function change() {
  var decider = document.getElementById("menu_checkbox");

  const mediaQuery = window.matchMedia('(max-width: 600px)');

  if (decider.checked) {

    console.log(mediaQuery)

  // Check if the media query matches
  if (mediaQuery.matches) {
 
    // Code to switch to the mobile navbar
    document.getElementById("myNav_mobile").style.width = "100%";
    document.getElementById("myNav_mobile").style.left = "0%";
    document.getElementById("myNav").style.border = "5px solid black";

    document.getElementById("myNav").style.width = "0%";
    document.getElementById("myNav").style.border = "0px";

    console.log('nav_mobile')


  } else {

    // Code to switch to the desktop navbar
    document.getElementById("myNav_mobile").style.width = "0%";
    document.getElementById("myNav_mobile").style.border = "0px";


    document.getElementById("myNav").style.width = "78%";
    document.getElementById("myNav").style.border = "5px solid black";

    console.log('nav')

  }

  } else {

    document.getElementById("myNav").style.width = "0%";
    document.getElementById("myNav").style.border = "0px";    

    document.getElementById("myNav_mobile").style.width = "0%";
    document.getElementById("myNav_mobile").style.border = "0px";

    console.log('closed')
 
  }
}

window.addEventListener("scroll", function () {
  const topScroll = window.scrollY;

  if (topScroll > 500) {
    const label = document.querySelector('label[for="menu_checkbox"]');

    const divsInLabel = label.querySelectorAll("div");

    const newColor = "white";

    divsInLabel.forEach((div) => {
      div.style.backgroundColor = newColor;
    });
  }

  if (topScroll < 500) {
    const label = document.querySelector('label[for="menu_checkbox"]');

    const divsInLabel = label.querySelectorAll("div");

    const newColor = "black";

    divsInLabel.forEach((div) => {
      div.style.backgroundColor = newColor;
    });
  }

  if (topScroll > 1000) {
    const label = document.querySelector('label[for="menu_checkbox"]');

    const divsInLabel = label.querySelectorAll("div");

    const newColor = "black";

    divsInLabel.forEach((div) => {
      div.style.backgroundColor = newColor;
    });
  }
});




