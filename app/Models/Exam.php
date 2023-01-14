<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    public function skills(){
        return $this->belongsTo(Skills::class);
    }

    public function Questions(){
        return $this->hasMany(Question::class);
    }
    
    
    public function users(){
        return $this->belongsToMany(User::class)
        ->withPivot('score','time_mins','status')->withTimestamps();
    }


}
