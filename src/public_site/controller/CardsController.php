<?php

namespace public_site\controller;

class CardsController
{
  public function showCards(): void
  {
    $countries = $this->getCountries();

    foreach ($countries as $country) {
      $name = $country->name->common;
      echo "<p>$name</p>";
    }

    echo "
      <div class='cards'>
        <a href='index.php/details' class='card'>
          <img src='src/public_site/media/cardPlaceholder.webp' alt='country flag' />
          <h3>Germany</h3>
          <p><b>Population:</b> 81,770,900</p>
          <p><b>Region:</b> Europe</p>
          <p><b>Capital:</b> Berlin</p>
        </a>
        <a href='index.php/details' class='card'>
          <img src='src/public_site/media/cardPlaceholder.webp' alt='country flag' />
          <h3>Germany</h3>
          <p><b>Population:</b> 81,770,900</p>
          <p><b>Region:</b> Europe</p>
          <p><b>Capital:</b> Berlin</p>
        </a>
        <a href='index.php/details' class='card'>
          <img src='src/public_site/media/cardPlaceholder.webp' alt='country flag' />
          <h3>Germany</h3>
          <p><b>Population:</b> 81,770,900</p>
          <p><b>Region:</b> Europe</p>
          <p><b>Capital:</b> Berlin</p>
        </a>
        <a href='index.php/details' class='card'>
          <img src='src/public_site/media/cardPlaceholder.webp' alt='country flag' />
          <h3>Germany</h3>
          <p><b>Population:</b> 81,770,900</p>
          <p><b>Region:</b> Europe</p>
          <p><b>Capital:</b> Berlin</p>
        </a>
        <a href='index.php/details' class='card'>
          <img src='src/public_site/media/cardPlaceholder.webp' alt='country flag' />
          <h3>Germany</h3>
          <p><b>Population:</b> 81,770,900</p>
          <p><b>Region:</b> Europe</p>
          <p><b>Capital:</b> Berlin</p>
        </a>
      </div>
    ";
  }

  private function getCountries(): array
  {
    $curl = curl_init();

    $url = "https://restcountries.com/v3.1/all";

    curl_setopt_array($curl, [
      CURLOPT_URL => $url,
      CURLOPT_HTTPHEADER => [
        "Content-type: text/plain",
      ],
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
    ]);

    $response = curl_exec($curl);

    curl_close($curl);

    $countries = json_decode($response);

    return $countries;
  }
}
