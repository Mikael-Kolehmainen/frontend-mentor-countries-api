<?php

namespace public_site\controller;

class DetailsController
{
  public function showDetailsPage(): void
  {
    echo "
      </head>
      <div class='wrapper'>
    ";

    $headerController = new HeaderController();
    $headerController->showHeader();

    echo "
      <section class='details'>
        <a href='/index.php' class='btn'>
          <i class='fa-solid fa-arrow-left-long'></i>
        </a>
        <div class='country'>
          <img src='/src/public_site/media/cardPlaceholder.webp' alt='country flag'>
          <div class='info'>
            <h2>Germany</h2>
            <div class='row'>
              <div class='col'>
                <p><b>Native name:</b> Deutschland</p>
                <p><b>Population:</b> 81,770,900</p>
                <p><b>Region:</b> Europe</p>
                <p><b>Sub Region:</b> Central Europe</p>
                <p><b>Capital:</b> Berlin</p>
              </div>
              <div class='col'>
                <p><b>Top Level Domain:</b> .de</p>
                <p><b>Currencies:</b> Euro</p>
                <p><b>Languages:</b> German</p>
              </div>
            </div>
            <p class='border-countries'><b>Border Countries:</b></p>
            <div class='rectangles'>
              <a href='#' class='rectangle'>Austria</a>
              <a href='#' class='rectangle'>Belgium</a>
              <a href='#' class='rectangle'>Czechia</a>
              <a href='#' class='rectangle'>Denmark</a>
              <a href='#' class='rectangle'>France</a>
              <a href='#' class='rectangle'>Luxembourg</a>
              <a href='#' class='rectangle'>Netherlands</a>
              <a href='#' class='rectangle'>Poland</a>
              <a href='#' class='rectangle'>Switzerland</a>
            </div>
          </div>
        </div>
      </section>
    </div>
    ";
  }
}
