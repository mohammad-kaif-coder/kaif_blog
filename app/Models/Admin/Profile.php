<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  Profile extends Model
{
    use HasFactory;
    
    protected $table = 'users';
    
    protected $fillable = [
        'id','name','email','phone','image','long_description','short_description','birth','location','designation'
    ];
}
