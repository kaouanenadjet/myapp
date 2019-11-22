import React, {Component} from 'react';
import logo from './logo.svg';
import './App.css';
 class App extends Component
 {
   render()  {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo"  />
        <p>
        <h1> 
          bienvenue a ESI MANAGER 

        </h1>  <h3> 
          s'authentifier en tant que :
          administrateur/enseignant/etudiant
        </h3> 
        </p>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >  react 
        </a>
      </header>
    </div>
  );
}  
}

export default App;
