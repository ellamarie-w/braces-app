import './App.css';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import ShowLibrary from './Components/ShowLibrary';
import NoAuthNavbar from './Layouts/NoAuthNavbar';
import AuthNavbar from './Layouts/AuthNavbar';

function App() {
  return (
    <div className="App">
        <BrowserRouter>
      <Routes>
        <Route path='' element={ < AuthNavbar /> } />
      </Routes>
    </BrowserRouter>
    <BrowserRouter>
      <Routes>
        <Route path='/' element={ < ShowLibrary /> } />
        <Route path='/'/>
      </Routes>
    </BrowserRouter>
    </div>
  );
}

export default App;
