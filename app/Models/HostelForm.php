<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostelForm extends Model
{
    use HasFactory;
    protected $table='hostel_form';
    protected $primaryKey='id';
    protected $fillable=['stu_id','year','semester','disease','reason','status','newhostelname','newroomno','bedno'];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function appeals(){
        return $this->hasOne(Appeals::class);
    }
}
