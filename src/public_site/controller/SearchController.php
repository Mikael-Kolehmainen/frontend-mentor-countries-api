<?php

namespace public_site\controller;

class SearchController
{
  public function showSearchBar(): void
  {
    echo "
      <section>
        <div class='search'>
          <div class='search-bar'>
            <i class='fa-solid fa-magnifying-glass'></i>
            <input type='text' placeholder='Search for a country...' />
          </div>
          <select class='region'>
            <option selected disabled>Filter by Region</option>
            <option value='africa'>Africa</option>
            <option value='america'>America</option>
            <option value='asia'>Asia</option>
            <option value='europe'>Europe</option>
            <option value='oceania'>Oceania</option>
          </select>
        </div>
      </section>
    ";
  }
}
