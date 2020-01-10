<?php

namespace App\Http\Controllers;

use App\Etudiant;

use Illuminate\Http\Request;

class test extends Controller
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
      'email'=>  'required',
      'password'=>  'required',
      'groupe' => 'required'


        ]);

          $etudiant = new Etudiant();

        
            $etudiant->nom = $request->get('nom');
            $etudiant->prenom =$request->get('prenom');
            $etudiant->email=$request->get('email');
            $etudiant->password=$request->get('password');
            $etudiant->groupe = $request->get('groupe');        
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
        //
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
