<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutpage extends Model
{
    use HasFactory;
    
    protected $table = 'aboutpage';
    
    protected $fillable = [
        
        'id','name','title','description','sub_title'
    ];
}
