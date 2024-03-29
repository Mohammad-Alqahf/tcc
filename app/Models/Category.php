<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Post;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['name','created_at','updated_at'];
    protected $hidden=[];

    public function posts()
    {
        return $this->hasMany(Post::class,'category_id');
    }
}
