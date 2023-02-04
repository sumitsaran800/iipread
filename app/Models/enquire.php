<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enquire extends Model
{
    use HasFactory;
    protected $table = "enquiry";
    protected $primary_key = "id";

    public function course()
    {
        return $this->belongsTo('App\Models\course', 'course_id', 'id');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\country', 'country_id', 'id');
    }
    public function state()
    {
        return $this->belongsTo('App\Models\state', 'state_id', 'id');
    }
}