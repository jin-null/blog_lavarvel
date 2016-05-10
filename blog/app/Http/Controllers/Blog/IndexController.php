<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Article;

class IndexController extends Controller
{
    function index()
    {
        $articles = articles::with('category')->get();
//        return $articles;
        return view('blog.index', ['articles' => $articles]);
    }

    function create()
    {
        return view('blog.create');
    }

    function store(Request $request)
    {

//        $flight = new Flight;
//        $flight->name = $request->name;
//        $flight->save();


        /*
        $article = new Article;
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->save();
        */

        Article::create($request->all());
        return redirect('/');
    }


    function edit($id)
    {
        $article = Article::find($id);
        return view('blog.edit')->with('article', $article);
    }

    function update(Request $request)
    {
        $article = Article::find($request->id);
        $article->update($request->all());
        return redirect('/');
    }
}
