<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;

    public function Cats(){
        return $this->belongsTo(Cats::class);
    }

    public function exams(){
        return $this->hasMany(Exam::class);
    }

    public function getStudentsCount(){
        $studentsNum =0;
        foreach ($this->exams as $exam){
            $studentsNum = $studentsNum + $exam->users()->count();
        }
        return $studentsNum;
    }
}
