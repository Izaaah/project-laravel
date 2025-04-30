<?php

// app/Http/Controllers/ArticleController.php
namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('category', 'tags')->get(); // Mengambil artikel dengan relasi
        return view('articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::with('category', 'tags', 'comments')->where('slug', $slug)->firstOrFail();
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('articles.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'array|exists:tags,id',
        ]);

        $article = new Article();
        $article->title = $validated['title'];
        $article->slug = \Str::slug($validated['title']);
        $article->content = $validated['content'];
        $article->id_category = $validated['category_id'];
        $article->id_user = auth()->id();
        $article->save();

        if ($validated['tags']) {
            $article->tags()->attach($validated['tags']);
        }

        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }
}

