

export default function Home() {
    return (
        <section>
            <div className='search'>
                <div className='search-bar'>
                    <i className='fa-solid fa-magnifying-glass'></i>
                    <input type='text' placeholder='Search for a country...' />
                </div>
                <select className='continent'>
                    <option value='africa'>Africa</option>
                    <option value='america'>America</option>
                </select>
            </div>
        </section>
    );
};