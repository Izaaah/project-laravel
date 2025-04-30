<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // app/Models/Comment.php
public function article()
{
    return $this->belongsTo(Article::class, 'id_article');
}

}
