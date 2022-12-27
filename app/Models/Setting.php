<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable=[
        'email',
'phone',
'facebook',
'youtube',
'instagram',
'telegram',
'Twitter',
'linkedin',
    ];
}
