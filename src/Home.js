import React,{Component} from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import './App.css';
import Button from 'react-bootstrap/Button';
import Navbar from 'react-bootstrap/Navbar';
/**
 * Accueil De L'application
 */

/**
 * Description General de l'application et lien pour l'authentification
 */ 
class Home extends Component {
  render() {
  return (
     
    <div ClassName="Home" style={{width:'full'}}>     
     <body style={{
        width: '1350px'
      }} >
       
    <div class="jumbotron" style={{textAlign: 'center', backgroundColor: 'white',alignContent:'center',marginTop:'10%'}}>
    <h1 class="display-4" >Bienvenue à Esi Manager</h1>
    <br/>
    <h3 class="display-5" style={{color:'#088A85'}}>Gestion De Scolarité</h3>
  
    <p class="lead">Plateforme de gestion de scolarité à L'école Nationale Superieure d'Informatique ESI Ex INI.</p>
    <hr/>
    <p>Connectez-vous en tant que Administrateur ou Enseignant ou Etudiant pour utiliser Esi Manager.</p>

    <p class="lead">
    <span> 
        <Button href=""  name="connecter" size="lg" variant="dark">Connecter</Button>
    </span>
    </p>
    </div>
    
    </body>
    <link
         rel="stylesheet"
         href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
         crossorigin="anonymous"
      />
   
    </div>   
    
  );
}
}
export default Home;
