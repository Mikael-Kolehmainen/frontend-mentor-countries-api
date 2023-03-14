import placeHolderImage from './../media/cardPlaceholder.webp';

// This is placeholder data
export default function Card() {
  return (
    <div className='card'>
      <img src={placeHolderImage} alt='country flag' />
      <h3>Germany</h3>
      <p><b>Population:</b> 81,770,900</p>
      <p><b>Region:</b> Europe</p>
      <p><b>Capital:</b> Berlin</p>
    </div>
  );
}