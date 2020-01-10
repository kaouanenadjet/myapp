<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
       
         $this->validate($request,[

      'nom' => 'required', 
      'prenom' =>  'required',
      'email' => 'required',
      'password' =>  'required',
      'note1'=>  'required',
      'note2'=>  'required',
      'note3' => 'required',
       'note4' => 'required',


        ]);

            $etudiant = new Etudiant();
            $etudiant->nom = $request->get('nom');
            $etudiant->prenom =$request->get('prenom');
            $etudiant->groupe = $request->get('groupe'); 
            $etudiant->email=$request->get('email');
            $etudiant->password=$request->get('password');
          
            
        
           $etudiant->noteIGL = $request->get('note1');
            $etudiant->noteSYS =$request->get('note2');
            $etudiant->noteORG=$request->get('note3');
            $etudiant->noteANA=$request->get('note4');        
        $etudiant->save(); 
        
        


        return view('master');

    }
}
