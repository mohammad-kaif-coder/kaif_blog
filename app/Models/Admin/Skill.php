<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    
    protected $table = 'multilple_content';
    
    protected $fillable = [
        'id','image','alt','title','stash','pagetype','sub_type'
    ];
}
