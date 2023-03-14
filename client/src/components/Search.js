

export default function Search() {
  return (
    <section>
      <div className='search'>
        <div className='search-bar'>
          <i className='fa-solid fa-magnifying-glass'></i>
          <input type='text' placeholder='Search for a country...' />
        </div>
        <select className='region'>
          <option selected disabled>Filter by Region</option>
          <option value='africa'>Africa</option>
          <option value='america'>America</option>
          <option value='asia'>Asia</option>
          <option value='europe'>Europe</option>
          <option value='oceania'>Oceania</option>
        </select>
      </div>
    </section>
  );
};