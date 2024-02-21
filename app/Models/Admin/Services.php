<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    
    protected $table = 'services';
    
    protected $fillable = [
        'id','technologies','image','slug','short_description','serveics_description','alt'
    ];
}
