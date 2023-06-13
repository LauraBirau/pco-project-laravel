<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use function Symfony\Component\String\s;

class ArticleController extends Controller
{

    public function index()
    {
        //Show a collection of resources.
        $articles = Article::latest()->get();

    return view('articles.index', compact('articles'));
    }

        public function show($id)
    {
        //Show a single resource.
        $article = Article::find($id);
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        //Show a view to create a new resource.
    return view('articles.create');
    }


    public function store($request)
    {
        //Persist the new resource.
        Article::create($request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]));
        return redirect('/articles');

    }

    public function edit($id)
    {
        //Show a view to edit an existing resource.
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        //Persist the edited resource.
        $article->update(request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]));
        return redirect('/articles/' .$article->id);
    }

    public function destroy($id)
    {
        //Delete the resource.
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles');
    }

}
