import React, {Component} from 'react';
 class Welcome extends Component 
 {
     render()
     { 
        return (
        <div>
        <h1 align="center"> introduire les informations de l'etudiant  </h1 >
        <form > 
        <input type="text" placeholder="le nom " /> 
        <input type="text" placeholder="le prénom  "  /> 
        <input type="text" placeholder="EMAIL" />
        <input type="text" placeholder="année d'etude " /> 
        <input type="text" placeholder="le matricule  " />  
        <input type="text" placeholder="password  " /> 
        <button > ajouter </button>  


         </form > 
       </div>
        );

     }
 } 
 export default Welcome;