<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appeals extends Model
{
    use HasFactory;
    protected $table='appeals';
    protected $primaryKey='id';
    protected $fillable=['student_id','enroll_no', 'appealreason','status'];


    public function hostelform(){
        return $this->belongsTo(HostelForm::class);
    }
}
