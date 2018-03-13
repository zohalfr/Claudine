<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
        // protected $clients = ['nom'];

    protected  $fillable = array('nom', 'prenom', 'email','tel','addresse');
}
