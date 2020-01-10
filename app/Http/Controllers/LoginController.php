<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User ;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('acceuil')
    }
    public function checklogin()
    {
         $this->validate($request,[

 

      'nom' => 'required',

      'email'=>  'required',
      'password'=>'required',
       ]);
         $user= array([

            'nom' => $request->get('nom'),

            'email'=>$request->get('email'),

            'password'=>$request->get('password'),
]);
         
         if(Auth::attempt($user) )
         {
            /*
         return redirect()->route('login')->with('success','login succesful'); */
         echo "login succesful";
     }
     else{echo "login failed";}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
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
