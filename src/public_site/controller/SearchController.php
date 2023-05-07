<?php

namespace public_site\controller;

class SearchController
{
  public function showSearchBar(): void
  {
    echo "
      <section class='search'>
        <div class='row'>
          <div class='col'>
            <div class='search-bar'>
              <i class='fa-solid fa-magnifying-glass'></i>
              <input type='text' placeholder='Search for a country...' id='country-search-bar' />
            </div>
          </div>
          <div class='col'>
            <select class='region'>
              <option selected disabled>Filter by Region</option>
              <option value='africa'>Africa</option>
              <option value='america'>America</option>
              <option value='asia'>Asia</option>
              <option value='europe'>Europe</option>
              <option value='oceania'>Oceania</option>
            </select>
          </div>
        </div>
      </section>
    ";
  }
}
