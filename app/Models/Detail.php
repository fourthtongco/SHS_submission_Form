<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    //     
    protected $fillable = [
        'id',
        'current_grade_level',
        'incoming_grade_level',
        'first_name',
        'last_name',
        'middle_name',
        'preferred_strand',
        'contact_number',
        'email',
    ];         
}
