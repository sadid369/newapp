<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    // use SoftDeletes;
    
    protected $fillable = [
        'title',
        'description',
        'status',
        'publish_date',
        'user_id',
        'category_id',
        'views'
    ];
    // protected $guarded =[
    //     'title',
    //     'description',
    //     'status',
    //     'publish_date',
    //     'user_id',
    //     'category_id',
    //     'views'
    // ];

   public function categories()  {
        return $this->belongsTo(Categories::class,"category_id","id");
    }
}
