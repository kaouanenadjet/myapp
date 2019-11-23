import React, {Component} from 'react';
 class Welcome extends Component 
 {
     render()
     { 
        return (
        <div >
             <span class="border border-primary"></span>
        <h1 align="center"> introduire les informations de l'etudiant  </h1 >
        <form  class="form-row align-items-center"> 
        <label htmlfor="username"> nom </label> 
        <input type="text" class="form-control mb-2"  placeholder="le nom " /> 
        <label htmlfor="username"> prénom </label> 
        <input type="text"  class="form-control mb-2"  placeholder="le prénom  "  /> 
        <label htmlfor="username"> Email </label> 
        <input type="text" class="form-control mb-2"  placeholder="EMAIL" />

        <label htmlfor="username"> année d'étude </label> 
        <input type="text" class="form-control mb-2"  placeholder="année d'etude " /> 
        <label htmlfor="username"> matricule </label> 
        
        <input type="text" class="form-control mb-2"  placeholder="le matricule  " /> 
        <label htmlfor="username"> password </label>  
        <input type="text"  class="form-control mb-2"  placeholder="password  " /> 
        <button  class="btn btn-primary" > ajouter </button>  


         </form > 
       </div>
        );

     }
 } 
 export default Welcome;