import './styles/css/main.css';
import Header from './components/Header';
import Search from './components/Search';
import Cards from './components/Cards';
import Card from './components/Card';

export default function App() {
  return (
    <div className="App">
      <Header />
      <Search />
      <Cards />
    </div>
  );
}