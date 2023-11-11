<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'customer_id',
        'comment_id',
        'title',
        'content',
        'Image',
        'Views',
        'Report_id',
    ];
    public function getBlogNew()
    {
        $blogNew = Blog::orderBy('posts.id', 'desc')->paginate(12);
        return $blogNew;
    }
}
