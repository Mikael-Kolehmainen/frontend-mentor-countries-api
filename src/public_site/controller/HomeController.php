<?php

namespace public_site\controller;

class HomeController
{
  public function showHomePage(): void
  {
    echo "</head>";

    $headerController = new HeaderController();
    $headerController->showHeader();

    $searchController = new SearchController();
    $searchController->showSearchBar();

    $cardsController = new CardsController();
    $cardsController->showCards();
  }
}
