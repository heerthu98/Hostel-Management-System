<?php

namespace App\Imports;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
            //if($row['first_name']!=NULL && $row['last_name']!=NULL && $row['enroll_no']!=NULL && $row['course']!=NULL && $row['enroll_no']!=NULL && $row['gender']!=NULL && $row['phone']!=NULL && $row['address']!=NULL && $row['town']!=NULL && $row['town_distance']!=NULL && $row['uni_distance']!=NULL && $row['father_name']!=NULL && $row['mother_name']!=NULL && $row['stu_email']!=NULL ){            
            //if(isset($row['first_name']) && isset($row['last_name']) && isset($row['enroll_no']) && isset($row['course']) && isset($row['batch']) && isset($row['gender']) && isset($row['phone']) && isset($row['address']) && isset($row['town']) && isset($row['town_distance']) && isset($row['uni_distance']) && isset($row['father_name']) && isset($row['mother_name']) && isset($row['stu_email']) ){            

                $student= new Student([
                    "first_name" => $row['first_name'],
                    "last_name" => $row['last_name'],
                    "enroll_no" => $row['enroll_no'],
                    "course" => $row['course'],
                    "batch" => $row['batch'],
                    "gender" => $row['gender'],
                    "phone" => $row['phone'],
                    "address" => $row['address'],
                    "town" => $row['town'],
                    "town_distance" => $row['town_distance'],
                    "uni_distance" => $row['uni_distance'],
                    "father_name" => $row['father_name'],
                    "father_income" => $row['father_income'],
                    "mother_name" => $row['mother_name'],
                    "mother_income" => $row['mother_income'],
                    
                    "email" => $row['stu_email'],
                ]);

                $user=User::create([
                    'name'=>$row['first_name']." ".$row['last_name'],
                    "email" => $row['stu_email'],
                    "password" => Hash::make('1234'),
                    "userroll" => 'student',
                ]);
                
                return [$student,$user];   
               
                /*
            }
            else{
                $notuploaded = 'not uploaded';
                return $notuploaded;
            }   
            */   
        }


}
