<?php

namespace public_site\controller;

class HomeController
{
  public function showHomePage(): void
  {
    echo "
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
