<?php

namespace public_site\controller;

class HeaderController
{
  public function showHeader(): void
  {
    echo "
      <header>
        <div class='row'>
          <div class='col'>
            <h1>Where in the world?</h1>
          </div>
          <div class='col'>
            <a href='#'><i class='fa-regular fa-moon'></i> Dark Mode</a>
          </div>
        </div>
      </header>
    ";
  }
}
