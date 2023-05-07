const searchBar = document.getElementById("country-search-bar");

const showResults = () => {
  const countries = document.getElementsByClassName("card");
  const searchInput = searchBar.value.toLowerCase();

  Array.from(countries).forEach(country => {
    const countryName = country.id;
    if (searchInput !== "") {
      if (countryName.toLowerCase().search(searchInput) === -1) {
        ElementDisplay.change(countryName, "none");
      } else {
        ElementDisplay.change(countryName, "block");
      }
    } else {
      ElementDisplay.change(countryName, "block");
    }
  });
};

searchBar.addEventListener("input", showResults);
