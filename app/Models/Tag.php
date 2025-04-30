<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // app/Models/Tag.php
public function articles()
{
    return $this->belongsToMany(Article::class, 'article_tag', 'id_tag', 'id_article');
}

}
