import './App.css';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import ShowLibrary from './Components/ShowLibrary';

function App() {
  return (
    <div className="App">
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
