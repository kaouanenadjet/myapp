<?php

namespace App\Http\Controllers;

use App\Etudiant;

use Illuminate\Http\Request;
use DB;

class testnote extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // return view('layouts.stud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
