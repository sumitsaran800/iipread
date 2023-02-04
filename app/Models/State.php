<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = "states";
    protected $primary_key = "id";

    function country()
    {
        return $this->belongsTo('App\Models\Country', 'country_id', 'id');
    }
}