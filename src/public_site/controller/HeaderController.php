<?php

namespace public_site\controller;

class HeaderController
{
  public function showHeader(): void
  {
    echo "
      <header>
        <h1>Where in the world?</h1>
        <a href='#'><i class='fa-regular fa-moon'></i> Dark Mode</a>
      </header>
    ";
  }
}
