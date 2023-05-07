<?php

namespace public_site\controller;

class HomeController
{
  public function showHomePage(): void
  {
    echo "
        <script src='/src/public_site/js/searchBar.js' defer></script>
      </head>
      <div class='wrapper'>
    ";

    $headerController = new HeaderController();
    $headerController->showHeader();

    $searchController = new SearchController();
    $searchController->showSearchBar();

    $cardsController = new CardsController();
    $cardsController->showCards();

    echo "</div>";
  }
}
