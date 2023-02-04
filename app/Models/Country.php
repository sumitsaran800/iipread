<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = "countries";
    protected $id = 'id';

    public function states()
    {
        return $this->hasMany('App\Models\State', 'country_id', 'id');
    }
}