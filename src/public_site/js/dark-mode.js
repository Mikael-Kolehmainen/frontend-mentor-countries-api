window.addEventListener("load", checkDarkModeState);

const darkModeSwitch = document.getElementById("dark-mode-switch");
darkModeSwitch.addEventListener("click", switchMode);

let isDarkMode = true;

function checkDarkModeState() {
  const localStorageIsDark = window.localStorage.getItem("isDark");

  if (typeof localStorageIsDark !== "undefined") {
    isDarkMode = !(/true/).test(localStorageIsDark);
  }

  switchMode();
}

function switchMode() {
  console.log(isDarkMode);
  const wrapper = document.getElementsByClassName("wrapper")[0];

  if (isDarkMode) {
    removeAttribute(wrapper);
    isDarkMode = false;
    window.localStorage.setItem("isDark", isDarkMode);
  } else {
    setAttribute(wrapper);
    isDarkMode = true;
    window.localStorage.setItem("isDark", isDarkMode);
  }
}

function setAttribute(element) {
  element.setAttribute("id", "dark-mode");
}

function removeAttribute(element) {
  element.removeAttribute("id");
}
