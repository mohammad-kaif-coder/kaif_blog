<?php

namespace App\Models\Admin\SeoContent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSeo extends Model
{
    use HasFactory;
    
     protected $table = 'seo_content';
    
    protected $fillable = [
        'id','meta_title','meta_description','meta_keyword','page_title','pagetype'
    ];
}
