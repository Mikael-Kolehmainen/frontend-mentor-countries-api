<?php

namespace public_site\controller;

class CardsController
{
  public function showCards(): void
  {
    echo "<div class='cards'>";

    $this->showCountries();

    echo "</div>";
  }

  private function showCountries(): void
  {
    $countries = $this->getCountries();

    $i = 1;
    foreach ($countries as $country) {
      $nth = $this->getElementNth($i);
      $population = number_format($country->population);

      echo "
        <a href='/index.php/details' class='card $nth' id='{$country->name->common}'>
          <img src='{$country->flags->png}' alt='{$country->flags->alt}' />
          <h3 class='country-name'>{$country->name->common}</h3>
          <p><b>Population:</b> {$population}</p>
          <p><b>Region:</b> {$country->continents[0]}</p>
          <p><b>Capital:</b> {$country->capital[0]}</p>
        </a>
      ";
      $i++;
      $nth = "";
    }
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

  private function getElementNth($i): string
  {
    if (($i - 1) % 4 === 0) {
      return "first";
    }
    if ($i % 4 === 0) {
      return "fourth";
    }

    return "";
  }
}
