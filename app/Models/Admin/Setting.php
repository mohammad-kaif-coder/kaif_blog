<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'setting';
    
    protected $fillable =[
        'id','site_title','site_description','site_favicon','site_logo','admin_title','admin_description','admin_favicon','admin_logo'
    ];
}
