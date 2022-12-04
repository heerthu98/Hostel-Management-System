<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    use HasFactory;

    protected $table='hostels';
    protected $primaryKey='id';
    public $timestamps=true;
    
    protected $fillable=['hostel_name','no_of_beds','no_of_rooms','gender_type','student_year','available_beds'];
}