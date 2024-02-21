<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;
    
    protected $table = 'homepage';
     protected $fillable = [
         'id','name',
         'designation','facebook',
         'twitter','instagram',
         'linkedin','pinterest',
         'cv','profile','logo',
         'title','description',
         'back_image'
     ];
}
