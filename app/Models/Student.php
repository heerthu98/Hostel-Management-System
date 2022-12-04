<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table='students';
    protected $primaryKey='id';
    public $timestamps=true;
    //protected $dateFormat='h:m:s';

    //protected $fillable=['first_name','last_name','enroll_no','course','year','semester','gender','address','town','town_distance','uni_distance','father_name','father_income','mother_name','mother_income','disease','reason','email'];
    protected $fillable=['first_name','last_name','enroll_no','course','batch','gender','phone','address','town','town_distance','uni_distance','father_name','father_income','mother_name','mother_income','email'];

    public function hostelform(){
        return $this->hasMany(HostelForm::class);
    }

    
}
