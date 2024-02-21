<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialize extends Model
{
    use HasFactory;
    
    protected $table = 'multilple_content';
    
    protected $fillable = [
        'id','s_title','s_stash','pagetype','sub_type'
    ];
}
