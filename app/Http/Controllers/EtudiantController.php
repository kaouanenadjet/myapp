<?php

namespace App\Http\Controllers;

use App\Etudiant;

use Illuminate\Http\Request;

class EtudiantController extends Controller
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

      'name' => 'required', 
      'prenom' =>  'required',
      'email'=>  'required',
      'password'=>  'required',
     // 'groupe' => 'required'


        ]);

          $etudiant = new Etudiant();

        return "we are ": 
            $etudiant->nom = $request->input('name');
            $etudiant->prenom =$request->input('prenom');
            $etudiant->email=$request->input('email');
            $etudiant->password=$request->input('password');
           // $etudiant->groupe = $request->get('groupe');        
        $etudiant->save();


        return $etudiant;
    
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