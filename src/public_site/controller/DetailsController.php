<?php

namespace public_site\controller;

class DetailsController
{
  public function showDetailsPage(): void
  {
    echo "</head>";

    $headerController = new HeaderController();
    $headerController->showHeader();

    echo "
      <section class='details'>
        <a href='/index.php' class='btn'>
          <i class='fa-solid fa-arrow-left-long'></i>
        </a>
        <div class='country'>
          <img src='/src/public_site/media/cardPlaceholder.webp' alt='country flag'>
          <h2>Germany</h2>
          <div class='info'>
            <p><b>Native name:</b> Deutschland</p>
            <p><b>Population:</b> 81,770,900</p>
            <p><b>Region:</b> Europe</p>
            <p><b>Sub Region:</b> Central Europe</p>
            <p><b>Capital:</b> Berlin</p>
            <p><b>Top Level Domain:</b> .de</p>
            <p><b>Currencies:</b> Euro</p>
            <p><b>Languages:</b> German</p>
            <p><b>Border Countries:</b></p>
            <div class='rectangle'>Austria</div>
            <div class='rectangle'>Belgium</div>
            <div class='rectangle'>Czechia</div>
            <div class='rectangle'>Denmark</div>
            <div class='rectangle'>France</div>
            <div class='rectangle'>Luxembourg</div>
            <div class='rectangle'>Netherlands</div>
            <div class='rectangle'>Poland</div>
            <div class='rectangle'>Switzerland</div>
          </div>
        </div>
      </section>
    ";
  }
}
