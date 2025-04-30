<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // app/Models/Article.php
public function user()
{
    return $this->belongsTo(User::class, 'id_user');
}

public function category()
{
    return $this->belongsTo(Category::class, 'id_category');
}

public function tags()
{
    return $this->belongsToMany(Tag::class, 'article_tag', 'id_article', 'id_tag');
}

public function comments()
{
    return $this->hasMany(Comment::class, 'id_article');
}

}
