<?php

namespace public_site\controller;

class CardsController
{
  public function showCards(): void
  {
    echo "
      <div class='cards'>
        <a href='#' class='card'>
          <img src='src/public_site/media/cardPlaceholder.webp' alt='country flag' />
          <h3>Germany</h3>
          <p><b>Population:</b> 81,770,900</p>
          <p><b>Region:</b> Europe</p>
          <p><b>Capital:</b> Berlin</p>
        </a>
        <a href='#' class='card'>
          <img src='src/public_site/media/cardPlaceholder.webp' alt='country flag' />
          <h3>Germany</h3>
          <p><b>Population:</b> 81,770,900</p>
          <p><b>Region:</b> Europe</p>
          <p><b>Capital:</b> Berlin</p>
        </a>
        <a href='#' class='card'>
          <img src='src/public_site/media/cardPlaceholder.webp' alt='country flag' />
          <h3>Germany</h3>
          <p><b>Population:</b> 81,770,900</p>
          <p><b>Region:</b> Europe</p>
          <p><b>Capital:</b> Berlin</p>
        </a>
        <a href='#' class='card'>
          <img src='src/public_site/media/cardPlaceholder.webp' alt='country flag' />
          <h3>Germany</h3>
          <p><b>Population:</b> 81,770,900</p>
          <p><b>Region:</b> Europe</p>
          <p><b>Capital:</b> Berlin</p>
        </a>
        <a href='#' class='card'>
          <img src='src/public_site/media/cardPlaceholder.webp' alt='country flag' />
          <h3>Germany</h3>
          <p><b>Population:</b> 81,770,900</p>
          <p><b>Region:</b> Europe</p>
          <p><b>Capital:</b> Berlin</p>
        </a>
      </div>
    ";
  }
}
