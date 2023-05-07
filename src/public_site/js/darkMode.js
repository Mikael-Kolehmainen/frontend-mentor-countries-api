let isDarkMode = true;

const checkDarkModeState = () => {
  const localStorageIsDark = window.localStorage.getItem("isDark");

  if (typeof localStorageIsDark !== "undefined") {
    isDarkMode = !(/true/).test(localStorageIsDark);
  }

  switchMode();
}

const switchMode = () => {
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

const setAttribute = (element) => {
  element.setAttribute("id", "dark-mode");
}

const removeAttribute = (element) =>{
  element.removeAttribute("id");
}

window.addEventListener("load", checkDarkModeState);

const darkModeSwitch = document.getElementById("dark-mode-switch");
darkModeSwitch.addEventListener("click", switchMode);
