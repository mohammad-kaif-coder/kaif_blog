<?php

namespace App\Models\admin\SeoContent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSeo extends Model
{
    use HasFactory;
    
    protected $table = 'seo_content';
    
    protected $fillable = [
        'id','meta_title','meta_description','meta_keyword','page_title','pagetype'
    ];
}
