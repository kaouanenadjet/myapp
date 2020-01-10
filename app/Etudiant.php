<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\notifications\Notifiable;


class Etudiant extends model
{
    use Notifiable;

    protected $fillable= ['nom','prenom','email','password','groupe','noteIgl','noteANA','noteSYS','noteORG'];
}

